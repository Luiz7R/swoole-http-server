<?php

namespace App\Http\Controllers;

use League\Plates\Engine;
use App\DB\User;
use App\Services\SessionTable;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RegisterController
{
    public function registrar(RequestInterface $request, ResponseInterface $response, $args)
    {
        $templates = new Engine(ROOT_DIR . '/views');
        $response->getBody()->write($templates->render('register', ['message' => '']));
        return $response;
    }

    public function registrarHandler(RequestInterface $request, ResponseInterface $response, $args)
    {
        global $app;

        $data = $request->getParsedBody();

        $user = new User;
        $result = $user->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        if (!$result) {
            echo "Failed to create account!" . PHP_EOL;
            $app->getContainer()->get('logger')->info('Failed to insert record!');
            return $response
                ->withHeader('Location', '/register?error=Failed to create account!')
                ->withStatus(302);
        }
        echo "Record inserted successfully!" . PHP_EOL;


        $user = current((new User)->get('email', $data['email']));

        $session_table = SessionTable::getInstance();
        $session_table->set($request->session['id'], [
            'id' => $request->session['id'],
            'user_id' => $user['id'],
        ]);

        return $response
            ->withHeader('Location', '/admin')
            ->withStatus(302);
    }
}
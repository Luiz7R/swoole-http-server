<?php

namespace App\Http\Controllers;

use League\Plates\Engine;
use App\DB\User;
use App\Services\SessionTable;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AdminController
{
    public function admin(RequestInterface $request, ResponseInterface $response, $args)
    {
        $session_table = SessionTable::getInstance();
        $session_data = $session_table->get($request->session['id']);
        $user = current((new User)->find($session_data['user_id']));
        $user['expenses'] = (new User)->expenses($user['id']);

        $templates = new Engine(ROOT_DIR . '/views');
        $response->getBody()->write($templates->render('admin', 
            [ 'user_name' => $user['name'],'expenses' => $user['expenses'] ])
        );
        return $response;
    }
}
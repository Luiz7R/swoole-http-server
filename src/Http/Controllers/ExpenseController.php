<?php

namespace App\Http\Controllers;

use League\Plates\Engine;
use App\DB\Expense;
use App\DB\User;
use App\Services\SessionTable;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ExpenseController
{
    public function postExpense(RequestInterface $request, ResponseInterface $response, $args)
    {
        global $app;

        $data = $request->getParsedBody();

        $session_table = SessionTable::getInstance();
        $session_data = $session_table->get($request->session['id']);
        $user = current((new User)->find($session_data['user_id']));

        $expense = new Expense;
        $result = $expense->insert([
            'description' => $data['description'],
            'amount' => $data['value'],
            'expense_date' => $data['date'],
            'user_id' => $user['id'],
        ]);

        if (!$result) {
            echo "Failed to create expense!" . PHP_EOL;
            $app->getContainer()->get('logger')->info('Failed to insert record!');
            return $response
                ->withHeader('Location', '/admin?error=Failed to create expense!')
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

    public function showExpense(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $session_table = SessionTable::getInstance();
        $session_data = $session_table->get($request->session['id']);
        $user = current((new User)->find($session_data['user_id']));
        $expense = (new Expense)->find($args['id']);

        $response->getBody()->write(json_encode(['expense' => $expense]));
        return $response;
    }

    public function updateExpense(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $data = $request->getParsedBody();
        $id = $data['id'];

        $expense = (new Expense)->update($id, $data);

        $response->getBody()->write(json_encode(['expense' => $expense]));
        return $response;
    }

    public function deleteExpense(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $data = $request->getParsedBody();
        $id = $data['idDelete'];

        $expense = (new Expense)->delete($id);

        return $response
            ->withHeader('Location', '/admin')
            ->withStatus(302);
    }
}
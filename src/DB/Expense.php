<?php

namespace App\DB;

class Expense
{
    public function createTable()
    {
        $sql = <<<SQL
            CREATE TABLE expenses (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                description TEXT(256) NOT NULL,
                amount decimal(8,2),
                user_id INT(6) UNSIGNED,
                expense_date date,
                FOREIGN KEY (user_id) REFERENCES users(id)
            );
        SQL;
        return DbAdapter::execute($sql);
    }

    public function find($id)
    {
        $sql = <<<SQL
            SELECT * FROM expenses WHERE id = :id 
        SQL;
        return DbAdapter::fetchAll($sql, [':id' => $id]);
    }

    public function getAll()
    {
        $sql = <<<SQL
            SELECT * FROM expenses
        SQL;
        return DbAdapter::fetchAll($sql, []);
    }

    public function get($field, $value)
    {
        $sql = <<<SQL
            SELECT * FROM expenses WHERE $field = :$field
        SQL;
        return DbAdapter::fetchAll($sql, [':' . $field => $value]);
    }

    public function insert($data)
    {
        $sql = <<<SQL
            INSERT INTO expenses (description, amount, expense_date, user_id) 
            VALUES (:description, :amount, :expense_date, :user_id)
        SQL;

        return DbAdapter::execute($sql, $data);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE expenses SET description=:description, amount=:amount, expense_date=:date WHERE id=:id";

        DbAdapter::execute($sql,$data);
    }

    public function delete($id)
    {
        $sql = <<<SQL
            DELETE FROM expenses WHERE id = :id 
        SQL;
        return DbAdapter::execute($sql, [':id' => $id]);
    }
}
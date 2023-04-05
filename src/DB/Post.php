<?php

namespace App\DB;

use App\DB\DbAdapter;


class Post {
    public function createTable()
    {
        $sql = <<<SQL
            CREATE TABLE posts (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(100) NOT NULL,
                description TEXT(500) NOT NULL,
                user_id INT(6) UNSIGNED,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES users(id)
            );
        SQL;
        return DbAdapter::execute($sql);
    }

    public function insert($data)
    {
        $sql = <<<SQL
            INSERT INTO posts (title, description, user_id) VALUES (:title, :description, :user_id)
        SQL;

        return DbAdapter::execute($sql, $data);
    }
}
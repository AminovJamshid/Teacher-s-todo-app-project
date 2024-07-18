<?php

declare(strict_types=1);

namespace Rustam\TodoApp;

use PDO;

class Task
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function add(string $text): bool
    {
        $status = false;
        $stmt   = $this->pdo->prepare("INSERT INTO todos (text, status) VALUES (:text, :status)");
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':status', $status, PDO::PARAM_BOOL);
        return $stmt->execute();
    }

    public function getAll(): false|array
    {
        return $this->pdo->query("SELECT * FROM todos")->fetchAll();
    }
}
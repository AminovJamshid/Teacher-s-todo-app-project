<?php

declare(strict_types=1);

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function getTgUser(int $chatId)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE chat_id=:chatId');
        $stmt->bindParam(':chatId', $chatId);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function getStatus(int $chatId)
    {
        $query = 'SELECT * FROM users WHERE chat_id=:chatId AND status IS NOT NULL ORDER BY id DESC LIMIT 1';
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':chatId', $chatId);
        $stmt->execute();
        return $stmt->fetchObject();
    }
}
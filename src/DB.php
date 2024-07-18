<?php

declare(strict_types=1);

namespace Rustam\TodoApp;

use PDO;

class DB
{
    public static function connect(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=todo_app', 'root', '1234');
    }
}
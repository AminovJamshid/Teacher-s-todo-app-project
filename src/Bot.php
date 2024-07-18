<?php

declare(strict_types=1);

use GuzzleHttp\Client;

class Bot
{
    const string TOKEN = "7032512823:AAFmnkUO_PDRF3xpJU70BgeL6DLqtmRTdzc";
    const string API   = "https://api.telegram.org/bot".self::TOKEN."/";
    public Client $http;
    private PDO   $pdo;

    public function __construct()
    {
        $this->http = new Client(['base_uri' => self::API]);
        $this->pdo  = DB::connect();
    }

    public function handleStartCommand(int $chatId): void
    {
        $welcomeText = "Welcome to the best TODO App ever. You can use these commands to handle your tasks:\n";
        $welcomeText .= "/add - to add a new task \n/all - to view all tasks\n";
        $this->http->post('sendMessage', [
            'form_params' => [
                'chat_id'      => $chatId,
                'text'         => $welcomeText,
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => 'Add new task', 'callback_data' => 'add'],
                        ],
                    ]
                ])
            ]
        ]);
    }

    public function handleAddCommand(int $chatId): void
    {
        $status = 'add';
        $stmt   = $this->pdo->prepare("INSERT INTO users (chat_id, status) VALUES (:chat_id, :status)");
        $stmt->bindParam(':chat_id', $chatId);
        $stmt->bindParam(':status', $status);
        $result = $stmt->execute();
        if ($result) {
            $this->http->post('sendMessage', [
                'form_params' => [
                    'chat_id' => $chatId,
                    'text'    => "Please, add you task"
                ]
            ]);
        }
    }

    public function handleAllCommand(int $chatId)
    {
        $query = "SELECT todos.text, todos.status FROM todos
                    JOIN todo_app.users on users.id = todos.user_id
                    WHERE chat_id = :chatId";
        $stmt = $this->pdo->prepare($query);

    }
}
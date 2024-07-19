<?php

declare(strict_types=1);

$bot = new Bot();

if (isset($update->message)) {
    $message = $update->message;
    $chatId  = $message->chat->id;
    $user    = $message->from->username ?? '';
    $text    = $message->text ?? 'Not specified';

    if ($text === '/start') {
        $bot->handleStartCommand($chatId);
        return;
    }

    if ($text === '/add') {
        $bot->handleAddCommand($chatId);
        return;
    }

    $user = new User();
//    $user->getTgUser($chatId);

    if($user->getStatus($chatId)->status === 'add'){
        $task = new Task();
        $task->add($text);
    }
}

if (isset($update->callback_query)) {
    $callbackQuery = $update->callback_query;
    $callbackData  = $callbackQuery->data;
    $chatId        = $callbackQuery->message->chat->id;
    $messageId     = $callbackQuery->message->message_id;

    $bot->http->post('sendMessage', [
        'form_params' => [
            'chat_id' => $chatId,
            'text'    => $callbackData,
        ]
    ]);
    return;
}
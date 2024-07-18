<?php

declare(strict_types=1);

$bot = new Bot();

if (isset($update->message)) {
    $message = $update->message;
    $chat_id = $message->chat->id;
    $user    = $message->from->username ?? '';
    $text    = $message->text ?? 'Not specified';

    if ($text === '/start') {
        $bot->handleStartCommand($chat_id);
        return;
    }

    if ($text === '/add') {
        $bot->handleAddCommand($chat_id);
        return;
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
<?php

declare(strict_types=1);

$bot = new Bot();

if (isset($update->message)) {
    $message = $update->message;
    $chatId  = $message->chat->id;
    $text    = $message->text;

    if ($text === "/start") {
        $bot->handleStartCommand($chatId);
        return;
    }

    if ($text === "/add") {
        $bot->handleAddCommand($chatId);
        return;
    }

    if ($text === "/all") {
        $bot->getAllTasks($chatId);
        return;
    }

    $bot->addTask($chatId, $text);
}

if (isset($update->callback_query)) {
    $callbackQuery = $update->callback_query;
    $callbackData  = (int) $callbackQuery->data;
    $chatId        = $callbackQuery->message->chat->id;
    $messageId     = $callbackQuery->message->message_id;

    $bot->handleInlineButton($chatId, $callbackData);
}

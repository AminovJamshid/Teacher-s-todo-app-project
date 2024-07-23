<?php

require_once "vendor/autoload.php";
require 'functions.php';

date_default_timezone_set('Asia/Tashkent');

$update = json_decode(file_get_contents('php://input'));
$task = new Task();

if (isset($update)) {
    if (isset($update->update_id)) {
        require 'bot/bot.php';
        return;
    }




    $path = parse_url($_SERVER['REQUEST_URI'])['path'];

    if ($path === '/add') {
        $task->add($update->text, $update->userId);
    }




    
}








if ($_SERVER['REQUEST_URI'] === '/tasks') {
    echo json_encode($task->getAll());
    return;
}














if (count($_GET) > 0 || count($_POST) > 0) {
    if (isset($_POST['text'])) {
        $task->add($_POST['text']);
    }

    if (isset($_GET['complete'])) {
        $task->complete($_GET['complete']);
    }

    if (isset($_GET['uncompleted'])) {
        $task->uncompleted($_GET['uncompleted']);
    }

    if (isset($_GET['delete'])) {
        $task->delete($_GET['delete']);
    }
}

require 'view/home.php';

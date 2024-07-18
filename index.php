<?php

require_once "vendor/autoload.php";

if (count($_GET) > 0 || count($_POST) > 0) {
    $task = new \Rustam\TodoApp\Task();

    if (isset($_POST['text'])) {
        $task->add($_POST['text']);
    }

    if (isset($_GET['complete'])) {
        $task->complete($_GET['complete']);
    }

    if (isset($_GET['uncompleted'])) {
        $task->uncompleted($_GET['uncompleted']);
    }
}

require 'view/home.php';

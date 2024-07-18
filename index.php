<?php

require_once "vendor/autoload.php";

if (isset($_POST['text'])) {
    $task = new \Rustam\TodoApp\Task();
    $task->add($_POST['text']);
}

require 'view/home.php';

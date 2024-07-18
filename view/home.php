<?php

declare(strict_types=1);

$task     = new \Rustam\TodoApp\Task();
$todoList = $task->getAll(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO App</title>
</head>
<body>

<?php
echo "<ul>";
foreach ($todoList as $item) {
    echo "<li>{$item['text']}</li>";
}
echo "</ul>"; ?>
<form action="../index.php" method="post">
    <input type="checkbox">
    <input type="text" name="text">
    <button type="submit">Add</button>
</form>
</body>
</html>
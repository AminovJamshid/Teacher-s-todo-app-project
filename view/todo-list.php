<?php

declare(strict_types=1);

$task     = new \Rustam\TodoApp\Task();
$todoList = $task->getAll();
?>

<div class="list-group list-group-flush">
    <?php
    foreach ($todoList as $item) {
        echo "<a href='?complete={$item['id']}' class='w-100 list-group-item'>";
        echo "    <input class='form-check-input me-1' type='checkbox' id='task-{$item['id']}'>";
        echo "    <label class='form-check-label' for='task-{$item['id']}'>{$item['text']}</label>";
        echo "</a>";
    } ?>
</div>

<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 14.08.2024
 * Time: 11:09
 *************************************************/

use Todo\Item as TodoItem;
use Todolist\Item as TodolistItem;

function autoloader($class)
{
    $classPath = str_replace("\\", "/", $class);
    $path = "lib/$classPath.php";

    if (file_exists($path)) {
        require $path;
    }
}

spl_autoload_register("autoloader");

$todolisttitle = new TodoItem("Meine Todoliste <br>");
$todoliste = new TodolistItem("Meine Todoliste");
$todoliste->addTodo(new TodoItem("Einkaufen"));
$todoliste->addTodo(new TodoItem("Lernen"));
$todoliste->addTodo(new TodoItem("Sport machen"));
$todoliste->addTodo(new TodoItem("Kochen"));
$todoliste->addTodo(new TodoItem("Aufräumen"));
$todoliste->addTodo(new TodoItem("Gassi gehen"));
$todoliste->addTodo(new TodoItem("Wäsche waschen"));
$todoliste->addTodo(new TodoItem("Auto waschen"));

$todos = $todoliste->getTodos();
echo $todolisttitle->getTitle();
foreach ($todos as $todo) {
    echo $todo->getTitle() . "<br>";
}

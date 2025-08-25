<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 14.08.2024
 * Time: 11:04
 *************************************************/
namespace Todolist;

class Item
{
    private $name = "";
    private $todoItems = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addTodo(\Todo\Item $item)
    {
        $this->todoItems[] = $item;
    }

    public function getTodos()
    {
        return $this->todoItems;
    }
}
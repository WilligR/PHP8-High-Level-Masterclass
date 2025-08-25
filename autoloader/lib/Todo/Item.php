<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 14.08.2024
 * Time: 11:03
 *************************************************/

namespace Todo;

class Item
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
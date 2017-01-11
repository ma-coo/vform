<?php

namespace Double;

class Index
{
    public $name;

    public function __construct()
    {
        $this->name = "oda";
    }

    public function getName()
    {
        return $this->name;
    }
}
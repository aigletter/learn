<?php


namespace learning;


trait SayHelloTrait
{
    public $name;

    public function sayName()
    {
        echo 'My name is ' . $this->name;
    }
}
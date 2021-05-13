<?php


namespace learning;


abstract class Vehicle implements MoveInterface
{
    public $name;

    public $year;

    protected $engine;

    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }

    //abstract public function move();

    public function sayHello()
    {
        echo 'Hello. I am ' . $this->formatHello() . PHP_EOL;
    }

    public function formatHello()
    {
        return $this->name . ', ' . $this->year;
    }

    abstract protected function startEngine();
}
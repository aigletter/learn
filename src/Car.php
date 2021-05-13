<?php


namespace learning;


class Car extends Vehicle
{
    public const NUMBER = 4;

    protected $color;

    public function __construct($name, $year)
    {
        $this->color = 'red';

        parent::__construct($name, $year);
    }

    public function move()
    {
        $this->startEngine();
        $this->doSomething();
        echo 'I am going' . PHP_EOL;
    }

    private function doSomething()
    {

    }

    public function startEngine()
    {
        echo 'Start car engine' . PHP_EOL;
    }

    public function sayHello()
    {
        echo 'Blablabla';
        parent::sayHello();
    }
}
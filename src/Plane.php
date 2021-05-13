<?php


namespace learning;


class Plane extends Vehicle
{
    public function move()
    {
        // ...
        echo 'I am flying' . PHP_EOL;
    }

    protected function startEngine()
    {
        echo 'Start plane engine' . PHP_EOL;
    }
}
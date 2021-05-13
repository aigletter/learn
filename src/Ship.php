<?php


namespace learning;


class Ship extends Vehicle
{
    public function move()
    {
        echo 'I am swimming' . PHP_EOL;
    }

    protected function startEngine()
    {
        echo 'Start ship engine' . PHP_EOL;
    }
}
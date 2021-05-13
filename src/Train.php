<?php


namespace learning;


class Train implements MoveInterface
{

    public function move()
    {
        echo 'Move train' . PHP_EOL;
    }
}
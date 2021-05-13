<?php


namespace learning;


class VehicleManager
{
    public function send(MoveInterface $vehicle)
    {
        // ...
        $vehicle->move();
    }
}
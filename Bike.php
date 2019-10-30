<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Bike extends Vehicle implements LightableInterface
{
    /**
     * @var bollean
     */
    protected $light = false;

    public function switchOn(): boolean
    {
        $this->light = true;
        return true;
    }

    public function switchOff(): boolean
    {
        $this->light = false;
        return false;
    }
}
<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @var bollean
     */
    protected $light = false;

    public function switchOn()
    {
        if ($this->currentSpeed > 10 ) {
            $this->light = true;
           return true;

        }
        return false;
    }

    public function switchOff()
    {
        $this->light = false;
        return false;
    }
}
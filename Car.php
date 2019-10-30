<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @const array
     * Energy type for car
     */

    const ALLOWED_ENERGIES = ['fuel', 'electric', 'mazout'];

    /**
     * @var string
     */

    protected $energy;

    /**
     * @var int
     */
    protected $energyLevel;
    /**
     * @var bollean
     */
    protected $light = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn()
    {

            $this->light = true;
            return true;


    }

    public function switchOff()
    {
        $this->light = false;
        return false;

    }
}
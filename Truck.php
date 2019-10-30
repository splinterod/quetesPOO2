<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Truck extends Vehicle implements LightableInterface
{
    /**
     * @var int
     */

    private $loadCapacity;

    /**
     * @var int
     */
    private $load = 0;
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
    /**
     * @var bollean
     */
    protected $light = false;

    /**
     * constructor classe (idem Class Car + $loadCapactiy
     */

    public function __construct(string $color, int $nbSeats, string $energy, int $loadCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->energy = $energy;
        $this->loadCapacity = $loadCapacity;
    }

    /**
     * Getter & Setter for load
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    /**
     * Method load truck (with error if load > load capacity)
     */
    public function addLoad(int $load)
    {
        $actualLoad = $this->load;
        $maxCapacity = $this->loadCapacity;

        if ($load + $actualLoad > $maxCapacity) {
            return "Max load reach, you can not add this load to the truck";
        } else {
            $this->load = $this->load + $load;
            return "Actual load is " . $this->load;
        }
    }

    public function isFilled()
    {
        $loadToAdd = $this->loadCapacity - $this->load;
        if ($this->load < $this->loadCapacity) {
            return "truck is in filling: You can add " . strval($loadToAdd) . " in truck";
        } else {
            return "truck is full";
        }
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

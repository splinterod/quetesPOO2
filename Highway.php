<?php


abstract class Highway
{    /**
    * @var array
    */
    protected $currentVehicle;
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @return mixed
     */
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * @param mixed $currentVehicle
     */
    protected function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    protected function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    protected function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    abstract public function addVehicule($vehicle);



}
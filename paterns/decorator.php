<?php
interface CarService
{
    public function getCost();

    public function getDescription();
}

/**
 * Core Serviece
 **/
class BasicIsnpection implements CarService
{
    public function getCost()
    {
        return 19;
    }

    public function getDescription()
    {
        return 'Basic Isnpection';
    }
}
/**
 * Decorater
 **/
class OilChange implements CarService
{
    public $carService;
    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 22 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', Oil Change';
    }
}


/**
 * Decorater
 **/
class Rotation implements CarService
{
    public $carService;
    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 11 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', Rotation';
    }
}



// echo (new Rotation(
//     (new OilChange(
//         new BasicIsnpection()
//     ))
// ))->getCost();

$service = new OilChange(new BasicIsnpection());

// echo $service->getDescription();
echo $service->getCost();
echo '<br>';
echo $service->getDescription();

<?php

abstract class HomeChecker
{
    protected $successor;

    abstract public function check(HomeChecker $home);

    public function succedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->locked) {
            throw new Exception("Door are locked");
        }

        $this->next($home);
    }
}

class Lights extends HomeChecker
{

}

class Alarm extends HomeChecker
{

}

class HomeStatus
{
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;
}

$locks = new Locks;
$locks->check();

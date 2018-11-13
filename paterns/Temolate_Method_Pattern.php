<?php
/**
 * Template Method Pattern
 **/
abstract class Daily
{
    public function make()
    {
        $this->wakeUp()
            ->indiv()
            ->sleep();
    }

    abstract public function indiv();

    public function wakeUp()
    {
        echo 'wakeUp, ';
        return $this;
    }

    public function sleep()
    {
        echo 'sleep.';
        return $this;
    }
}

class Me extends Daily
{
    public function indiv()
    {
        echo 'write code,';
        return $this;
    }
}

class She extends Daily
{
    public function indiv()
    {
        echo 'make sales, ';
        return $this;
    }
}

$me = (new Me())->make();
echo '<br>';
$she = (new She())->make();

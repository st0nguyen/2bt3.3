<?php

class Fan
{
    const slow = 1;
    const medium = 2;
    const fast = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct($_radius = 5, $_on = false, $_color = "blue")
    {
        $this->speed = self::slow;
        $this->on = $_on;
        $this->radius = $_radius;
        $this->color = $_color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getRadius()
    {
        return $this->radius;
    }


    public function getSpeed()
    {
        return $this->speed;
    }

    public function isOn()
    {
        return $this->on;
    }

    function setColor($color)
    {
        $this->color = $color;
    }


    public function setOn($on)
    {
        $this->on = $on;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setSpeed($speed)
    {
        if ($speed == self::slow || $speed == self::medium
            || $speed == self::fast)
         {
            $this->speed = $speed;
        }
        else
            echo "error";
    }

    public function toString()
    {
        if ($this->isOn() == true) {
            return "fan is on - " . "color: " . $this->getColor() . ", speed: "
                . $this->getSpeed()
                . ", radius: " . $this->getRadius();
        } elseif ($this->isOn() == false) {
            return "fan is off - " . "color: " . $this->getColor()
                . ", radius: " . $this->getRadius();
        }
    }
}

$fan1 = new Fan();
$fan1->setOn(true);
$fan1->setSpeed(Fan::fast);
$fan1->setRadius(10);
$fan1->setColor("yellow");


$fan2 = new Fan();
$fan2->setOn(true);
$fan2->setSpeed(Fan::medium);
$fan2->setRadius(5);
$fan2->setColor("blue");


echo $fan1->toString() . "<br>";
echo $fan2->toString();

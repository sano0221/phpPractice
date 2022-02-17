<?php

declare(strict_types=1);

class Lives
{
    // setProperty
    private $name;
    private $hitPoint;
    private $attackPoint;
    
    // setMethod

    public funtion __construct(string $name, int $hitPoint, int $attackPoint)
    {
        $this->name = $name;
        $this->hitPoint = $hitPoint;
        $this->$attackPoint = $attackPoint;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function doAttack()
    {
        echo $this->getName() . "は攻撃した。";
    }
}



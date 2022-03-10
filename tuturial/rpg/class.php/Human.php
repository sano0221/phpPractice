<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Lives.php';

class Human extendas Lives
{
    public function Attack(): void
    {
        echo $this->name . "は攻撃した　！"
    }
    public function calDamage($target): int
    {
        return $this->getAttackPoint();
    }
    public function getAttackPoint () {
        
    }
}



<?php


namespace App;


/**
 * Class Franc
 * @package App
 */
class Franc extends Money
{

    /**
     * Return new Franc object multiplied on $multiplier
     * @param int $multiplier
     * @return Franc
     */
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }

}
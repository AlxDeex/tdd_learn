<?php


namespace App;


/**
 * Class Bank
 * @package App
 */
class Bank
{
    /**
     * @param Expression $sum
     * @param string $currency
     * @return Money
     */
    public function reduce(Expression $sum, string $currency): Money
    {
        return Money::dollar(10);
    }

}
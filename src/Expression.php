<?php


namespace App;


/**
 * Interface Expression
 * @package App
 */
interface Expression
{
    /**
     * @param string $to
     * @param Bank $bank
     * @return Money
     */
    public function reduce(Bank $bank, string $to): Money;

}
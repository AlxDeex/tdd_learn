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

    /**
     * @param Money $added
     * @return Expression
     */
    public function plus(Money $added): Expression;

    /**
     * @param int $multiplier
     * @return Expression
     */
    public function times(int $multiplier): Expression;
}
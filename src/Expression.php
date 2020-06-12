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
     * @return Money
     */
    public function reduce(string $to): Money;

}
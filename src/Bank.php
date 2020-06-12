<?php


namespace App;


/**
 * Class Bank
 * @package App
 */
class Bank
{
    /**
     * @param Expression $source
     * @param string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }

}
<?php


namespace App;


/**
 * Class Bank
 * @package App
 */
class Bank
{
    /**
     * @var array
     */
    private $rates = [];

    /**
     * @param Expression $source
     * @param string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    /**
     * @param $from
     * @param $to
     * @param $rate
     */
    public function addRate($from, $to, $rate)
    {
        $hash = md5($from . $to);
        $this->rates[$hash] = $rate;

    }

    /**
     * @param $from
     * @param $to
     * @return int
     */
    public function rate($from, $to): int
    {
        if ($from === $to) {
            return 1;
        }
        return $this->rates[md5($from . $to)];
    }

}
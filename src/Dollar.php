<?php


namespace App;


/**
 * Class Dollar
 * @package App
 */
class Dollar
{
    /**
     * @var int
     */
    public $amount = 0;

    /**
     * Dollar constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     */
    public function times(int $multiplier)
    {
        $this->amount *= $multiplier;
    }

}
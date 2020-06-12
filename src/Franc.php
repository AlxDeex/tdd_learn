<?php


namespace App;


/**
 * Class Franc
 * @package App
 */
class Franc
{
    /**
     * @var int
     */
    private $amount = 0;

    /**
     * Franc constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * Return new Franc object multiplied on $multiplier
     * @param int $multiplier
     * @return Franc
     */
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    /**
     * @param Franc $object
     * @return bool
     */
    public function equals(Franc $object): bool
    {
        return $this->amount === $object->amount;
    }

}
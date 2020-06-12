<?php


namespace App;


/**
 * Class Money
 * @package App
 */
class Money
{

    /**
     * @var int
     */
    protected $amount = 0;

    /**
     * Money constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount && get_class($this) == get_class($object);
    }
}
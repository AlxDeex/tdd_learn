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
     * Return new Dollar object multiplied on $multiplier
     * @param int $multiplier
     * @return Dollar
     */
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param Dollar $object
     * @return bool
     */
    public function equals($object): bool
    {
        return $this->amount === $object->amount;
    }

}
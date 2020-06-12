<?php


namespace App;


/**
 * Class Money
 * @package App
 */
abstract class Money
{

    /**
     * @var int
     */
    protected $amount = 0;

    /**
     * @var string|null
     */
    protected $currency = null;

    /**
     * Money constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount && get_class($this) == get_class($object);
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract public function times(int $multiplier): Money;

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }
}
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
        return $this->amount === $object->amount && $this->currency == $object->currency;
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * Return new Money object multiplied on $multiplier
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }
}
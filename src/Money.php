<?php


namespace App;


/**
 * Class Money
 * @package App
 */
class Money implements Expression
{

    /**
     * @var int
     */
    private $amount = 0;

    /**
     * @var string|null
     */
    private $currency = null;

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
    public function times(int $multiplier): Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param Money $added
     * @return Expression
     */
    public function plus(Money $added): Expression
    {
        return new Sum($this, $added);
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $to
     * @param Bank $bank
     * @return $this
     */
    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->amount / $bank->rate($this->currency, $to);
        return new Money($amount, $to);
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
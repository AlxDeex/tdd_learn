<?php


namespace App;


/**
 * Class Sum
 * @package App
 */
class Sum implements Expression
{
    /**
     * @var Money
     */
    private $augend;
    /**
     * @var Money
     */
    private $addend;

    /**
     * Sum constructor.
     * @param Money $augend
     * @param Money $addend
     */
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * @param string $to
     * @param Bank $bank
     * @return Money
     */
    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->getAmount() + $this->addend->getAmount();
        return new Money($amount, $to);
    }

}
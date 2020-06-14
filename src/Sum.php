<?php


namespace App;


/**
 * Class Sum
 * @package App
 */
class Sum implements Expression
{
    /**
     * @var Expression
     */
    private $augend;
    /**
     * @var Expression
     */
    private $addend;

    /**
     * Sum constructor.
     * @param Expression $augend
     * @param Expression $addend
     */
    public function __construct(Expression $augend, Expression $addend)
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
        $augend = $this->augend->reduce($bank, $to)->getAmount();
        $addend = $this->addend->reduce($bank, $to)->getAmount();

        return new Money($augend + $addend, $to);
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
     * @param int $multiplier
     * @return Expression
     */
    public function times(int $multiplier): Expression
    {
        return new Sum($this->augend->times($multiplier), $this->addend->times($multiplier));
    }

}
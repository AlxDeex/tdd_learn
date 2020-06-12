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
        $augend = $this->augend->reduce($bank, $this->augend->currency())->getAmount();
        $addend = $this->addend->reduce($bank, $this->augend->currency())->getAmount();

        return new Money($augend + $addend, $to);
    }

    public function plus(Money $added): Expression
    {
        // TODO: Implement plus() method.
    }

}
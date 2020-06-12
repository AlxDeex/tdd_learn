<?php


namespace App;


/**
 * Class Dollar
 * @package App
 */
class Dollar extends Money
{

    /**
     * Return new Dollar object multiplied on $multiplier
     * @param int $multiplier
     * @return Dollar
     */
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

}
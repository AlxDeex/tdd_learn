<?php

namespace App\Tests\unit;

use PHPUnit\Framework\TestCase;
use App\Dollar;

class DollarTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }

}
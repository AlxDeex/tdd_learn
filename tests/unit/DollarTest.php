<?php

namespace App\Tests\unit;

use PHPUnit\Framework\TestCase;
use App\Dollar;

class DollarTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);

        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

}
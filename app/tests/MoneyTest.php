<?php

namespace app\src;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    // MEMO: $5 + 10 CHF = $10
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        $this->assertFalse((Money::Franc(5))->equals(Money::dollar(5)));
    }
}
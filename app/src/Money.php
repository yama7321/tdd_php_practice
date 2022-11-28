<?php

namespace app\src;

class Money implements Expression
{
    public $amount;
    public $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier):Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Expression $addend)
    {
        // TODO: Implement plus() method.
    }

    public function reduce(Bank $bank, string $to): Money
    {
        // TODO: Implement reduce() method.
    }

    public static function dollar(int $amount): Money
    {
        return (new Money($amount, "USD"));
    }
}
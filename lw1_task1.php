<?php

$calculator = new Calculator();

class Calculator
{
    private $mainNumber;

    public function sum(float $summaNumberFunc)
    {
        $this->mainNumber += $summaNumberFunc;
        return $this;
    }

    public function minus(float $minusNumberFunc)
    {
        $this->mainNumber -= $minusNumberFunc;
        return $this;
    }

    public function product(float $productNumberFunc)
    {
        $this->mainNumber *= $productNumberFunc;
        return $this;
    }

    public function division(float $divisionNumberFunc)
    {
        $this->mainNumber /= $divisionNumberFunc;
        if ($divisionNumberFunc === 0)
            $this->mainNumber = 0;
        return $this;
    }

    public function getResult(): float
    {
        return $this->mainNumber;
    }
}

echo '1 + 2 * 3 / 3 = '  . $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult(); // 3

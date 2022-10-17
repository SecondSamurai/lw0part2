<?php

$calculator = new Calculator();

class Calculator
{
    private float $mainNumber = 0;

    public function sum(float $summaNumberFunc): self
    {
        $this->mainNumber += $summaNumberFunc;
        return $this;
    }

    public function minus(float $minusNumberFunc): self
    {
        $this->mainNumber -= $minusNumberFunc;
        return $this;
    }

    public function product(float $productNumberFunc): self
    {
        $this->mainNumber *= $productNumberFunc;
        return $this;
    }

    public function division(float $divisionNumberFunc): self
    {
        if ($divisionNumberFunc == 0) {
            $this->mainNumber = 0;
        }
        else $this->mainNumber /= $divisionNumberFunc;
        return $this;
    }

    public function getResult(): float
    {
        return $this->mainNumber;
    }
}

echo '1 + 2 * 3 / 3 = '  . $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult(); // 3

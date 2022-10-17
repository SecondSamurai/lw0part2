<?php

$calculator = new Calculator();

class Calculator
{
    private $mainNumber;

    public function sum($summaNumberFunc)
    {
        $this->mainNumber += $summaNumberFunc;
        return $this;
    }

    public function minus($minusNumberFunc)
    {
        $this->mainNumber -= $minusNumberFunc;
        return $this;
    }

    public function product($productNumberFunc)
    {
        $this->mainNumber *= $productNumberFunc;
        return $this;
    }

    public function division($divisionNumberFunc)
    {
        $this->mainNumber /= $divisionNumberFunc;
        if ($divisionNumberFunc === 0)
            $this->mainNumber = 0;
        return $this;
    }

    public function getResult()
    {
        return $this->mainNumber;
    }
}

echo '1 + 2 * 3 / 3 = '  . $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult(); // 3

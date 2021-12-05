<?php

class MoneyFamily
{
    private int $individualAmount = 0;
    private int $availableCount = 0;
    private ?MoneyFamily $nextFamily = null;

    public function __construct(int $individualAmount, int $availableCount, MoneyFamily $nextFamily = null)
    {
        $this->individualAmount = $individualAmount;
        $this->availableCount = $availableCount;
        $this->nextFamily = $nextFamily;
    }

    public function append($count)
    {
        $this->availableCount += $count;
    }

    public function withdraw(int $amountToWithdraw)
    {
        $withdrawCount = floor($amountToWithdraw / $this->individualAmount);
        $remainingAmountToWithdraw = $amountToWithdraw % $this->individualAmount;
        if($withdrawCount > $this->availableCount) {
            $remainingAmountToWithdraw += ($this->individualAmount * ($withdrawCount - $this->availableCount) );
            $withdrawCount = $this->availableCount;
        }

        if($remainingAmountToWithdraw === 0 || ($this->nextFamily && $this->nextFamily->withdraw($remainingAmountToWithdraw)) ) {
            if($withdrawCount) {
                echo "{$withdrawCount} x {$this->individualAmount}\n";
                $this->availableCount -= $withdrawCount;
            }
            return true;
        }

        return false;
    }
}


$family5JD = new MoneyFamily(5, 100);
$family10JD = new MoneyFamily(10, 100, $family5JD);
$family20JD = new MoneyFamily(20, 100, $family10JD);
$family50JD = new MoneyFamily(50, 10, $family20JD);


//$withdrawAmount = 1000;
//echo "\n\nWithdraw {$withdrawAmount} JD: \n";
//$family50JD->withdraw($withdrawAmount);


$withdrawAmount = 1145;
echo "\n\nWithdraw {$withdrawAmount} JD: \n";
$family50JD->withdraw($withdrawAmount);

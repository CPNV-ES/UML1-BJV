<?php

class Caller extends Receiver {
    private string $number;
    private Float $moneyAmount;
    private Phonebooth $phonebooth;
    public function AddMoney($money) : void
    {
        //TODO
    }
    public function StoreMoney() : float
    {
        //TODO
    }

    //TODO Function naming could be more clear and specific
    public function Use($phonebooth) : void
    {
        $this->phonebooth = $phonebooth;
    }

}
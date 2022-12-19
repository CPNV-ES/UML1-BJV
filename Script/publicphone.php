<?php

class Caller {
    private string $number;
    private Float $moneyAmount;
    private Phonebooth $phonebooth;
    public function AddMoney() : void
    {

    }
    public function StoreMoney() : float
    {

    }
    public function Use($phonebooth) : void
    {
        $this.phonebooth = $phonebooth;
    }

}

class Phonebooth {
    private float $price;

    private string $number;

    public function Call() : bool
    {
    }
    public function ReturnMoney() : float
    {
        
    }

    private function RemoveMoney() : floatval
    {

    }
}

class Receiver {

    private string $number;

    private Phonebooth $phonebooth; 
    public function HangUp() : void
    {

    }

    //TODO inheritance with caller
}
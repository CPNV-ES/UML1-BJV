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
    private Receiver $receiver;//juste add phone number to call
    public function Call() : bool
    {
    }
    public function ReturnMoney() : float
    {
        
    }

    //TODO Add Method to manage the cost
}

class Receiver {
    private string $number;
    private Phonebooth $phonebooth; 
    public function HangUp() : void
    {

    }

    //TODO inheritance with caller
}
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
    private Receiver $receiver;
    private string $number;

    public function Call($phoneNumber: string) : Receiver
    {
        return Receiver::getByPhoneNumber($phoneNumber);
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

    public static Receiver getByPhoneNumber($phoneNumber: string);
    //TODO inheritance with caller
}
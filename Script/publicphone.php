<?php

class Caller {
    private Int $number;
    private Float $moneyAmount;
    private Phonebooth $phonebooth;
    public function AddMoney() : void
    {

    }
    public function StoreMoney() : string
    {

    }
    public function Use() : void
    {

    }

}

class Phonebooth {
    private float $price;
    private Reciever $reciver;
    public function Call() : bool
    {
    }
    public function ReturnMoney() : float
    {

    }
}

class Reciever {
    private Int $number;
    private Phonebooth $phonebooth; 
    public function HangUp() : void
    {

    }
}
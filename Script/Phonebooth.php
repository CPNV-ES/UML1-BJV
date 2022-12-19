<?php

require_once('Receiver.php');

class Phonebooth {
    private float $price;

    private string $number;

    public function Call($phoneNumber) : Receiver
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
<?php

class Receiver {

    private string $number;

    private Phonebooth $phonebooth; 
    public function HangUp() : void
    {

    }

    //TODO The receiver should have only 2 methods (HangUp and PickUp)
    public static Receiver getByPhoneNUmber($phoneNumber);
}
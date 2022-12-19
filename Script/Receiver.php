<?php

class Receiver {

    private string $number;

    private Phonebooth $phonebooth; 
    public function HangUp() : void
    {

    }

    public static Receiver getByPhoneNUmber($phoneNumber);
}
<?php

//TODO Code the sequence...
require_once('Phonebooth.php');
require_once('Receiver.php');
require_once('Caller.php');

$caller = new Caller();
$phonebooth = new Phonebooth();

$caller->AddMoney();
$caller->Use($phonebooth);

$receiver = $phonebooth->Call("+41 000 000 00 00");
$phonebooth->RemoveMoney();
$receiver->HangUp();
$phonebooth->ReturnMoney();
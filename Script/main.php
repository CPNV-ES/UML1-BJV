<?php

//TODO Code the sequence...
require_once('Phonebooth.php');
require_once('Receiver.php');
require_once('Caller.php');

//TODO Rewrite this file into a test class. Add assertion after each step to check if object's behavior meet the requirements.
$caller = new Caller();
$phonebooth = new Phonebooth();

$caller->AddMoney();
$caller->Use($phonebooth);

$receiver = $phonebooth->Call("+41 000 000 00 00");////TODO the caller is using Phonebooth and start the dialog... why did you initiate the receiver ?
$phonebooth->RemoveMoney();//TODO Remove Money should be invoked by HangUpd, no ?
$receiver->HangUp();
$phonebooth->ReturnMoney();//TODO no return ?
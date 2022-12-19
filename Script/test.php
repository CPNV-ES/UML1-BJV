<?php

require_once('publicphone.php');

$caller = new Caller();
$phonebooth = new Phonebooth();

$caller->AddMoney();
$caller->Use($phonebooth);

$receiver = $phonebooth->Call();
$phonebooth->RemoveMoney();
$receiver->HangUp();
$phonebooth->ReturnMoney();
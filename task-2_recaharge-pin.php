<?php

//Generating two hundred 15digits recharge pin for a telecommunication company

$rechargePin = [];

while (count($rechargePin) < 200) {
    //Generate pin
    $pin = mt_rand(111111111111111, 999999999999999);

    //Check if pin exists and push to the array if not
    if (!in_array($pin, $rechargePin)) {
        $rechargePin[] = $pin;
    }
}

//Display generated pins
foreach ($rechargePin as $key => $pin) {
    echo "<p>".($key + 1).' - '.$pin."</p>";
}
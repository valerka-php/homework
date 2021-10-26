<?php

require_once "index.php";


function calcCostTour($days,$country,$discount = null){
    $country = $_POST['country'];
    $days = $_POST['days'];
    $cost = 400;

    if ($country  !== 'Select your country') {
        if ($country == 'Egypt') {
            $cost *= 1.1;
        } elseif ($country == 'Italy') {
            $cost *= 1.12;
        }

        if (isset ($discount)) {
            $cost *= 0.95;
        }
        echo $cost * $days;

    } else {
        echo 'Please select your country';
    }

    return true;
}

calcCostTour($_POST['days'],$_POST['country'],$_POST['discount']);


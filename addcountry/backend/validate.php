<?php
include('connection.php');

function Validate($code,$country,$continent,$population){

if ($code == '') {
   echo 'Country code can not be empty';
    exit();
}

if (strlen($code) != 3) {
    echo 'Country code can  be greater than 3';
    exit();
}

if ($country == '') {
    echo 'Country name can not be empty';
    exit();
}

if ($continent == '') {
    echo 'countinent can not be empty';
    exit();
}

if ($continent == '') {
    echo'countinent can not be empty';
    exit();
}

if ($population == '') {
    echo 'population can not be empty';
    exit();
}

//check db

}

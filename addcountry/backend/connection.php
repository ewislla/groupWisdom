<?php

$connect = mysqli_connect('localhost', 'root', '', 'world');

if (!$connect) {
    die("Unable to connect to the database");
}

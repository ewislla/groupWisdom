<?php 
include ("validate.php");

$code = $_POST['code'];
$country = $_POST['country'];
$continent = $_POST['continent'];
$population = $_POST['population'];

Validate($code,$country,$continent,$population) ;

global $connect;
$check = "SELECT code FROM country WHERE code = ?";
$prep_check = mysqli_prepare($connect, $check);
mysqli_stmt_bind_param($prep_check, 's', $code);
mysqli_stmt_execute($prep_check);
$results = mysqli_stmt_get_result($prep_check);
$assoc = mysqli_fetch_assoc($results);
if (isset($assoc)) {
    echo "Country  already exists;";
    return;
}


//insert in db
$insert = "INSERT INTO country (Code, Name,Continent,Population) VALUES (?, ?, ?,?)";

$prep_insert  = mysqli_prepare($connect, $insert);
mysqli_stmt_bind_param($prep_insert, "sssi", $code, $country, $continent, $population);


if (mysqli_stmt_execute($prep_insert)) {
    echo "Country added to database";
    

} else {
    echo "Failed to add to db";
    exit;
}

?>
<?php 
session_start();

include ("backend/validate.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> Add country </h1>

<form action="backend/process.php" method="post">
  <label for="code">code:</label>
  <input name="code" type="text" >
<p style = "color: red;"><?= $_SESSION['code_error']  ?? null?></p>
  <br>

<label for="country">country</label>
<input type="text" name ="country"> 

<p style = "color: red;"><?= $_SESSION['country_error']  ?? null?></p>


  

<br>
  <label for="continent">continent:</label>
<input type="text" name="continent">
<p style = "color: red;"><?= $_SESSION['continent_error'] ?? null?></p>

<br>
  <label for="population">population:</label>
<input type="number" name="population">
<p style = "color: red;"><?= $_SESSION['population_error'] ?? null?></p>


<br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
unset($_SESSION['code_error']); 
unset($_SESSION['country_error']); 
unset($_SESSION['countinent_error']); 
unset($_SESSION['population_error']); 

?>
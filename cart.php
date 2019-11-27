<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>
    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form class="form" action="cart.php" method="post">
          <input type="text" name="input" value="">
          <input type="submit" name="submit" value="">
        </form>
    </body>
</html>

<?php


$cookie1 = '#1';
$cookie2 = '#2';
$cookie3 = '#3';

setcookie('Skateboard', $cookie1);
setcookie('BasketBal', $cookie2);
setcookie('Skeelers', $cookie3);

if(isset($_POST['submit']))
{
  $input = $_POST['input'];
  if ($_COOKIE[$input])
  {
    echo "<h1>Gekozen item: " . $_COOKIE[$input] . "</h1>";
  }
  else
  {
    echo "<h1>Er bestaat geen optie als $input</h1>";
  }
}

 ?>

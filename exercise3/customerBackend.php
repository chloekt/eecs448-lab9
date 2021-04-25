<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo '<link rel="stylesheet" href="style.css" type="text/css"/>';
  $username=$_POST["username"];
  $password=$_POST["password"];
  $bowties=$_POST["bowties"];
  $tagliatelle=$_POST["tagliatelle"];
  $ravs=$_POST["ravs"];
  $shipping=$_POST["shipping"];

  $bowtieprice = $bowties*20.00;
  $tagprice = $tagliatelle*15.00;
  $ravprice = $ravs*30.00;

  $shipprice = 0;

  if($shipping == "Free 7 Day Shipping"){
    $shipprice = 0;
  }
  else if($shipping == "3-day Shipping ($5.00)"){
    $shipprice = 5;
  }
  else if($shipping == "Overnight Shipping ($50.00)"){
    $shipprice = 50;
  }

$totalprice = $shipprice + $bowtieprice + $tagprice + $ravprice;

  echo "<h3>Thank you for your Pasta Store Purchase " .$username. "</h3>";
  echo "<h4>Your password is: " .$password. "</h4><br>";
  echo "<h4>Your Receipt is Printed below</h4><br>";
  echo '<table><tr>';
    echo "<th></th>";
    echo "<th><b>Quantity</b></th>";
    echo "<th><b>Per Item Cost</b></th>";
    echo "<th><b>Subtotal</b></th>";
  echo "</tr><tr>";
    echo "<th><b>2lb Farfalle</b></th>";
    echo "<td>" .$bowties. "</td>";
    echo "<td>$20.00</td>";
    echo "<td> $" .$bowtieprice. "</td>";
  echo "</tr><tr>";
    echo "<th><b>1.5lb Tagliatelle</b></th>";
    echo "<td>" .$tagliatelle. "</td>";
    echo "<td>$15.00</td>";
    echo "<td> $" .$tagprice. "</td>";
  echo "</tr><tr>";
    echo "<th><b>2.5lb Ricotta-Filled Ravioli</b></th>";
    echo "<td>" .$ravs. "</td>";
    echo "<td>$30.00</td>";
    echo "<td> $" .$ravprice. "</td>";
  echo "</tr><tr>";
    echo "<th><b>Shipping</b></th>";
    echo "<td colspan='2'>" .$shipping. "</td>";
    echo "<td>$" .$shipprice. "</td>";
  echo "</tr><tr>";
    echo "<th colspan='3'><b>Total Cost</b></th>";
    echo "<th>$" .$totalprice. "</th>";
  echo "</tr>";
  echo "</table>";
 ?>

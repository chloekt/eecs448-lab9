<?php
  error_reporting(E_All);
  ini_set("display_errors", 1);
  echo "<table>";
  echo "<tr>";
  echo "<td>" .X. "</td>";
  echo "<td>" ." "."</td>";
  for($i = 1; $i<=100; $i++){
    echo "<td>" ."<b>$i</b>". "</td>";
    }
    for($i = 1; $i<=100; $i++){
      $j=$i;
      echo "<tr>";
      echo "<td>" ."<b>$j</b>". "<td>";
      for($j = 1; $j<=100; $j++){
        echo "<td>" .$i*$j. "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  ?>

<?php
      error_reporting(E_All);
      ini_set("display_errors", 1);

      $q1 = $_POST["q1"];
      $q2 = $_POST["q2"];
      $q3 = $_POST["q3"];
      $q4 = $_POST["q4"];
      $q5 = $_POST["q5"];

      $correctanswers = array("Lima", "Mount Everest", "Boris Johnson", "Russia", "Euro");

      echo "<h3>Question 1: What is the Capital City of Peru?</h3>";
      echo "<p>Your answer: " .$q1. "</p>";
      echo "<p>Correct answer: " .$correctanswers[0]. "</p>";
      if($q1 == $correctanswers[0]){
        $percent = $percent + 20;
        $numcorrect++;
      }
      echo "<h3>Question 2: What is the Tallest Mountain in the world?</h3>";
      echo "<p>Your answer: " .$q2. "</p>";
      echo "<p>Correct answer: " .$correctanswers[1]. "</p>";
      if($q2 == $correctanswers[1]){
        $percent = $percent + 20;
        $numcorrect++;
      }
      echo "<h3>Question 3: Who is the Prime Minister of the United Kingdom?</h3>";
      echo "<p>Your answer: " .$q3. "</p>";
      echo "<p>Correct answer: " .$correctanswers[2]. "</p>";
      if($q3 == $correctanswers[2]){
        $percent = $percent + 20;
        $numcorrect++;
      }
      echo "<h3>Question 4: Which country is not in the European Union?</h3>";
      echo "<p>Your answer: " .$q4. "</p>";
      echo "<p>Correct answer: " .$correctanswers[3]. "</p>";
      if($q4 == $correctanswers[3]){
        $percent = $percent + 20;
        $numcorrect++;
      }
      echo "<h3>Question 5: What is the currency of Italy?</h3>";
      echo "<p>Your answer: " .$q5. "</p>";
      echo "<p>Correct answer: " .$correctanswers[4]. "</p>";
      if($q5 == $correctanswers[4]){
        $percent = $percent + 20;
        $numcorrect++;
      }

      echo "<p>You got " .$numcorrect. " questions right!</p>";
      echo "<p>You scored a " .$percent. "% on this quiz</p>";
 ?>

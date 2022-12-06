<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $phrase  ="My name is M.huzaifa";
      echo("the length of the phrase is  = " . strlen($phrase) );
    ?>
    <br>
    <?php
      echo("there are  = " . str_word_count($phrase) ." words in string" );
    ?>
    <br>
    <?php
      echo("the reverse of a string  = " . strrev($phrase)  );
    ?>
    <br>
    <?php
      echo("the position of M.huzaifa is   = " . strpos($phrase, "M.huzaifa")  );
    ?>
    <br>
    <?php 
      echo (str_replace("M.huzaifa" , "shahbaz" , $phrase));
    ?>
    <br>
    <?php 
      echo(ucwords("I want to become a software engineers" ));
    ?>
    <br>
    <?php 
      echo(strtoupper($phrase));
    ?>
    <br>
    <?php
      echo(strtolower($phrase));
    ?>
    <br>
    <?php
      $x = 53632;
      var_dump(is_int ($x));
    ?>
    <br>
    <?php
      $z = 536.32;
      var_dump(is_int ($z));
    ?>
    <br>
    <?php
      $y = 6.5e308;
      var_dump($y);
    ?>
    <br>
    <?php
      $a = 536.32;
      var_dump(is_numeric($a));
    ?>
    <br>
    <?php
      $b = 626.62;
      var_dump(is_numeric($b));
    ?>
    <br>
    <?php
      $c ="hello";
      var_dump(is_numeric($c));
    ?>
    <br>
    <?php
      $d ="526.73" +100;
      var_dump(is_numeric($d));
    ?>
    <br>
    <?php
      echo (pi());
    ?>
    <br>
    <?php
      echo (min(1,2,3,4,5,6,7,8,9,10));
    ?>
    <br>
    <?php
      echo (max(1,2,3,4,5,6,7,8,9,10));
    ?>
    <br>
    <?php
      echo (abs(-523.5 ));
    ?>
    <br>
    <?php
      echo (sqrt(64));
    ?>
    <br>
    <?php
      echo (round(1.67));
    ?>
    <br>
    <?php
      echo (round(5.43));
    ?>
    <br>
    <?php
      echo (round(5.5));
    ?>
    <br>
    <?php
      echo (rand());
    ?>
    <br>
    <?php
      echo (rand(10 ,20));
    ?>
    <br>
    <?php
      define("good_habit" , "the first goood habit is Gartitude");
      echo good_habit;
    ?>
</body>
</html>

<!-- local variable -->

<?php
        function myfun(){

            $x =5 *6;
            echo "<P> variable x inside function is : $x <?p>";
        }
        myfun();
        echo "<P> variable x inside function is : $x <?p>";
?>

<br>
<br>
<br>

<!-- global variable -->
<?php
            $y =526/2;
        function myfunc(){

            echo "<P> variable x inside function is : $y <?p>";
        }

        myfunc();
        echo "<P> variable x inside function is : $y <?p> <br><br>";
    
?>

<br>
<br>
<br>

<!-- static or non-static variable -->
<?php
        function myfuncti(){
            static $a = 10;
            $b = 20;

            $a ++;
            $b ++;

            echo "static ". $a."<br>";
            echo "non-static ". $b."<br>";
        }
        myfuncti();
        myfuncti();
    
?>

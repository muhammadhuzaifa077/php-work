<!-- non-parameterrized -->

<?php
    function add(){
        $num1 = 10;
        $num2 = 70;
        $result = $num1+ $num2;
        return $result;
    }

    echo("the result of addition is " . add());
?>
<br>
<?php
    function sub(){
        $num1 = 310;
        $num2 = 270;
        $answer = $num1-$num2;
        return $answer;
    }

    echo("the result of subtraction is " . sub());
?>
<br>
<?php
    function mul(){
        $num1 = 50;
        $num2 = 25;
        $results = $num1* $num2;
        return $results;
    }

    echo("the results of multiplication is " . mul());
?>
<br>
<?php
    function div(){
        $num1 = 50;
        $num2 = 25;
        $ans = $num1/$num2;
        return $ans;
    }

    echo("the answer of divide is " . div());
?>
<br>
<?php
    function mod(){
        $num1 = 50;
        $num2 = 26;
        $conslusion = $num1%$num2;
        return $conslusion;
    }

    echo("the conclusion of mod is " . mod());
?>


<!-- parameterized function -->


<?php
    function additons($num1,$num2){ 
        $resul = $num1+ $num2;
        return $resul;
    }

    echo("the result of addition is " . additons(13,23));
?>
<br>
<?php
    function subtraction($num1,$num2){ 
        $res = $num1- $num2;
        return $res;
    }

    echo("the result of subtraction is " . subtraction(33,23));
?>
<br>
<?php
    function multiplications($num1,$num2){ 
        $resu = $num1* $num2;
        return $resu;
    }

    echo("the result of multiplication is " . multiplications(7,23));
?>
<br>
<?php
    function divide($num1,$num2){ 
        $resu = $num1/ $num2;
        return $resu;
    }

    echo("the result of division is " . divide(49,7));
?>



<h3>Integers</h3>
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
    $z = 6372;
    var_dump(is_int ($z));
?>
<br>
<br>

<?php
$x =25;
$y=43;
function test(){
    global $x  , $y;
    $y =$y +$x;
}
test();
echo $y;
?>
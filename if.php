<html>
<head>
    <title>PHP Test</title>
    </head>
    <body>
    <form method="get">
        <input name="age" placeholder="enter age"><br>
        <input name="btn" type="submit" value="Submit Age">

    <?php
    if(isset($_GET ["age"]))
    {
        //solution
        $age = $_GET["age"];
        echo "<h2> Your Age id = $age so, <h2>";
        
        if ($age >= 18)
            echo "<h1>Eligible for Voting!</h1>";
        else
            echo "<h1>Not Eligible for Voting!</h1>";
    }
    ?>
    </form>
    </body>
</html>
<?php
    // $daytime = date("H");
    // if ($daytime < 12)
    // {
    //     echo "good morning";
    // }
    // else
    // {
    //     echo "it is evening";
    // }

    $percentage = "90%";

    if($percentage  < "40%")
    {
        echo "fail";
    }
    else if ($percentage <= "50%")
    {
    echo "D-grade";
    }
    else if ($percentage <= "60%")
    {
    echo "C-grade";
    }
    else if ($percentage <= "70%")
    {
    echo "B-grade";
    }
    else if ($percentage <= "80%")
    {
    echo "A-grade";
    }
    else if ($percentage <= "90%")
    {
    echo "A+grade";
    }
    else if ($percentage <= "100%")
    {
    echo "A+1grade";
    }
    else{
    echo "invalid percentage";
    }
?>
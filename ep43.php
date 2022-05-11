<?php
    //การจัดการตัวเลขและเวลา
    //การจัดการตัวเลข (ปัดเศษทศนิยม)
    //ceil() ปัดเศษขึ้นทุกกรณี => float
    //floor() ปัดเศษลงทุกกรณี => float
    //round() 
    // >= 5 ปัดขึ้น
    //<b 5 ปัดลง

    $number = 100.54;
    echo "<b>number = </b> $number <br>";
    echo "$number => ceil = ".(ceil($number))."<br>";
    echo "$number => floor = ".(floor($number))."<br>";
    echo "$number => round = ".(round($number))."<br>";
    echo "<hr><hr>";
    //การจัดรูปแบบตัวเลข
    //number_format()
    $cost = 350000.455;
    echo "<b>cost : $cost</b><br>";
    echo "$cost => ".number_format($cost)."<br>";
    echo "$cost => ".number_format($cost,2)."<br>";
    
?>
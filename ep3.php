<?php
    //Type castting || Type convertion
    //เปลี่ยนชนิดข้อมูล
    $price="100"; //string โปรแกรมแปลงชนิดให้เอง
    $delivery=50;

    $total=$price+$delivery;

    echo $total."<br>"; //150

    $cost = 100.17;
    $VAT = 7.23; 
    $Total = $cost + $VAT;
    echo $Total."<br>";
    echo "ก่อนแปลง : ".gettype($Total)."<br>";
    $Total = (integer)$Total; //Type Casting
    echo "หลังแปลง : ".gettype($Total)."<br>"
?>
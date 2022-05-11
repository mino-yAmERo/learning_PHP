<?php
    //ขอบเขตตัวแปร global || local

$x = 500;
$y = 10;

function showNumber(){
    //local
    global $x;
    $GLOBALS ["z"] = 10000; //กำหนดตัวแปร local => global
    print("ตัวแปร x = ".$x."<br>");
}
showNumber();
print("ค่า x = ".$x."<br>");
print("ค่า z = ".$z."<br>");
?>
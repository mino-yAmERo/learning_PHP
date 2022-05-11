<?php
    // การตั้งชื่อตัวแปร
    $name = "Mino";
    $age = 15;
    echo $name."<br>";
    echo $age."<br>";

    echo "<h1>ชื่อ : ".$name."</h1><br>";
    echo "อายุ : ".$age."<br>";
    
    // ชนิดข้อมูล
    $price =50; //integer
    $score =99.51; //double
    $address ="สระแก้ว";//string
    $result = true;//boolean

    echo $name."<br>";
    echo $score."<br>";
    echo $address."<br>";
    echo $result."<br>";

    // gettype, settype
    // gettype เช็คชนิดข้อมูล
    echo "<hr>";
    echo gettype($name)."<br>";
    echo gettype($price)."<br>";
    echo gettype($score)."<br>";
    echo gettype($address)."<br>";
    echo gettype($result)."<br>";

    // settype กำหนดชนิดข้อมูล
    echo "<hr>";
    echo "ก่อนเปลี่ยน : ".gettype($score)."<br>";
    settype($score,"integer");
    echo "หลังเปลี่ยน : ".gettype($score)."<br>";
?>
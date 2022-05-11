<?php
    //การเข้าและถอดรหัส String
    //ป้องกันการเข้าถึงข้อมูล
    //md5() เข้ารหัสโดยคำนวณ string และส่งค่า hash กลับมา
    //sha1() เข้ารหัสโดยคำนวณ string และส่งค่า hash กลับมา
    //crypt() เข้ารหัสโดยสุ่มเวลามาทำงานร่วมด้วย
    //base64_encode เข้ารหัส string ด้วย base_64
    //base64_decode ถอดรหัส string ด้วย base_64

    $password = "dota11294";
    echo "<b>password ก่อนเข้ารหัส </b> : $password <br>";

    $result = md5($password); //md5
    echo "<b>password หลังเข้ารหัส </b> : $result <br>";
    echo "<hr><hr>";

    $result2 = sha1($password); //sha1
    echo "<b>password ก่อนเข้ารหัส </b> : $password <br>";
    echo "<b>password หลังเข้ารหัส </b> : $result2 <br>";
    echo "<hr><hr>";

    $result3 = crypt($password,"1235"); //crypt //กำหนด string ไปอีก
    echo "<b>password ก่อนเข้ารหัส </b> : $password <br>";
    echo "<b>password หลังเข้ารหัส </b> : $result3 <br>";
    echo "<hr><hr>";

    $encode = base64_encode($password); //เข้ารหัส base64
    echo "<b>password ก่อนเข้ารหัส </b> : $password <br>";
    echo "<b>password หลังเข้ารหัส </b> : $encode <br>";
    echo "<hr><hr>";

    $decode = base64_decode($encode);// ถอดรหัส base64
    echo "<b>password ก่อนถอดรหัส </b> : $encode <br>";
    echo "<b>password หลังถอดรหัส </b> : $decode <br>";
    echo "<hr><hr>";
 


?>

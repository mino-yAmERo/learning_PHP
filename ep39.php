<?php
    //การรวมและแยก string
    //implode() รวม string เข้าด้วยกันโดยกำหนดอักขระสำหรับรวม string
    //Array => string
    $arr = ["Hello","World","I","Love","PHP"];
    $str = implode("-",$arr); //รวม string โดยแยกข้อความด้วย -
    //ทำงานเหมือนฟังก์ชั่น join
    print_r($arr); echo "<br>";
    echo "String : $str <br>";


    //explode() แยก string โดยใช้ตัวอักขระเป็นตัวแบ่ง
    //string => array
    echo "<hr><hr>";
    $data ="Mino:25:Sakaeo"; //แยก string ด้วย -  => array
    echo "String : $data <br>";
    $ex_arr = explode(":",$data);
    print_r($ex_arr); echo "<br>";


    //substr() ตัดตัวอักษรที่ไม่ต้องการออกจาก string โดยการระบุตำแหน่ง
    echo "<hr><hr>";
    $myname = "nutthabhas thitabhas";
    //         0123456789
    echo "my name : $myname <br>";
    $submyname = substr($myname,2); //ตัดตั้งแต่ index ที่2 เป็นต้นไป
    echo "sub (i:2)my name : $submyname <br>";
    $submyname2 = substr($myname,2,6); //ตัดตั้งแต่ index ที่2 และนับไปอีก6 ตัว
    echo "sub (i:2 , 3 ตัว )my name : $submyname2 <br>";


    //str_split() ใช้แยก string ตามความยาวที่กำหนด 
    //แล้วแยกเก็บในรูปแบบของ array
    echo "<hr><hr>";
    $txt = "ABCDEFGHIJKL";
    echo "text : $txt <br>";
    $split_arr = str_split($txt,3); //หั่นทีละ3 ตัวอักษรไปเก็บใน array
    print_r($split_arr);

?>
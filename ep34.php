<?php
    //ฟังก์ชั่นค้นหาข้อมูลใน array
    //array_key_exists() ตรวจสอบว่ามี index นี้ใน array หรือไม่
    //in_array() ตรวจสอบว่ามี value นี้ใน array หรือไม่
    //ได้ค่า boolean กลับมา true||false

    $herodota =["A"=>"Axe","CM"=>"Crytals Maiden",
    "KK"=>"Kunkka","QOP"=>"Queen of pain",
    "SF"=>"Shadow Fiend","TB"=>"Terrorblade"];

    $result = array_key_exists("KK",$herodota); //boolean
    if($result){
        print("We found a key!!");
    }else{
        print("We could not found a key!!");
    }
    echo "<br>";
    $result1 = in_array("Axe",$herodota);
    if($result1){
        print("We found a value!!");
    }else{
        print("We could not found a value!!");
    }    
    


?>
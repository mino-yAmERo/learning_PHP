<?php
    //การค้นหาตัวอักษรใน String
    // => boolean
    //strstr()  ค้นหาตัวอักษรหรือ string ย่อย (case sensitive)
    $str = "Hello PHP";
    $bool1 = strstr($str,"hello");

    
    if($bool1){
        print("หาข้อความเจอ <br>");
    }else{
        print("หาข้อความไม่เจอ <br>");
    }
    echo "<hr><hr>";

    //stristr() ค้นหาตัวอักษรหรือ string ย่อย (no case sensitive)
    $bool2 = stristr($str,"hello");
    if($bool2){
        print("หาข้อความเจอ <br>");
    }else{
        print("หาข้อความไม่เจอ <br>");
    }
?>
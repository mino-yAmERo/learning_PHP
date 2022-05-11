<?php
    //ฟังก์ชั่นเปรียบเทียบ String // เปรียบเทียบชุดข้อความ
    //ตัวพิมพ์ใหญ่มีค่ามากกว่าตัวพิมพ์เล็ก
    //strcamp() => Case sensitive
    //เท่ากัน 2ค่า =0
    //strcasecmp() => ไม่สนใจตัวพิมพ์เล็กพิมพ์ใหญ่

    $str1="MiNOyamero"; $str2="minoyAmERo";
    echo "<b>first string</b> : $str1<br>";
    echo "<b>second string</b> : $str2<br>";
    echo "<hr>";
    $result=strcmp($str1,$str2);
    echo "<b>strcamp (case sensitive) : </b>$result<br> ";
    

    if($result!=0){
        echo "ข้อความมีค่าไม่เท่ากัน";
    }else{
        echo "ข้อความมีค่าเท่ากัน";
    }
    echo "<hr>";
    $result1=strcasecmp($str1,$str2);
    echo "<b>strcasecamp  : </b>$result1<br> ";

    if($result1!=0){
        echo "ข้อความมีค่าไม่เท่ากัน";
    }else{
        echo "ข้อความมีค่าเท่ากัน";
    }  
    echo "<hr>"; 
    //strspn() //Case Sensitive
    //หาจำนวนตัวอักษรที่ตรงกันใน string1 ที่พบใน string2 
    //ถ้าพบตัวที่ไม่เหมือนกัน จะไม่ค้นตัวต่อไป
    //รับค่า => จำนวนตัวอักษรที่พบ

    $total = strspn($str1,$str2);
    echo "จำนวนตัวอักษรที่พบ : $total";
    echo "<hr>";

    //strcspn() //Case Sensitive
    //หาจำนวนตัวอักษรใน str1 ที่ไม่พบใน str2 => จำนวนตัวอักษรที่ไม่พบ

    $total1 = strcspn($str1,$str2);
    echo "จำนวนตัวอักษรที่ไม่พบ : $total1";
    echo "<hr>";





?>
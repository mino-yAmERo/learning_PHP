<?php
    //ฟังก์ชั่นเกี่ยวกับ index และ value
    //array_keys() ดึง index ทั้งหมดของ array
    //array_values() ดึง value ทั้งหมดของ array
    //array_flip() สลับ index กับ value
    //array_unique() ลบค่าข้อมูลซ้ำใน array
    
    $number = [10,20,30,10,20,30,40,50,60];
    $herodota =["A"=>"Axe","CM"=>"Crytals Maiden",
    "KK"=>"Kunkka","QOP"=>"Queen of pain",
    "SF"=>"Shadow Fiend","TB"=>"Terrorblade"];

    print_r($herodota);print("<br>");
    print("<hr><hr>");
    echo "<b>key</b> : ";$key_dota = array_keys($herodota);
    print_r($key_dota);print("<br>"); //array_keys()
    print("<hr>");
    echo "<b>value</b> : ";$value_dota = array_values($herodota);
    print_r($value_dota);print("<br>"); //array_values()
    print("<hr><hr>");
    //array_flip()
    echo "<b>before flip</b> : <br>"; print_r($herodota); print("<br>");
    echo "<b>after flip</b> : <br>"; print_r(array_flip($herodota)); print("<br>");
    print("<hr><hr>");
    //array_unique()
    echo "<b>before unique</b> : <br>"; print_r($number); print("<br>");
    echo "<b>after unique</b> : <br>"; print_r(array_unique($number)); print("<br>");
?>
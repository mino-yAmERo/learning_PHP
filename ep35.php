<?php
    //ฟังก์ชั่นการรวม array
    //array_merge 
    //รวม array หากมี index ที่ซ้ำกันจะนำค่าข้อมูล array ชุดหลังมาทับชุดแรก

    //array_merge_recursive
    //รวม array หากมี index ที่ซ้ำกันจะนำค่าข้อมูล array ชุดหลังมาต่อท้ายชุดแรก
    //สร้าง array ย่อยขึ้นมาใน index ตัวที่ซ้ำ

    //array_combine()
    //รวม array
    //array ชุดแรก => key(index)
    //array ชุดสอง => value

    $number = ["A"=>80,"B"=>74,"C"=>69];
    $number1 = ["A"=>85,"B"=>79,"C"=>68];
    print_r($number); echo"<br> MERGE <br>";print_r($number1);
    $merge = array_merge($number,$number1);
    echo "<br>After MERGE : <br>";print_r($merge);
    echo "<hr><hr>";
    print_r($number); echo"<br> MERGE Recursive <br>";print_r($number1);
    $merge = array_merge_recursive($number,$number1);
    echo "<br>After MERGE recursive : <br>";print_r($merge);

    $grade = ["A","B","C","D","F"];
    $score = [80,70,60,50,30];
    echo "<hr><hr>";
    $new = array_combine($grade,$score);
    print_r($new);
?>
<?php
    //การเข้าถึงสมาชิกถึงด้วย For Loop
    //ใช้กับ array ที่มี index เป็นตัวเลข เรียงจากน้อยไปมาก

    $number = range(0,20,2);
    print_r($number);
    echo "<br>";

    print(count($number)); //นับจำนวนสมาชิกใน array 
    echo "<br>";


    for ($index=0 ; $index <count($number); $index++){
        print("Index ที่ $index : ".$number[$index]);
        echo "<br>";
    }
    
    $color = ["red","orange","blue","green","red","red","black","blue"];
    print_r(array_count_values($color));//นับความถี่ของข้อมูลใน array ที่ซ้ำกัน

?>
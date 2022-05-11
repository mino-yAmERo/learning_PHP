<?php
    //เข้าถึง สมาชิก array แบบจับคู่ด้วย While Loop
    //ด้วยfunction each

    $colors = ["red"=>"สีแดง","orange"=>"สีส้ม",
    "blue"=>"สีฟ้า","green"=>"สีเขียว","black"=>"สีดำ",];
    $animals =["dog"=>"สุนัข","cat"=>"แมว",
    "pig"=>"หมู","rabbit"=>"กระต่าย"];

    while($item=each($colors)){
        print($item["key"]."=>".$item["value"]."<br>");
    }
    echo "<hr>";
    while($item=each($animals)){
        print($item["key"]."=>".$item["value"]."<br>");
    }


?>
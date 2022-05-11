<?php
    //การเข้าถึงสมาชิกด้วย foreach
    //array แบบเดี่ยว
    $days = ["วันจันทร์","วันอังคาร","วันพุธ","วันพฤหัส","วันศุกร์","วันเสาร์","วันอาทิตย์"];
    foreach($days as $day){
        print($day."<br>");
    }
    //array แบบคู่
    echo "<br>";
    $colors = ["red"=>"สีแดง","orange"=>"สีส้ม",
    "blue"=>"สีฟ้า","green"=>"สีเขียว","black"=>"สีดำ"];
    foreach ($colors as $key=>$value){
        print("key : $key, value : $value<br>");
    }

?>
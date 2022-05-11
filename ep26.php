<?php
    //เข้าถึง สมาชิก array แบบจับคู่ด้วย While Loop
    //ด้วย function list
    $colors = ["red"=>"สีแดง","orange"=>"สีส้ม",
    "blue"=>"สีฟ้า","green"=>"สีเขียว","black"=>"สีดำ"];
    $animals =["dog"=>"สุนัข","cat"=>"แมว",
    "pig"=>"หมู","rabbit"=>"กระต่าย"];

    
    while(list($en,$th)=each($colors)){
        
        print ("ศัพท์ภาษาอังกฤษ : $en แปลว่า $th <br>");
        
    }

?>
<?php
    //ฟังก์ชั่นสลับค่าใน array
    //shuffle สุ่มสลับค่าข้อมูล และกำหนดค่า indexใหม่ (0,1,2,3,....)
    //reverse คัดลอก array => array ใหม่แบบย้อนกลับ
    $score = ["A"=>80,"B"=>70,"C"=>60,"D"=>50];
    $dota =["WS"=>"WinStrike","TU"=>"Tundra","NGX"=>"Nigma Galaxy","TS"=>"Team Secret","AA"=>"Alliance"];
    
    echo "<b>before shuffle</b> : <br>";
    print_r($dota);print("<br>");
    shuffle($dota); //shuffle
    echo "<b>after shuffle</b> : <br>";
    print_r($dota);print("<br>");
    echo "<hr><hr>";

    print_r($score);print("<br>");
    $rscore = array_reverse($score); //reverse
    echo "reverse to ";print("<br>");
    print_r($rscore);print("<br>");
    
?>
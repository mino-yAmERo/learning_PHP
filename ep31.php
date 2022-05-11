<?php
    //ฟังก์ชั่นเรียงลำดับ array แบบคู่
    //เรียง key หรือ value
    //key ใช้ ksort(); || krsort();
    //value ใช้ asort(); || arsort();
    $score = ["A"=>80,"B"=>70,"C"=>60,"D"=>50];
    $dota =["WS"=>"WinStrike","TU"=>"Tundra","NGX"=>"Nigma Galaxy","TS"=>"Team Secret","AA"=>"Alliance"];

    //เรียง ข้อมูล (value)
    echo "<b>before sort value</b> : <br>";
    print_r($score);print("<br>");
    echo "<b>after sort value</b> : <br>";
    asort($score); //asort
    echo "เรียง value จากน้อยไปมาก : ";print_r($score);print("<br>");
    arsort($score); //arsort
    echo "เรียง value จากมากไปน้อย : ";print_r($score);print("<br>");
    echo "<hr><hr>";
    //เรียง index (key)
    echo "<b>before sort key</b> : <br>";
    print_r($dota);print("<br>");
    echo "<b>after sort key</b> : <br>";
    ksort($dota); //ksort
    echo "เรียง value จากพยัญชนะไปสระ : ";print_r($dota);print("<br>");
    krsort($dota); //krsort
    echo "เรียง value จากสระไปพยัญชนะ : ";print_r($dota);print("<br>");
?>
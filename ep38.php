<?php
    //เปลี่ยนรูปแบบตัวอักษร 
    //strtolower() => ทุกตัวเป็นตัวพิมพ์เล็ก
    //strtoupper()  => ทุกตัวเป็นตัวพิมพ์ใหญ่
    //ucwords() => เปลี่ยตัวอักษรตัวแรกของแต่ละคำเป็นตัวพิมพ์ใหญ่
    //ucfirst() => เปลี่ยนตัวอักษรตัวแรกของข้อความเป็นตัวพิมพ์ใหญ่

    $str ="Mino yamero Miners7";
    echo "$str <br>";

    $lower = strtolower($str);
    echo "to lower : $lower <br>";

    $upper = strtoupper($str);
    echo "to upper : $upper <br>";

    $wordUc = ucwords($str);
    echo "worduc: $wordUc <br>";

    $ucfirst = ucfirst($str);
    echo "ucfirst : $ucfirst<br>";
?>
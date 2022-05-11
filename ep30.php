<?php
    //ฟังก์ชั่นเรียงลำดับ array แบบเดี่ยว
    // sort() & rsort()
    // sort() เรียงจากมากไปน้อย || เรียงจากพยัญชนะไปสระ
    // rsort() เรียงจากน้อยไปมาก || เรียงจากสระไปพยัญชนะ
    $number = [1,3,4,2,8,9,7,6,0,5];
    $colors = ["เขียว","ขาว","คราม","แดง","น้ำเงิน","เทา"];

    echo "<b>Before sort :</b><br>";print_r($number);
    print("<br>");
    sort($number); //sort
    echo "<b>After sort :</b><br>";
    echo"น้อยไปมาก : ";print_r($number);print("<br>");
    rsort($number); //rsort
    echo"มากไปน้อย : ";print_r($number);print("<br>");
    echo "<hr><hr>";

    echo "<b>Before sort :</b><br>";print_r($colors);
    print("<br>");
    sort($colors); //sort
    echo "<b>After sort :</b><br>";
    echo"พยัญชนะไปสระ : ";print_r($colors);print("<br>");
    rsort($colors); //rsort
    echo"สระไปพยัญชนะ : ";print_r($colors);print("<br>");
    echo "<hr><hr>";

?>
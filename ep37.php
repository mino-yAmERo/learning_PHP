<?php
    //หาความยาว string
    //นับช่องว่างด้วย
    $str1="Mino yAmERo";
    $count1 =strlen($str1);

    echo "ความยาวของ string1 = $count1 <br>";

    //ตัดช่องว่างของ string
    //trim()
    $str2="     Mino yAmERo  ";
    $count2 =strlen($str2);
    echo "string2 : $str2 ความยาวของ string2 : $count2 <br>";
    $newstr2 = trim($str2);
    $newcount2 =strlen($newstr2);
    echo "string2 : $newstr2 ความยาวของ string2 : $newcount2 <br>";
?>
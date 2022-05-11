<?php

    //การเปลี่ยนค่า String
    //str_replace()
    //str_rev() //reverse
    //str_repeat()
    
    $str = "Hello PHP, Hello JavaScript ";
    echo "<b>ก่อนแทนที่</b> : $str <br>";
    $newstr = str_replace("Hello","สวัสดี",$str);
    echo "<b>หลังแทนที่</b> : $newstr <br>";

    $alphabet = "A B C D E F G ";
    echo "<b>before reverse</b> : $alphabet<br>";
    $revstr = strrev($alphabet);
    echo "<b>after reverse</b> : $revstr<br>";
    $repeatstr = str_repeat($str,3);
    echo "<b>repeat</b> : $repeatstr"
?>
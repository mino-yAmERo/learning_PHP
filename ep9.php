<?php
    // if
    $money = 1500;
    $tranfer = 700;
    echo "ยอดคงเหลือ : ".$money."<br>";
    if($money>=$tranfer){
        echo "สามารถโอนเงินได้ <br>";
        echo "ทำการโอนเงิน : ".$tranfer."<br>";
        echo "ยอดเงินคงเหลือ : ".($money-=$tranfer)."<br>";
    }
    echo "ยอดเงินคงเหลือ : ".($money)."<br>";
    echo "คืนบัตร";

    // if..else
    echo "<hr>";    
    $balance = 2000;
    $withdraw = 1000; 

    echo "ยอดคงเหลือในบัญชี : ".$balance."<br>";
    //มีช่องโหว่ของโปรแกรม
    //ถ้าใส่เป็นค่าติดลบ ตัวโปรแกรมจะทำงานได้
    //แล้วยอดเงินคงเหลือจะเพิ่มขึ้น
    if($balance >= $withdraw){
        echo "สามารถถอนเงินได้ <br>";
        echo "ทำการถอนเงิน : ".$withdraw."<br>";
        echo "ยอดเงินคงเหลือ : ".($balance-=$withdraw)."<br>";
    }else{
        echo "ยอดเงินคงเหลือของคุณไม่พอ <br>";
    }
    echo "เสร็จสิ้นธุรกรรม <br>";
    echo "กรุณารับบัตรคืน <br>";





?>
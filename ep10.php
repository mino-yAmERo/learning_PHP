<?php
    //ตัวดำเนินการทางตรรกศาสตร์
    // &&  ||  !
    // and or not //เหมือนกันแต่ลำดับความสำคัญน้อยกว่า

    // ตัวอย่างการใช้ &&
    $balance = 2000;
    $withdraw =1500;
    $a = $balance >= $withdraw;
    $b = $withdraw>0;

    echo "ยอดคงเหลือในบัญชี : ".$balance."<br>";
    echo "<hr>";

    if($a && $b){
        echo "สามารถถอนเงินได้ <br>";
        echo "ทำการถอนเงิน : ".$withdraw."<br>";
        echo "ยอดเงินคงเหลือ : ".($balance-=$withdraw)."<br>";
    
    }else if($a && !$b){
        echo "จำนวนเงินที่ต้องการถอนไม่ถูกต้อง <br>";
        
    }else{
        echo "ยอดเงินคงเหลือของคุณไม่พอ <br>";
        
    }
    echo "<hr>";
    echo "เสร็จสิ้นธุรกรรม <br>";
    echo "กรุณารับบัตรคืน <br>";
    echo "<hr>";

    $x = 10;
    $y = 5;
    $z = 6;

    $t1 =$x > $y ;
    $t2 =$x > $z ;
    $t12 = ($t1 && $t2);
    $t3 =$y > $z ;
    $t4 = ($t1 and $t2);
    $result = $t12 && $t3 ;// 10>5 && 10>6 and 5>6
    echo var_dump($t12)."<br>";
    echo var_dump($t3)."<br>";
    echo var_dump($t4)."<br>";
    
    $abc = "hahaha";
    echo var_dump($abc);


?>




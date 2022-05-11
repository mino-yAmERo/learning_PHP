<?php
    /*
    // if else หลายเงื่อนไข
    Score
    >80 => A
    >70 => B
    >60 => C
    >50 => D
    อื่นๆ => F
    */
    $score=70;
    $grade= "";

    if($score>=80){
        $grade="A";
    }else if($score>=70){
        $grade="B";
    }else if($score>=60){
        $grade="C";
    }else if($score>=50){
        $grade="D";
    }else{
        $grade="F";
    }

    echo "คะแนนของคุณที่ได้คือ : ".$score." เกรดของคุณที่ได้คือ : ".$grade."<br>";

?>
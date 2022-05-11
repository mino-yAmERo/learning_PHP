<?php
    //array แบบเดี่ยว
    //การสร้างด้วย function array
    $number = array("Mino",20,30);
    print($number[0]."<br>");
    print($number[1]."<br>");
    print_r($number); //แสดงโครงสร้างของ array
    echo "<br>";

    //array แบบจับคู่ (associate)
    //("key"=>"value")
    $room = array(
        "A01"=>"Mino",
        "A02"=>"Miner",
        "A03"=>"Off",
        "A04"=>"yAmERo"
        );
    print_r($room);
    echo "<br>";
    print($room["A04"]."<br>");

    $product = array(
        "กล้วย"=>50,
        "มะม่วง"=>40,
        "กระเป๋า"=>1500,
        "รองเท้า"=>999
        );
    print_r($product);
    echo "<br>";
    print($product["กระเป๋า"]."<br>");
?>
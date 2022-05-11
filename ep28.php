<?php
    //array 2 มิติ
    //array เดี่ยว (value)
    //โครงสร้าง แถว แนวนอน , คอลัมน์ แนวตั้ง

    $products = array(
        array("pencil","ดินสอ","10"), //แถวที่ 0
        array("eraser","ยางลบ",100),  //แถวที่ 1
        array("speaker","ลำโพง",2500), //แถวที่ 2
        array("moniter","จอภาพ",12000) //แถวที่ 3
        //คอลัมน์  0        1      2
    );

    //การเข้าถึง => แถว คอลัมน์
    print($products[0][1]." ราคา ".$products[0][2]." บาท <br>");
    echo "<hr>";
    //เข้าถึงสมาชิกด้วย for loop
    for($row=0;$row<count($products);$row++){

        for($col=0;$col<count($products[$row]);$col++){
            print("แถวที่ $row คอลัมน์ที่ $col : ".($products[$row][$col])."<br>");
        }
        echo "<hr>";
    }
    echo "<hr>";

    //เข้าถึงสมาชิกด้วย for each 
    foreach($products as $product){
        print("ชื่อสินค้า(EN) = : ".$product[0]."<br>");
        print("ชื่อสินค้า(TH) = : ".$product[1]."<br>");
        print("ราคาสินค้า(baht) = : ".$product[2]."<br>");
        echo "<hr>";
    }
    // array คู่ 
        echo "<hr>";
    $new_products = array(
        array("EN"=>"pencil","TH"=>"ดินสอ","Price"=>10), 
        array("EN"=>"eraser","TH"=>"ยางลบ","Price"=>100),  
        array("EN"=>"speaker","TH"=>"ลำโพง","Price"=>2500), 
        array("EN"=>"moniter","TH"=>"จอภาพ","Price"=>12000) 
    );
    foreach ($new_products as $product){
        print("ชื่อสินค้า(TH) = : ".$product["TH"]);
        print(",(EN : ".$product["EN"].")");
        print("=> ราคาสินค้า(baht) : ".$product["Price"]."<br>");
        echo "<hr>";
    }
?>
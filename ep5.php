<?php
    //Variable Function
    //Function เกี่ยวกับตัวแปร 
    $total1=null;
    $total2="";
    $total3=0;
    $total4="Mino Yamero";
    echo "ตัวแปร total 1 = ".$total1."<br>";
    echo "ตัวแปร total 2 = ".$total2."<br>";
    echo "ตัวแปร total 3 = ".$total3."<br>";
    echo "ตัวแปร total 4 = ".$total4."<br>";

    //isset ตรวจสอบว่าตัวแปรมีการกำหนดค่าหรือไม่
    //กำหนด => True(1)
    //ไม่กำหนด => False
    echo "<hr>";
    echo "ตัวแปรที่ 1 มีค่าว่างหรือไม่ : ".isset($total1)."<br>";
    echo "ตัวแปรที่ 2 มีค่าว่างหรือไม่ : ".isset($total2)."<br>";
    echo "ตัวแปรที่ 3 มีค่าว่างหรือไม่ : ".isset($total3)."<br>";
    echo "ตัวแปรที่ 4 มีค่าว่างหรือไม่ : ".isset($total4)."<br>";

    //unset ยกเลิกตัวแปรและคืนค่า (ลบตัวแปร) => undefined
    echo "<hr>";
    echo "Before unset : ตัวแปร total 4 = ".$total4."<br>";
    # unset($total4);
    echo "After unset : ตัวแปร total 4 = ".$total4."<br>";

    //empty ตรวจสอบว่าตัวแปรมีค่าว่างหรือเลขศูนย์หรือไม่
    //ค่าว่าง null 
    //ค่าว่าง "" (string เปล่าๆ)
    //เลข 0
    echo "<hr>";
    echo "ตัวแปรที่ 1 มีค่าว่างหรือไม่ : ".empty($total1)."<br>";
    echo "ตัวแปรที่ 2 มีค่าว่างหรือไม่ : ".empty($total2)."<br>";
    echo "ตัวแปรที่ 3 มีค่าว่างหรือไม่ : ".empty($total3)."<br>";
    echo "ตัวแปรที่ 4 มีค่าว่างหรือไม่ : ".empty($total4)."<br>";

    //is_null ตรวจตัวแปรว่ามีค่าว่างหรือไม่
    //null = จองพื้นที่ไว้ แต่ยังไม่กำหนดค่า
    echo "<hr>";
    echo "ตัวแปรที่ 1 มีค่าว่างหรือไม่ : ".is_null($total1)."<br>";
    echo "ตัวแปรที่ 2 มีค่าว่างหรือไม่ : ".is_null($total2)."<br>";
    echo "ตัวแปรที่ 3 มีค่าว่างหรือไม่ : ".is_null($total3)."<br>";
    echo "ตัวแปรที่ 4 มีค่าว่างหรือไม่ : ".is_null($total4)."<br>";

    //var_dump แสดงรายละเอียดของตัวแปร
    //เขียนร่วมกับ echo หรือไม่เขียนก็ได้
    echo "<hr>";
    echo var_dump($total1)."<br>";
    echo var_dump($total2)."<br>";
    echo var_dump($total3)."<br>";
    echo var_dump($total4)."<br>";
?>
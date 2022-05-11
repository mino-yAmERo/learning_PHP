<?php
    //function
    //1.ไม่มีการรับค่า และส่งค่า
    function show(){
        print("Hello PHP <br> I'm Mino yAmERo");
        print("<hr>");
    }
    show();
    show();
    
    //2.มีการรับค่าเข้ามาทำงาน
    function message($message,$name){
        print("Hello ".$message." <br> I'm $name");
        print("<hr>");
    }
    function message2($message,$name,$lastname){
        print("Hello ".$message." <br> Ny name is $name ".$lastname);
        print("<hr>");
    }
    echo "<hr>";
    message("PHP","Mino yAmERo");
    message2("Javascript","Nutthabhas","Thitabhas");
    
    //3.ส่งค่าออกมา
    function getBonus(){
        return 5000;
    }
    $salary = 10000;
    echo "<hr>";
    print("เงินเดือน = ".$salary."<br>");
    $salary += getBonus();
    print("เงินเดือนรวมโบนัส = ".$salary);
    echo "<hr>";
    
    //4. รับค่าและส่งค่าออกมา
    function annualSalary($salary,$year,$i){
        $total = $salary*$year*12; //รับค่า จำนวนปี 
        $bonus = ($i/100)*$salary; //รับค่า โบนัสเป็น %ของเงินเดือน 
        define("VAT",0.93); //ค่าคงที่ 
        $total += $bonus;
        $total *= VAT;
        $totalmoney = print("รายได้ทั้งหมดใน ".$year." ปี รวมโบนัส ".$i." % ของเงินเดือนและหักภาษี : ".$total);
        return $totalmoney;
    }
    echo "<hr>";
    annualSalary(20000,2,10);
    echo "<hr>";

    //5. ฟังก์ชั่นที่มีการกำหนดค่าเริ่มต้น
    function showData($fname,$lname,$city="ประเทศไทย"){
        print("ชื่อจริง : ".$fname."<br>นามสกุล : ".$lname."<br>ที่อยู่ : ".$city."<br><br>");
    }
    echo "<hr>";
    showData("Mino","yAmERo","จ.สระแก้ว");
    showData("Nutthabhas","Thitabhas");
    showData("Storm","Spirit");
    echo "<hr>";
?>
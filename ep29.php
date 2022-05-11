<?php
    //ฟังก์ชั่นเพิ่มและลบสมาชิกใน array 
    //array เดี่ยว
    //array_push() => เพิ่มสมาชิกตำแหน่งสุดท้าย
    //array_pop() => ลบสมาชิกตำแหน่งสุดท้าย

    //array_unshift() => เพิ่มสมาชิกตำแหน่งแรก
    //array_shift() => ลบสมาชิกตำแหน่งแรก

    //array_splice() => (แทรก)เพิ่มและลบสมาชิกในตำแหน่งที่ต้องการ

    $fruits = ["มะละกอ","ฝรั่ง","มะนาว","ทุเรียน"];
    //push
    echo "<b>before push : </b><br>" ;print_r($fruits);
    array_push($fruits,"มะม่วง"); //push
    array_push($fruits,"มังคุด");
    echo "<br>";
    echo "<b>after push : </b><br>" ;print_r($fruits);
    echo "<hr><hr>";
    //pop
    array_pop($fruits);
    array_pop($fruits);
    array_pop($fruits); 
    echo "<b>after 3times pop : </b><br>" ;print_r($fruits);
    echo "<hr><hr>";
    //unshift
    echo "<b>before unshift : </b><br>" ;print_r($fruits);
    array_unshift($fruits,"มะม่วง"); //unshift
    array_unshift($fruits,"มังคุด");
    array_unshift($fruits,"ทุเรียน");
    echo "<br>";
    echo "<b>after unshift : </b><br>" ;print_r($fruits);
    echo "<hr><hr>";
    //shift
    echo "<b>before shift : </b><br>" ;print_r($fruits);
    array_shift($fruits); //shift
    array_shift($fruits);
    array_shift($fruits);
    echo "<br>";
    echo "<b>after shift : </b><br>" ;print_r($fruits);
    echo "<hr><hr>";
    //splice ลบ
    //array_splice("ชื่อ array","ตำแหน่ง index","จำนวนที่ต้องการลบ")
    echo "<b>before splice (remove): </b><br>" ;print_r($fruits);
    echo "<br>";
    array_splice($fruits,1,2); //ลบตั้งแต่ index ที่1 ลบไป2ตัว
    echo "<b>after splice (remove): </b><br>" ;print_r($fruits);
    echo "<hr><hr>";
    //splice เพิ่ม
    //array_splice("ชื่อ array","ตำแหน่ง index",0,"arrayที่ต้องการแทรก")
    echo "<b>before splice (add): </b><br>" ;print_r($fruits);
    echo "<br>";
    array_splice($fruits,1,0,["องุ่น","มะม่วง"]);  
    echo "<b>after splice (add): </b><br>" ;print_r($fruits);


?>
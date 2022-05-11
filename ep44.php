<?php
    // การจัดการเกี่ยวกับวันที่และเวลา
    // time() แสดงวันที่และเวลาปัจจุบันในรูปแบบ Unix Timestamp
    // แสดงเป็นหน่วยวินาที
    // date() กำหนดรูปแบบลงใน function ผ่าน parameter

    /* d/j d= วันที่ 2หลัก (0-31)
           j= วันที่ 1หลัก (1-31)

       D/l D= แสดงวันแบบตัวย่อ 3 อักษร (sun, mon) 
           l= แสดงวันแบบเต็ม

        W   = แสดงลำดับสัปดาห์ของปี (0-52) 
              1ปี มี 53สัปดาห์    

       F/M F= แสดงชื่อเดือนแบบเต็ม 
           M= แสดงชื่อเดือนแบบย่อ3ตัวอักษร

       m/n m= แสดงชื่อเดือนด้วยตัวเลข 2 หลัก (01-12)
           n= แสดงชื่อเดือนด้วยตัวเลข 1 หลัก (1-12)

        t   = แสดงจำนวนวันของเดือน เช่น 28-31

       y/Y y= แสดงปี ค.ศ. เลขท้าย 2 หลัก
           Y= แสดงปี ค.ศ. แบบเต็ม

       a/A    แสดงเวลาช่วงเช้าหรือช่วงบ่าย
           a= am หรือ pm
           A= AM หรือ PM

       g/h g= แสดงชั่วโมงในรูปแบบ 12 ชั่วโมง (1-12)
           h= แสดงชั่วโมงในรูปแบบ 12 ชั่วโมง (01-12)

       G/H G= แสดงชั่วโมงในรูปแบบ 24 ชั่วโมง (0-23)
           H= แสดงชั่วโมงในรูปแบบ 24 ชั่วโมง (00-23)

       i/s i= แสดงนาที
           s= แสดงวินาที
        c   = วันที่และเวลาแบบมาตรฐาน ISO-8601
        r   = รูปแบบวันที่ในอีเมล RFC 2822 */

        date_default_timezone_set("Asia/Bangkok"); // set timezone
        echo date("r"); echo"<br>";
        echo date("l"); echo"<br>";
        echo date("j F y"); echo"<br>";
        echo date("G:i:s A"); echo"<br>";
        echo date("d/m/Y");  echo"<br>"; 
        echo "<hr><hr>";

        echo time(); echo "<br>";
        echo "วันปัจจุบัน : ".date("d/m/Y",time());

        $days3 = time()+(60*60*24*3);
        //             60วินาที*60นาที*24ชั่วโมง*3 = 3วัน
        echo "<br>";
        echo "อีก3 วันข้างหน้า : ".date(("d/m/Y"),$days3)."<br>";

        $week = time()+(60*60*24*7);
        // สัปดาห์หน้า = 60วินาที*60 นาที*24ชั่วโมง*3 = 7วัน
        echo "อีกหนึ่งสัปดาห์ : ".date(("d/m/Y"),$week)."<br>";
        echo "<hr><hr>";

        // getdate() เหมือนกับ date()+time()
        // parameter(key)           => การทำงาน

        // hours/minutes/seconds     => ชั่วโมง / นาที / วินาที
        // mday/wday/mon/year/yday  => วันที่ / วันในแต่ละสัปดาห์ / ชื่อเดือน / ปี / วันในแต่ละปีเป็นตัวเลข
        // weekday/month            => ชื่อวันในแต่ละสัปดาห์ / ชื่อเดือนแบบเต็ม

        //array
        print_r(getdate());
        $date_time = getdate();
        echo "วันที่ : ".$date_time["mday"]."<br>";
        echo "เดือน : ".$date_time["month"]."<br>";
        echo "ปี : ".$date_time["year"]."<br>";
        echo "<hr><hr>";
        echo "ขณะนี้เวลา : ".$date_time["hours"]." : ".$date_time["minutes"]." : ".$date_time["seconds"];
        echo "<hr><hr>";

        //checkdate() - ตรวจสอบความถูกต้องของวัน => boolean
        //parameter
        //int month/day/year     => เดือน/วันที่/ปี
        $month = 13;
        $day = 32;
        $year = 2021;
        echo ("<b>ตรวจสอบความถูกต้องของวัน/เดือน/ปี </b> <br>");
        echo ("วันที่ $day เดือนที่ $month ปี $year");
        $checkd = checkdate($month,$day,$year);
        if ($checkd){
            echo "==> รูปแบบวันที่และเวลาถูกต้อง ";
        } else {
            echo "==> รูปแบบวันที่และเวลาไม่ถูกต้อง!!! ";
        }


?>
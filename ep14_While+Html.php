<?php
    $count=1;
    $limit=10;
    $i=1;
    $max=10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>รายการอาหาร</h1>
    <!-- ul list -->
    <ul>
        <?php
        while($count<=$limit){?>
        <li><?php echo "เมนูอาหารที่ : ".$count;?></li>

        <?php
            $count++;
        }
        ?>
    </ul>
    <!-- select -->
    <h1>ตัวเลือก</h1>
    <select name="" id="">
        <?php
        while($i<=$max){?>
        <option value="<?php echo $i?>"><?php echo "ตัวเลือกที่ : ".$i?></option>
        <?php $i++; } ?>
    </select>
</body>
</html>
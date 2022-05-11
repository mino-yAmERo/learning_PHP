<!-- print & echo -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>PHP + HTML</h1>
    <?php
        echo "Mino Yamero<br>";
        echo "Nutthabhas Thitabhas";
        echo "<h1>PHP Tutorial</h1>"
    ?>

    <form action="">
        <label for="">ชื่อ</label>
        <input type="text" name="" id="" placeholder="<?php echo "Mino" ?>">
        <label for="">นามสกุล</label>
        <input type="text" name="" id="" placeholder="<?php echo "Yamero" ?>">
    </form>
</body>
</html>
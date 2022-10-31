<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>

<body>
    <?php
    if(!empty($_GET)){
        $height = $_GET["height"];
        $weight = $_GET["weight"];


    }else if(!empty($_POST)){

        $height = $_POST["height"];
        $weight = $_POST["weight"];
    }else{
        echo "您資料輸入錯誤，請回表單重新輸入!";
        echo "<a href='bmi.php'>回表單</a>";
        exit();
    }
        

    $BMI = round(($weight / ($height * $height)) * 10000, 2);

    if ($BMI >= 35) {
        $You = "重度肥胖！";
    } elseif ($BMI >= 30) {
        $You = "中度肥胖";
    } elseif ($BMI >= 27) {
        $You = "輕度肥胖！";
    } elseif ($BMI >= 24) {
        $You = "過重！";
    } elseif ($BMI >= 18.5) {
        $You = "正常！";
    } else {
        $You = "過輕！";
    }

    ?>


    <h3>你的BMI計算結果為:<?= $BMI; ?></h3>
    <div></div>
    <div>你的體位被判定為:<?= $You; ?></div>

    <a href="bmi.php">重新測量</a>
</body>

</html>
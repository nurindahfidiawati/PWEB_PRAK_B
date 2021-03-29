<?php

    //macam2 function di php ada built In, user defined
    // built in?
    //echo (date('Y'));

    //user defind function ?
    function printMyName($nama = "masih belum ada nama") {
        //echo "My Name is Nur Indah Fidia Wati";
        echo "My Name is $nama";
    }
    //printMyName();

    //with return built in
    $nilainya = date('y');
    //echo($nilainya);

    //with return user defined
    // function printNumA(){
    //     return 4;
    // }
    // function printNumB(){
    //     return 5;
    // }
    //echo(printNumA() + printNumB() - printNumA());
    function printNumA(){
        echo 4;
    }
    function printNumB(){
        echo 5;
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php printMyName("Nur Indah Fidia Wati");?></h1>
    <h2><?php echo(date('Y'))?></h2>
</body>
</html> -->
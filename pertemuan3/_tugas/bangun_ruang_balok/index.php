<?php 
    require 'Balok.php';

    $balok = new Balok;
    $balok -> setPanjang(6);
    $balok -> setLebar(12);
    $balok -> setTinggi(3);


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>192410101039</title>
     <style type="text/css">
     *{
         background-color: #ffbf00;
     }
     </style>
 </head>
 <body>
    <h3>Nur Indah Fidia Wati</h3>
    <h1>Bangun Ruang : Balok</h1>
    <hr>

    <ul>
        <li><b>Panjang  : <?php echo($balok->getPanjang()); ?></b></li>
        <br>
        <li><b>Lebar : <?php echo($balok->getLebar()); ?></b></li>
        <br>
        <li><b>Tinggi : <?php echo($balok->getTinggi()); ?></b></li>
        <br>
        <li><b>Luas: <?php echo($balok -> getLuas()); ?></b></li>
        <br>
        <li><b>Volume : <?php echo($balok -> getVolume());?><b></li>
    </ul>
     
 </body>
 </html>
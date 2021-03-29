<?php 
    require 'Bola.php';

    $bola = new Bola;
    $bola -> setJari(7);
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
         background-color: #00ffbf
     }
     </style>
 </head>
 <body>
    <h3>Nur Indah Fidia Wati</h3>
    <h1>Bangun Ruang : Bola</h1>
    <hr>

    <ul>
        <li><b>Jari - jari : <?php echo($bola->getJari()); ?></b></li>
        <br>
        <li><b>Luas : <?php echo($bola -> getLuas()); ?></b></li>
        <br>
        <li><b>Volume : <?php echo($bola -> getVolume());?></b></li>
    </ul>
     
 </body>
 </html>
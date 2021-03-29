<?php 
    require 'Kubus.php';

    $kubus = new Kubus;
    $kubus -> setSisi(4);
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
         background-color: #bfff00;
     }
     </style>
 </head>
 <body>
    <h3>Nur Indah Fidia Wati</h3>
    <h1>Bangun Ruang : Kubus</h1>
    <hr>

    <ul>
        <li><b>Panjang Sisi : <?php echo($kubus->getSisi()); ?></b></li>
        <br>
        <li><b>Luas: <?php echo($kubus -> getLuas()); ?></b></li>
        <br>
        <li><b>Volume : <?php echo($kubus -> getVolume());?></b></li>
    </ul>
     
 </body>
 </html>
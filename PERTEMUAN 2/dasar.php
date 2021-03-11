<!-- <?php
echo "Hello World";
?> -->
<!-- variabel diawali dengan $ -->
$contoh_str ="Indah";
$contoh_double = TRUE;
$contoh_array =[] ;
$angka = 2; 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$contoh_str ="Indah";
$contoh_double = TRUE;
$contoh_array =[] ;
$angka = 2; 

    echo "<br> HELLO WORLD <br>";
    echo " HELLO WORLD <br>";
    echo $angka;

    // penjumlahan string
    $str_satu = "Pemrograman";
    $str_dua = "website";
    echo $str_satu ." " . $str_dua;
    echo $str_satu ."<br>" . $str_dua;

    // ARRAY
    $array =['Pemrograman','Website','Kelas B','Semester 4'];
    // var_dump digunakan untuk mencetak output, digunakan untuk debug tidak untuk user karena hanya diperuntuukan untuk developer
    // var_dump($array)

    // foreach
    foreach ($array as $value) {
        echo $value ." ";
      }
    // for ($i =0 ; $i <count($array); $i++){
    //     echo $array[i]
    // }
    
    //Asosiatif Array
    $arr = ['Indah','192410101039','21'];
    $students = [
        'Nama' => 'Indah',
        'nim' => '192410101039',
        'usia' => '21',
    ]
    ?>
    <h1>Nama Data</h1>
    <thead>
        <tr>
        <td>Nama</td>
        <td>NIM</td>
        <td>USIA</td>
        </tr>
    </thead>
    <tbody>
<?php
$makanan =['Burger','Donat'];
switch ($makanan[0]){
    case 'Burger':
        echo '<br> Di index ke 0 ada burger';
        break;
    case 'donat':
        echo 'Di index ke 1 ada donat';
        break;
    default:
        echo 'test';
        break;
    }
        ?>
    
</body>
</html>
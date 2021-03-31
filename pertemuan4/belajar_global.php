<?php 
    //echo $_GET;
    // untuk debugging
    // print_r ($_GET);
    //var_dump(($_GET));
    //var_dump(($_POST))

    // $_GET['nama'] = 'Nur Indah Fidia Wati';
    // $_GET['nama'] = 13;
    // var_dump($_GET);
    // $_POST['nama'] = 'Nur Indah Fidia Wati';
    // var_dump($_POST);
    //var_dump($_POST);

    // if (isset($_POST['submit_btn'])) {
    //     if (strlen($_POST['diameter']) > 0) {
    //         echo "login !";
    //     } else {
    //         echo "Isi diameter terlebih dahulu";
    //     }
    // }
    // $luas = 0;
    // $volume = 0;
    // if (isset($_POST['button_submit'])){
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];
    //     $r = $diameter /2 ;

    //     $luas =  3.14 * $diameter * $r * $tinggi;
    //     $volume = 3.14 * $r * $r * $tinggi;

    //     echo "Diameter " .$diameter ."</br>";
    //     echo "Tinggi " .$tinggi ."</br>";

    // }    

    require 'Tabung.php';
    // $tabung = new Tabung;
    // $tabung ->test();


    // $luas = 0;
    // $volume = 0;
    $tabung = new Tabung;

    
    if (isset($_POST['button_submit'])){
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        // $tabung = new Tabung;
        // $tabung -> setDiameter($_POST['diameter']);

    }
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

   
    <!-- <form action="" method="POST">
        <input type="text" name ="diameter" value="">
        <button name="submit_btn">Submit</button>
    </form> -->


    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="button_submit">Hitung</button>

    </form>
    <hr>

        <ul>
            <li>Luas Selimut : <?php echo $tabung ->getLuasSelimut()?></li>
            <li>Volume : </li>
        </ul>
</body>
        
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL 1</title>
    <style type="text/css">
    .container{
        margin-left: 40px;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
        }
    th,td{
        padding-left: 15px;
        padding: 5px;
    }
    table {
        width: 20%;
        border-collapse: collapse;
    }
    th, td {
        border-bottom: 1px solid gray;
        border-top: 1px solid black;
    }
    </style>
</head>
<body>
<?php 
        $kota = [
            [
                'nama'=> 'Chicago, IL',
                'populasi'=> '2695598',
            ],
            [
                'nama'=> 'Dallas, TX',
                'populasi'=> '1197816',
            ],
            [
                'nama'=> 'Houston,TX',
                'populasi'=> '2100263',
            ],
            [
                'nama'=> 'Los Angeles, CA',
                'populasi'=> '3792621',
            ],
            [
                'nama'=> 'New York, NY',
                'populasi'=> '8175133',
            ],
            [
                'nama'=> 'Philadelphia,PA',
                'populasi'=> '1526006',
            ],
            [
                'nama'=> 'Phoenix, AZ',
                'populasi'=> '1445632',
            ],
            [
                'nama'=> 'San Antonio, TX',
                'populasi'=> '1327407',
            ],
            [
                'nama'=> 'San Diego, CA',
                'populasi'=> '1307402',
            ],
            [
                'nama'=> 'San Jose, CA',
                'populasi'=> '945942',
            ],
          ];
        ?>

        <h1>Nama Kota dan Populasi</h1>
        <table class="container">
          <thead>
            <tr>
              <th><b>Nama</b></th>
              <th><b>Populasi</b></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($kota as $kt) : ?>
              <tr>
                <td><?php echo $kt['nama'] ?></td>
                <td><?php echo $kt['populasi'] ?></td>
              </tr>
            <?php endforeach; ?>
            <br>
            <br>
            <?php
            for($i=0 ; $i < count($kota); $i++){
                switch($kota[$i]){
                    case($kota[$i]['nama'] === 'Philadelphia,PA'):
                        $kota[$i]['populasi'] = '14000000';
                        break;
                    case($kota[$i]['nama']==='Los Angeles, CA'):
                        $kota[$i]['populasi'] = '3700000';
                        break;
                    default:
                        break;
                }
            }
              ?>

              <table class="container">
              <br>
              <p>============ Hasil Perubahan Value ============</p>
              <br>
                <thead>
                    <tr>
                        <th><b>Nama</b></th>
                        <th><b>Populasi</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($kota as $kt): ?>
                    <tr>
                    <td><?php echo $kt['nama']?></td>
                    <td><?php echo $kt['populasi'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>

              <?php function sortByPopulasi($a, $b) {
                    return $a['populasi'] - $b['populasi'];
                }
                usort($kota, 'sortByPopulasi');
                ?>
            <table class="container">
              <br>
              <p>============ Hasil Perubahan Urutan ============</p>
              <br>
                <thead>
                    <tr>
                        <th><b>Nama</b></th>
                        <th><b>Populasi</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($kota as $kt): ?>
                    <tr>
                    <td><?php echo $kt['nama']?></td>
                    <td><?php echo $kt['populasi'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
              
          </tbody>
        </table>
</body>
</html>
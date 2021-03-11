<?php 
        $students = [
            [
              'nama'=> 'Indah',
              'nim'=> '192410101039',
              'usia'=> '24',
            ],
            [
              'nama'=> 'Fidia',
              'nim'=> '192410101007',
              'usia'=> '24',
            ],
          ];
        ?>

        <h1>Data Mahasiswa</h1>
        <table>
          <thead>
            <tr>
              <th>Nama</th>
              <th>Nim</th>
              <th>Usia</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($students as $student) : ?>
              <tr>
                <td><?php echo $student['nama'] ?></td>
                <td><?php echo $student['nim'] ?></td>
                <td><?php echo $student['usia'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
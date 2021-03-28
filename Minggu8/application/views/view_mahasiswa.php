 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi</title>
     <style>
      table, td, th, td {
        border: 2px solid black;
        padding: 2px;
        border-collapse: collapse;
      }
      </style>
  </head>
  <body>
    <table>
    <th>No</th>
    <th>Mahasiswa</th>
    <th>Prodi</th>
    <?php $no=1; foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $no?></td>
        <td><?= $row['Nama'] ?></td>
        <td><?= $row['Prodi'] ?></td>
      </tr>
    <?php $no++; endforeach ?>
  </table>
  </body>
  </html>
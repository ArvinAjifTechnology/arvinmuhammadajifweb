<?php 
require 'functions.php';
$pelajar = query("SELECT * FROM hubungi")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hubungi</title>
</head>
<body>
    <a href="index.php">Kembali</a> <br>
    <Table border="1" cellpadding= "10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subjek</th>
        <th>Pesan</th>
    </tr>
    <?php $i=1;?>
    <?php foreach($pelajar as $row): ?>
    <tr>
        <td><?=$i;?></td>
        <td>
        <a href=""> Ubah</a>l 
        <a href=""> Hapus</a>
        </td>
        <td><?=$row["nama"]?></td>
        <td><?=$row["email"]?></td>
        <td><?=$row["subjek"]?></td>
        <td><p><?=$row["tatanya"]?></p></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>


    </Table>
</body>
</html>
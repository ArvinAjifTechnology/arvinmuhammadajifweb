<?php 
// Koneksi Ke Database
$conn=mysqli_connect("localhost" , "root", "", "smkplussukaraja");
// ambil data
$result=mysqli_query($conn, "SELECT * FROM  hubungi");

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
    <Table border="1" cellpadding= "10" cellspacing="0">
    <tr>
        <th> No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Subjek</th>
        <th>Pesan</th>
    </tr>
    <?php $i=1;?>
    <?php while ( $row=mysqli_fetch_assoc ($result) ) : ?>
    <tr>
        <td><?=$i;?></td>
        <td>
        <a href=""> Ubah</a>l 
        <a href=""> Hapus</a>
        </td>
        <td><?=$row["nama"]?></td>
        <td><?=$row["nohp"]?></td>
        <td><?=$row["email"]?></td>
        <td><?=$row["subjek"]?></td>
        <td><?=$row["pesan"]?></td>
    </tr>
    <?php $i++;?>>
    <?php endwhile;?>


    </Table>
</body>
</html>
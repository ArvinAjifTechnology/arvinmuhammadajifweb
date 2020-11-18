<?php
require 'functions.php';

// cek apakah tombol sudah ditekan atau belum

if( isset($_POST["submit"]) ) {
    
// Data Berhasil ditambahkan atau tidak
    if(tambah($_POST) >0 ) {
        echo "
        <script >
           alert('Data Berhasil Ditambahkan!');
           document.location.href= 'hubungi.php';
       </script>
        ";
    }else
        echo" 
        <script >
           alert('Data Gagal Ditambahkan!');
           document.location.href= 'hubungi.php';
       </script>";   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMK PLUS SUKARAJA</title>
</head>
<body>
    <h1>SMK PLUS SUKARAJA</h1>
    <img src="picture/logosmk.png" alt="SMK Plus Sukaraja" height="200"/>
    <p> Di Smk Plus Sukaraja Terdapat 3 Jurusan </p>
    <h2> Pilihlah Jurusan Yang Ada Di Sukaraja:</h2>
        <ul>
            <li> <a href="www.multimedia.sch.id " target="_blank">Multimedia</a> </li>
            <li> <a href="www.farmasi.sch.id" target="_blank"> Farmasi</a> </li>
            <li> <a href="www.tsm.sch.id" target="_blank">Teknik Sepeda Motor</a></li>
            <li> <a href="www.yayasansukaraja.sch.id" target="_blank"> Pesantren Sukaraja</a> </li>
        </ul>
        <table border="1">
            <!--Untuk Tabel Harga-->
            <tr>
                <td>Multimedia</td>
                <td>Farmasi</td>
                <td> Teknik Sepeda Motor</td>
                <td>Pesantren Sukaraja</td>
            </tr>
            <tr>
                <td>Rp. 85.800/Bulan</td>
                <td>Rp. 75.000/Bulan</td>
                <td> Rp. 75.000/Bulan</td>
                <td>Rp. 200.000/Bulan</td>
            </tr>
            <tr>
                <td>Website</td>
                <td>Obat</td>
                <td> Otomotif</td>
                <td>Tahsin</td>
            </tr>
        </table>
        <div>
            <h2>Hubungi Kami</h2>
            <form action="" method="post">
                <div>
                    <input type="text" name="nama" placeholder="Nama Anda" required=""/>
                </div>
                <br>
                    <input type="text" name="nohp" placeholder="No Hp Anda" required=""/>
                </div> <br>
                <div> 
                <input type="text" name ="email" placeholder = "Email Anda" required=""/>
                </div>
                <br>
                <div>
                    <input type="text" name="subjek" placeholder="Subjek" required=""/>
                </div> <br>
                <div>
                     <!-- <input type="textarea" name="tatanya" placeholder="pesan" required=""/> -->
                    <textarea name="tatanya" id="tatanya" cols="30" rows="10" placeholder="Pertanyaan" required></textarea> <br>
                </div>
                <br>
                <div>
                    <button type="submit" name ="submit">Kirim Sekarang</button>
                </div>
            </form>
        </div>
</body>  
</html>
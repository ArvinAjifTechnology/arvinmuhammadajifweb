<!DOCTYPE html>
<html>
<head>
    <title>Contoh form pendaftaran</title>
</head>
<body>
    <h1>Pendaftaran</h1>
    <hr width="20%" align="left">
    <p>Isilah seluruh kolom registrasi dengan <br />sebenar-benarnya.</p>
    <form action="" method ="post"></form>
    <table>
    	<tr>
    	    <td valign="top">Nama</td>
    	    <td><input type="text" name="nama" placeholder="Masukan nama anda"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Username</td>
    	    <td><input type="text" name="username" placeholder="Masukan username"></td>
    	</tr>
    	<tr>
               <td valign="top">Password</td>
               <td><input type="password" name="password" placeholder="Password"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Email</td>
    	    <td><input type="email" name="email" placeholder="Masukan email"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Jenis Kelamin</td>
    	    <td>
    	    	<input type="radio" name="l">Pria<br />
    	    	<input type="radio" name="p">Perempuan
    	    </td>
    	</tr>
    	<tr>
    	    <td valign="top">Tanggal Lahir</td>
    	    <td>
    	       <input type="text" style="width: 25px" placeholder="dd">
    	       <input type="text" style="width: 25px" placeholder="mm">
    	       <input type="text" style="width: 50px" placeholder="yyyy">
    	    </td>
    	</tr>
    	<tr>
    	    <td valign="top">Negara</td>
    	    <td><input type="text" name="negara" placeholder="Negara tempat tinggal"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Kota</td>
    	    <td>
    	        <select>
    	            <option>Banda Aceh</option>
		    <option>Denpasar</option>
		    <option>Serang</option>
		    <option>Tangerang</option>
		    <option>Bengkulu</option>
		    <option>Gorontalo</option>
		    <option>Jakarta</option>
		    <option>Sungai Penuh</option>
		    <option>Jambi</option>
		    <option>Bandung</option>
		    <option>Bekasi</option>
		    <option>Bogor</option>
		    <option>Cimahi</option>
		    <option>Cirebon</option>
		    <option>Depok</option>
		    <option>Sukabumi</option>
		    <option>Tasikmalaya</option>
		    <option>Banjar</option>
		    <option>Magelang</option>
		    <option>Pekalongan</option>
		    <option>Purwokerto</option>
    	        </select>
    	    </td>
    	</tr>
    	<tr>
    	    <td valign="top">Biografi</td>
    	    <td><textarea placeholder="isilah biografi singkat anda" cols="30" rows="5"></textarea></td>
    	</tr>
    	<tr>
    	    <td colspan="2"><input type="submit" value="Simpan"></td>
    	</tr>
    </table>
</form>
</body>
</html>
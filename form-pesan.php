<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Pembelian Barang</h3>
	</header>
	
	<form action="proses-beli.php" method="POST"> <!--membuat atribut action dan method untuk action di panggil dari data prosespendaftran dan metodeya di posting -->
		
		<fieldset>
		
		<p>
			<label for="nama_barang">Nama barang: </label> <!--Membuat label -->
			<input type="text" name="nama_barang" placeholder="nama barang anda" /> <!--membuat inputan bertype text -->
		</p>
		<p>
			<label for="kategori">kategori: </label><!--label agama -->
			<select name="kategori">
				<option>Minuman</option><!--membuat list drop kebawah -->
				<option>Makanan</option>
				<option>ATK</option>
				<option>Pakaian</option>
				<option>Sepatu</option>
			</select>
		</p>
		<p>
			<label for="jumlah_stok">Jumlah Stok: </label><!-- label sekolah asal-->
			<input type="text" name="jumlah_stok"  /><!--inputan text -->
		</p>
		<p>
			<label for="harga_satuan">Harga Satuan: </label><!--membuat label -->
			<input type="text" name="harga_satuan"  /><!--inputan textarea -->
		</p>
		<p>
			<input type="submit" value="Beli" name="Beli" /><!--button daftar -->
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>

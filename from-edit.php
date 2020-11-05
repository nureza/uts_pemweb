<?php 

include("config.php");

if( !isset($_GET['Sku']) ){
	// kalau tidak ada id di query string
	header('Location: list-pembelian.php');
}

//ambil id dari query string
$Sku = $_GET['Sku'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM penjualan WHERE Sku=$Sku";
$query = mysqli_query($db, $sql);
$jual = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang Di Minimarket Barokah</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Barang</h3>
	</header>
	
	<form action="proses-edit.php" method="POST"><!--membuat atribut action dan method untuk action di panggil dari data prosespendaftran dan metodeya di posting -->
		
		<fieldset>
			
			<input type="hidden" name="Sku" value="<?php echo $jual['Sku'] ?>" /><!--untuk mengedit membutuhkan id dari data tetapi data tidak ditampilak jadi bertype hiiden -->
		<!--dari sini sampai kebawah codenya hampir sama dengan form daftar tetapi dengan keadaan tertentu -->
		<p>
			<label for="nama_barang">Nama Barang: </label>
			<input type="text" name="nama_barang" placeholder="nama barang anda" value="<?php echo $jual['nama_barang'] ?>" /><!--mengedit  dengan mengambil dari variable siswa list-siswa -->
		</p>
		<p>
			<label for="kategori">Kategori: </label>
			<?php $kategori = $jual['kategori']; ?><!--membuat variabel agama dari menconvert data siswa -->
			<select name="kategori">
				<option <?php echo ($kategori == 'Minuman') ? "selected": "" ?>>Minuman</option>
				<option <?php echo ($kategori == 'Makanan') ? "selected": "" ?>>Makanan</option>
				<option <?php echo ($kategori == 'Atk') ? "selected": "" ?>>Atk</option>
				<option <?php echo ($kategori == 'Pakaian') ? "selected": "" ?>>Pakaian</option>
				<option <?php echo ($kategori == 'Sepatu') ? "selected": "" ?>>Sepatu</option>
			</select>
		</p>
		<p>
			<label for="jumlah_stok">Jumlah Stok: </label>
			<input type="text" name="jumlah_stok"value="<?php echo $jual['jumlah_stok'] ?>" />
		</p>
		<p>
			<label for="harga_satuan">Harga Satuan: </label>
			<input type="text" name="harga_satuan"value="<?php echo $jual['harga_satuan'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>

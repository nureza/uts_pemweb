<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang Di Minimarket Barokah</title>
</head>

<body>
	<header>
		<h3>Selamat Datang</h3>
		<h1>Di Minimarket Barokah</h1>
		<h1>Belanja Puas Harga Hemat</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-pesan.php">Pesan Barang</a></li> <!--membuat bullet di dalam html -->
			<li><a href="list-pembelian.php">Data barang</a></li> <!--membuat bullet di dalam html -->
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?> <!--untuk mengeset jika data sudah dimasukkan -->
	<p>
		<?php
			if($_GET['status'] == 'sukses'){//jika data masuk ke database maka pendaftaran berhasil
				echo "Pembelian berhasil!";
			} else {//jika data tidak masuk ke database maka pendaftaran gagal
				echo "Pembelian gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>

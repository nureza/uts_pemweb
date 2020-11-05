<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang Di Minimarket Barokah</title>
</head>

<body>
	<header>
		<h3>Pelangan Yang membeli</h3>
	</header>
	<form action="cari.php" method="GET">
		<label>Cari Barang : </label>
		<input type="text" name="cari" placeholder="Nama Barang">
		<input type="submit" value="Cari">
    </form>
	<form action="comp.php" method="post">
            <table>
                <tr>
                    <td>Range Harga</td>
                <tr>
                    <td>
                        <label for="min_harga">Min : </label>
                        <input type="text" name="min_harga" id="min_harga">
                    </td>

                    <td>
                        <label for="max_harga">Max : </label>
                        <input type="text" name="max_harga" id="max_harga">
                    </td>

                    <td>
                        <button type="submit" name="filter">Filter</button>
                    </td>
                </tr>
                </tr>
            </table>
	<nav>
	
	</nav>
	
	<br>
	
	<table border="1"><!--untuk membuat table -->
	<thead><!--table head ber isi -->
		<tr>
			<th>Sku</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Jumlah Stok</th>
			<th>Harga Satuan</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody><!--tabel body berisi -->
		
		<?php
		$sql = "SELECT * FROM penjualan";//untuk mengaitkan dari table calon siswa
		$query = mysqli_query($db, $sql);//query sql
		
		while($jual = mysqli_fetch_array($query)){//variabel siswa berisi array database
			echo "<tr>";
			
			echo "<td>".$jual['Sku']."</td>"; //sesuai isi dari tabel di database
			echo "<td>".$jual['nama_barang']."</td>";//sesuai isi dari tabel di database
			echo "<td>".$jual['kategori']."</td>";//sesuai isi dari tabel di database
			echo "<td>".$jual['jumlah_stok']."</td>";//sesuai isi dari tabel di database
			echo "<td>".$jual['harga_satuan']."</td>";//sesuai isi dari tabel di database
			
			
			echo "<td>";
			echo "<a href='from-edit.php?Sku=".$jual['Sku']."'>Edit</a> | ";//membuat link ke tabel isinya untuk bisa di edit
			echo "<a href='hapus.php?Sku=".$jual['Sku']."'>Hapus</a>";//membuat link ke tabel isinya bisa dihapus
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p><!--untuk menghitung jumlah data yang ada di sql  -->
	
	</body>
</html>

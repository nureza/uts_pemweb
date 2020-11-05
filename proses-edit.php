<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$Sku = $_POST['Sku'];
	$nama_barang = $_POST['nama_barang'];
	$kategori = $_POST['kategori'];
	$jumlah_stok = $_POST['jumlah_stok'];
	$harga_satuan = $_POST['harga_satuan'];
	
	
	// buat query update
	$sql = "UPDATE penjualan SET nama_barang='$nama_barang', kategori='$kategori', jumlah_stok='$jumlah_stok', harga_satuan='$harga_satuan' WHERE Sku=$Sku";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-pembelian.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>

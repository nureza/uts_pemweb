<?php

include("config.php"); //memasukkan atau include file koneksi

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Beli'])){
	
	// ambil data dari formulir
	$nama_barang = $_POST['nama_barang'];
	$kategori = $_POST['kategori'];
	$jumlah_stok = $_POST['jumlah_stok'];
	$harga_satuan = $_POST['harga_satuan'];
	
	
	// buat query
	$sql = "INSERT INTO penjualan (nama_barang, kategori, jumlah_stok, harga_satuan) VALUE ('$nama_barang', '$kategori', '$jumlah_stok', '$harga_satuan')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>

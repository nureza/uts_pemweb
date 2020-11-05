<?php

include("config.php");

if( isset($_GET['Sku']) ){
	
	// ambil id dari query string
	$Sku = $_GET['Sku'];
	
	// buat query hapus
	$sql = "DELETE FROM penjualan WHERE Sku=$Sku";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: list-pembelian.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>

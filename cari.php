<?php
include("config.php");

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query2 = "SELECT * FROM penjualan WHERE 
		nama_barang LIKE '%$cari%' OR 
		Sku LIKE '%$cari%' OR
		kategori LIKE '%$cari%' OR
		jumlah_stok LIKE '%$cari%' OR
		harga_satuan LIKE '%$cari%'";
    $search = mysqli_query($db, $query2);
} else {
    $query2 = "SELECT * FROM produk";
    $search = mysqli_query($db, $query2);
}
?>

<html>

<head>
    <title>Search Result</title>
</head>

<body>
	<h2>Result</h2>
    <div class="container">
        <table border="1px">
            <tr>
                <th>Sku</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah Stok</th>
                <th>Harga Satuan</th>
                </tr>

            <?php while ($jual = mysqli_fetch_array($search)) : ?>
                <tr>
                    <td><?php echo $jual['Sku']; ?></td>
                    <td><?php echo $jual['nama_barang']; ?></td>
                    <td><?php echo $jual['kategori']; ?></td>
                    <td><?php echo $jual['jumlah_stok']; ?></td>
                    <td><?php echo $jual['harga_satuan']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <button onclick="window.location.href='index.php'">Kembali</button>
    </div>
</body>

</html>
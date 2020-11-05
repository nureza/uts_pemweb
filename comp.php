<?php
include("config.php");


$min = $_POST["min_harga"];
$max = $_POST["max_harga"];
$query1 = "SELECT * FROM penjualan WHERE harga_satuan BETWEEN $min AND $max";
$filter = mysqli_query($db, $query1);

?>

<html>
<head>
    <title>Filter Rentang Harga</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
</head>

<body>
    <div class="container">
        <h1>DATA BERDASARKAN RANGE HARGA</h1>
        <table border="1px">
            <tr>
               <th>Sku</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah Stok</th>
            <th>Harga Satuan</th>
            </tr>

            <?php while ($jual = mysqli_fetch_array($filter)) : ?>
                <tr>
                    <td><?php echo $jual['Sku']; ?></td>
                    <td><?php echo $jual['nama_barang']; ?></td>
                    <td><?php echo $jual['kategori']; ?></td>
                    <td><?php echo $jual['jumlah_stok']; ?></td>
                    <td><?php echo $jual['harga_satuan']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <button onclick="window.location.href='http://localhost/minimarket/index.php'">Kembali</button>
    </div>
</body>

</html>

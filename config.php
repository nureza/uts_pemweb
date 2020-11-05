<?php

$server = "localhost";//server database
$user = "root";//user database
$password = "";//password databasae
$nama_database = "minimarket";//nama database

$db = mysqli_connect($server, $user, $password, $nama_database);//code connect ke mysql
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());//code untuk mengecek connect ke database gagal atau tidak
}
?>

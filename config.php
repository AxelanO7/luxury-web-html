<?php
//konfigurasi database
$server = "localhost";
$username = "root";
$password = "";
$name = "uts";

//membuat koneksi
$conn = mysqli_connect($server, $username, $password, $name);

//koneksi gagal
if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
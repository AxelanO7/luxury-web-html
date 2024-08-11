<?php
include('config.php');
 
$nocc = $_POST['no-cc'];
$cvv = $_POST['cvv'];
$etc = $_POST['etc'];
$acc = $_POST['acc'];
 
$query = mysqli_query($conn, "INSERT INTO pembayaran(nomor-cc, cvv, pembayaran-lain, e-banking) VALUES('$nocc', '$cvv', '$etc', '$acc')");
 
if($query){
 echo 'Data berhasil disimpan. Klik <a href="index.html">di sini</a> untuk input data kembali.';
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="input.html">di sini</a>';
}
 
?>
<?php
	include("koneksi.php");
	$kode_transaksi = $_POST['kode_transaksi'];
	$tanggal_transaksi = $_POST['tanggal_transaksi'];
	$nama_pembeli = $_POST['nama_pembeli'];
	$total_harga = $_POST['total_harga'];
	$jenis_transaksi = $_POST['jenis_transaksi'];
	$query = mysqli_query($connect, "insert into transaksi values ('$kode_transaksi','$tanggal_transaksi','$nama_pembeli','$total_harga','$jenis_transaksi')");


		echo "Data Telah disimpan<br>
		<a href=\"index.php\">Kembali</a>";
?>
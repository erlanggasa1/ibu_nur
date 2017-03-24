<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TRANSAKSI IBU NUR</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		<a href="index.php" class="logo">
			<img src="images/logo.jpg" alt="">
		</a>
		<ul id="navigation">
			<li class="selected">
				<a href="index.php">Transaksi</a>
			</li>
			<li>
				<a href="stok.php">Stok</a>
			</li>
		</ul>
	</div>

	<?php
	$connect = mysqli_connect("localhost","root","","ibu_nur") or die ("Gagal Konek Ke Server!");
	?>
	<table id="table1" align="center">
		<tr>
			<th>Kode Transaksi</th>
			<th>Tanggal Transaksi</th>
			<th>Nama Pelanggan</th>
			<th>Total Transaksi</th>
			<th>Jenis Transaksi</th>
			<th colspan="4">Aksi</th>
		</tr>
	

	<?php
		$result = mysqli_query($connect,"SELECT * FROM transaksi");
		//$no = 0;
		while ($buff = mysqli_fetch_array($result))
		{
		//$no++;
	?>

	<tr>
		<td><?php echo $buff['kode_transaksi']; ?></td>
		<td><?php echo $buff['tanggal_transaksi']; ?></td>
		<td><?php echo $buff['nama_pembeli']; ?></td>
		<td><?php echo $buff['total_harga']; ?></td>
		<td><?php echo $buff['jenis_transaksi']; ?></td>

		<td><a href="edit.php?kode_transaksi=<?php echo $buff['kode_transaksi']; ?>">Edit</a></td>
		<td><a href="hapus.php?kode_transaksi=<?php echo $buff['kode_transaksi']; ?>">Hapus</a></td>
	</tr>
	<?php
	}
	mysqli_close($connect);
	?>
	</table>
	<form action='tambah.html' method='POST'>
		<table align="center">
 			<tr>
 				<td> <input type='submit' name='tambah' value='Tambah Transaksi'> </td> 
 			</tr>
		</table>
	</form>
	<div id="footer">
		<div>
			<p>&copy;2014 Toko Ibu Nur, All rights reserved.</p>
		</div>
	</div> 
</body>
</html>
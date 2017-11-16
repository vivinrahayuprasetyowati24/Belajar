<?php 

include 'koneksi.php';

$sql = "SELECT nama_barang, jumlah_barang, tgl_masuk, id_jenis, keadaan_barang FROM barang";
$data = mysqli_query($koneksi, $sql);

//var_dump($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>
</head>
<body>
	<table border="1px">
		<label><b>Gudang Barang</b></label></br>
		<a href="input_barang.php">Tambah Barang</a>
		<tr>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Tgl Masuk</th>
			<th>Jenis</th>
			<th>Keadaan</th>
		</tr>
<?php
	foreach ($data as $barang):
?>
		<tr>
			<td>
				<?php echo $barang['nama_barang'];?>
			</td>
			<td>
				<?php echo $barang['jumlah_barang'];?>
			</td>
			<td>
				<?php echo $barang['tgl_masuk'];?>
			</td>		
			<td>
				<?php echo $barang['id_jenis'];?>
			</td>
			<td>
				<?php echo $barang['keadaan_barang'];?>
			</td>				
		</tr>
<?php
	endforeach;
?>
	</table>
</body>
</html>
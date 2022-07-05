  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<table>
<th>No</th>
<th>NAMA</th>
<th>ALAMAT</th>
<th>KECAMATAN</th>
<th>KELURAHAN</th>
<th>KOTA</th>
<th>Aksi</th>

<?php
include "koneksi_server.php"
$no = 1;
$data = mysqli_query($koneksi, "select * from warga");

while($d = mysqli_fetch_array($data)){

	
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
		<td><?php echo $d['kecamatan']; ?></td>
		<td><?php echo $d['kelurahan']; ?></td>
		<td><?php echo $d['kota']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $d['id'] ?>">EDIT</a>
			<a href="hapus.php?id=<?php echo $d['id'] ?>">HAPUS</a>
		</td>
	</tr>
	
	<?php 
	} 
?>
</table>
</body>
</html>

<?php 
  
  include('koneksi_server.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM warga WHERE id = $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="../../../Users/DONI/Downloads/update.php">
     <table>
	        
			<tr>
			      <td>
				  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
			      </td>
			</tr>
			
			
			<tr>
			    <td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
			</tr>
			<tr>
			   <td>Alamat</td>
			   <td>:</td>
			   <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
			</tr>
			<tr>
			   <td>Kecamatan</td>
			   <td>:</td>
			   <td><input type="text" name="kecamatan" value="<?php echo $row['kecamatan']; ?>"></td>
			</tr>
			<tr>
			   <td>Kelurahan</td>
			   <td>:</td>
			   <td><input type="text" name="kelurahan" value="<?php echo $row['kelurahan']; ?>"></td>
			</tr>
			<tr>
			   <td>Kota</td>
			   <td>:</td>
			   <td><input type="text" name="kota" value="<?php echo $row['kota']; ?>"></td>
			</tr>
			<tr>
		     <td><input type="submit" name="submit" value="Update"></td>
			 
		  </tr>
	 </table>
	 
</form>

</body>
</html>

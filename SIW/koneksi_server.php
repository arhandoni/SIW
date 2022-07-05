<?php

$koneksi = mysqli_connect ("localhost","root","","SIW"); // koneksi lokal

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	else
	{
	echo "Koneksi Mysql Berhasil<BR>";
	}
		
	?>
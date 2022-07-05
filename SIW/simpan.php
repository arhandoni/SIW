<?php

//include koneksi database
include('koneksi_server.php');

//get data dari form
$nama = $_POST['nama'];
echo $nama;
$alamat = $_POST['alamat'];
echo $alamat;
$kecamatan = $_POST['kecamatan'];
echo $kecamatan;
$kelurahan = $_POST['kelurahan'];
echo $kelurahan;
$kota = $_POST['kota'];
echo $kota;

//query inseert data form
$query = "INSERT INTO warga (nama, alamat, kecamatan, kelurahan, kota) VALUES ('$nama', '$alamat', '$kecamatan', '$kelurahan', '$kota')";

//kondisi pengecekan apakah data berhasil dimasukan atau tidak
if($koneksi->query($query)) {

	//redirect ke halaman index.php
	header("location: admin.php");
	
} else {

	//pesan error gagal insert data
	echo "Data Gagal Disimpan!";
	
} 

?>
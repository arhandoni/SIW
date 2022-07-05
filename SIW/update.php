<?php

//include koneksi database
include('koneksi_server.php');

//get data dari form
$id = $_POST['id'];
$nama  = $_POST['nama'];
echo $nama; 
$alamat = $_POST['alamat'];
echo $alamat;
$kecamatan = $_POST['kecamatan'];
echo $kecamatan;
$kelurahan = $_POST['kelurahan'];
echo $kelurahan;
$kota = $_POST['kota'];
echo $kota;

//query insert data ke dalam database
//$query = "INSERT INTO mahasiswa (nim, nama) VALUES ('$nim', '$nama')";

//$query = "update mahasiswa set nim = '$nim', nama = '$nama' where id = '$id' ";
$query = mysqli_query($koneksi,"update mahasiswa set nama = '$nama', alamat = '$alamat', kecamatan = '$kecamatan', kelurahan = '$kelurahan', kota = '$kota' where id = '$id'");

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: admin.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

} 

?>
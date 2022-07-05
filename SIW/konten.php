<?php
if(isset($_GET['tampil']))$tampil = $_GET['tampil'];
else $tampil = "beranda";

if($tampil == "beranda") include ("beranda.php");
elseif($tampil == "keluar") include ("keluar.php");

elseif($tampil == "menu") include ("menu/menu_tampil.php");
elseif($tampil == "form") include ("form.php");
elseif($tampil == "tampil_data") include ("tampil_data.php");

?>
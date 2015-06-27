<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
include ("function.php");
$id = $_GET['id'];
//hapus gambar
	$SQL = "SELECT * FROM barangtbl WHERE id=$id";
	$Gambar = mysql_query($SQL);
	$row = mysql_fetch_array($Gambar);
	//periksa nama file
		if($row['gambar']<>""){
			$namafile = 'images/'.$row['gambar'];
			HapusFile($namafile);
		}
$perintah = "DELETE from barangtbl where id = $id";
$result = mysql_query($perintah);
	if ($result) {
		header("location:produk.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>
<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
include ("function.php");

$gbr = $_FILES['foto']['name'];
if (strlen($gbr)>0){
	//hapus foto lama
	$SQL = "select * from barangtbl where id=$id";
	$Gambar = mysql_query($Gambar);
	$row = mysql_fetch_array($Gambar);
	//periksa nama file 
		if($row['gbr']<>""){
			$namafile = 'images/'.$row['gbr'];
			HapusFile($namafile);
		}
		//upload
		if (is_uploaded_file($_FILES['foto']['tmp_name'])){
			move_uploaded_file($_FILES['foto']['tmp_name'],"images/".$gbr);
		
		//rename
		$gantinama = UbahNamaFile("images/",$gbr,$nama);
		//update
		mysql_query ("UPDATE barangtbl SET gbr='$gantinama' where id=$id");
}
}
$perintah = "UPDATE barangtbl set nama = '$_POST[namatxt]', deskripsi = '$_POST[destxt]', warna = '$_POST[wrntxt]', ukuran = '$_POST[ukrtxt]', kategori = '$_POST[ktglist]', harga = '$_POST[hrgtxt]', stock = '$_POST[stktxt]' where id = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:produk.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>
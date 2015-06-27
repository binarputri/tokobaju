<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
include("function.php");
$nama = $_POST['namatxt'];
$des = $_POST['destxt'];
$wrn = $_POST['wrntxt'];
$ukr = $_POST['ukrtxt'];
$ktg = $_POST['ktglist'];
$hrg = $_POST['hrgtxt'];
$stk = $_POST['stktxt'];
$gbr = $_FILES['foto']['name'];
if(strlen($gbr)>0){
	//upload
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'],"images/".$gbr);
	}
	$gantinama = UbahNamaFile("images/",$gbr,$nama);
}

$perintah = "INSERT INTO barangtbl (nama,deskripsi,warna,ukuran,kategori,harga,stock,gambar)
VALUES ('$nama','$des','$wrn','$ukr','$ktg','$hrg','$stk','$gantinama')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:produk.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>
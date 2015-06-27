<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$notransaksi = $_GET['notransaksi'];
$perintah = "DELETE from transaksitbl where notransaksi = $notransaksi";
$result = mysql_query($perintah);
	if ($result) {
		header("location:transaksi.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>
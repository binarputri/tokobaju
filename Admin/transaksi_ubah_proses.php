<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE transaksitbl set  status = '$_POST[statustxt]' where notransaksi = '$_POST[notransaksitxt]'";

$result = mysql_query($perintah);
	if ($result) {
		header("location:transaksi.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>
<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id = $_GET['id'];
$perintah = "DELETE from kategoritbl where id = $id";
$result = mysql_query($perintah);
	if ($result) {
		header("location:kategori.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>
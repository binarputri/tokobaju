<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<table width="600" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
  <th width="20%" align="left" scope="col" >No Transaksi</th>
    <th width="10%" align="left" scope="col" >Username</th>
    <th width="15%" align="left" scope="col">Status</th>
	<th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from transaksitbl order by notransaksi desc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['notransaksi']."</td>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['username']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['status']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"transaksi_ubah.php?notransaksi=$data[notransaksi]\"><img width=\"15\" src=\"../Gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>&nbsp;&nbsp;<a href=\"transaksi_hapus.php?notransaksi=$data[notransaksi]\"><img width=\"15\" src=\"../Gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>

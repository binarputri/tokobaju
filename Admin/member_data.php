<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<table width="600" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
  <th width="20%" align="left" scope="col" >ID</th>
    <th width="10%" align="left" scope="col" >Nama</th>
    <th width="15%" align="left" scope="col">Alamat</th>
    <th width="25%" align="left" scope="col">Email</th>
    <th width="7%" align="center" scope="col">Telepon</th>
	<th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from pelanggantbl order by id desc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['id']."</td>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['nama']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['alamat']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['email']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['telepon']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\">&nbsp;&nbsp;<a href=\"member_hapus.php?id=$data[id]\"><img width=\"15\" src=\"../Gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>

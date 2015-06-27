<?php 
if(isset($_SESSION['userlogin'])) {
	echo "<Font color=\"Gyan\">".$_SESSION['userlogin'];
}
?>
<?php
 
include("config.php"); 
echo '<h3>Data User</h3>
<table border="1">
<tr>
<th>No Transaksi</th>
<th>Username</th>
<th>Nama Barang</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Subtotal</th>
<th>Status</th>
</tr>
<tr>';
 
$tampil = "select transaksirincitbl.notransaksi, 
transaksirincitbl.username, transaksirincitbl.nama, 
transaksirincitbl.harga, transaksirincitbl.jumlah, 
transaksirincitbl.subtotal, transaksitbl.status from 
transaksitbl left join transaksirincitbl 
on transaksitbl.notransaksi = transaksirincitbl.notransaksi";
//perintah menampilkan data dikerjakan
$sql = mysql_query($tampil);
 
//tampilkan seluruh data yang ada pada tabel user
while($data = mysql_fetch_array($sql))
 {
 
echo "
 <td>".$data["notransaksi"]."</td>
 <td>".$data["username"]."</td>
 <td>".$data["nama"]."</td>
 <td>".$data["harga"]."</td>
 <td>".$data["jumlah"]."</td>
 <td>".$data["subtotal"]."</td>
 <td>".$data["status"]."</td>
 </tr>";
 }
echo '</table>';
 
?>
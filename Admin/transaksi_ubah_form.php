  <?php
  require ("config.php");
  $perintah="select * from transaksitbl where notransaksi='".$_GET['notransaksi']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  ?>
  
<form id="form1" name="form1" method="post" action="transaksi_ubah_proses.php">
  <table width="400" border="0" align="left">
    <tr>
      <td align="left" valign="top">No Transaksi</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="notransaksitxt"></label>
      <input name="notransaksitxt" type="text" id="notransaksitxt" value="<?php echo $data['notransaksi'] ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="10%" align="left" valign="top">Username</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="usernametxt" type="text" id="usernametxt" value="<?php echo $data['username'] ?>" />
      </label>
        </span></td>
    </tr>
	<tr>
      <td width="10%" align="left" valign="top">Status</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="statustxt" type="text" id="statustxt" value="<?php echo $data['status'] ?>" />
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label>
        <input type="submit" name="Submit" value="Ubah" />
      </label>
        
        </span></td>
    </tr>
  </table>
</form>

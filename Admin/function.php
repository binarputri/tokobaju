<?php
//fungsi menghapus file
function HapusFile ($namafile){
	$berhasil = false;
	if (file_exists($namafile)){
		unlink($namafile);
		$berhasil = true;
	}
	return $berhasil;
}

//fungsi merubah nama file
function UbahNamaFile($lokasi,$awal,$baru){
	$fileAwal = $awal;
	$ekstensi = substr ($fileAwal, strlen($fileAwal)-4,4);
	$fileBaru = $baru.$ekstensi;
	rename($lokasi.$fileAwal,$lokasi.$fileBaru);
	return $fileBaru;
}
?>
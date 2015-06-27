<?php

//file pendukung class pdf dan koneksi ke database
require("../config.php");
include ('class.ezpdf.php');

//Pengaturan kertas untuk saat ini tipe kertas A4
$pdf =& new Cezpdf('A1','portrait');


		// Atur margin
		$pdf->ezSetCmMargins(1, 3, 3, 3);

		$pdf->addObject($all, 'all');
		$pdf->closeObject();
		
		//baris kode dibawah ini digunakan untuk mencetak info toko dalam pdf
		$pdf->ezText('TOKO BAJU', 25, array('justification' => 'center'));
		$pdf->ezText('LAPORAN DATA PRODUK', 15, array('justification' => 'center'));
		
		
		$pdf->ezSetDy(-10); //perintah untuk memberikan jarak spasi paragraf
		
		//$pdf->line(50,1500,2273,1500); //perintah untuk membuat garis atas tabel
					
		$pdf->ezSetDy(-10);
		
		$sql = mysql_query("SELECT * FROM barangtbl order by id asc"); 	 	
		$i = 1;
		while($tampil = mysql_fetch_array($sql)) {
			 
			$data[$i]=array('ID'=> $tampil['id'], 	 	
							'NAMA'=>$tampil['nama'],
							'DESKRIPSI'=>$tampil['deskripsi'],
							'WARNA'=>$tampil['warna'],
							'UKURAN'=>$tampil['ukuran'],
							'KATEGORI'=>$tampil['kategori'],
							'HARGA'=>$tampil['harga'],
							'STOCK'=>$tampil['stock'],
							);
								
			$i++;
			
		}
		
		//perintah untuk mengatur teks yang di cetak pada pdf
		//$pdf->ezStartText(100, 557, 12);
		//$pdf->ezStartText2(500, 557, 12);
		$pdf->ezStartPageNumbers(35, 15, 10);
		$pdf->ezTable($data, '', '', '');
		$pdf->ezSetDy(-50);
		
		$pdf->ezText('NB :', 13, array('justification' => 'LEFT')); //membuat teks NB di bawah tabel
		
		$pdf->ezStream();
?>

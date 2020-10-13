<?php 

include "system/dbTools.php";
include "system/function.php";
include "pdf/class.ezpdf.php";

$nama = strtoupper($_POST[nama]);
$kelamin = strtoupper($_POST[kelamin]);
$alamat = strtoupper($_POST[alamat]);
$nomor = strtoupper($_POST[nomor]);
$rtrw = strtoupper($_POST[rtrw]);
$kelurahan = strtoupper($_POST[kelurahan]);
$kecamatan = strtoupper($_POST[kecamatan]);
$wilayah = strtoupper($_POST[wilayah]);
$telepon = strtoupper($_POST[telepon]);
$pekerjaan = strtoupper($_POST[pekerjaan]);
// $tgl_lahir = strtoupper($_POST[tgl]."-".$_POST[bln]."-".$_POST[th]);
$tgl = $_POST[tgl];
$bln = $_POST[bln];
$th = $_POST[th];
$no_donor = strtoupper($_POST[no_donor]);
$penghargaan = strtoupper($_POST[penghargaan]);
$donor_puasa = strtoupper($_POST[donor_puasa]);
$donor_terakhir = strtoupper($_POST[donor_terakhir]);
$donor_ke = strtoupper($_POST[donor_ke]);

$tanggal=date("Y-m-d");
// $tgl=$tanggal; $pecah=split("-",$tgl);
// $tgl="$pecah[2]/$pecah[1]/$pecah[0]";
$tampilan_tgl = konversi_Tanggal($tanggal);
$jam = date("H:i:s");
$waktu = date("Y-m-d - H:i:s");
		$judul1  = $tampilan_tgl." - ".$jam;
		$judul2  = "RINCIAN PEMAKAIAN PART";
		$pdf = new Cezpdf('a5','portrait');
		$pdf ->ezSetCmMargins(1,1,1,1);
		$mainFont = 'font/Helvetica.afm';
		$pdf->selectFont($mainFont);

/* 		$watermark = $pdf->openObject(); 
		$pdf->saveState(); 
		$pdf->setColor(0.9,0.9,0.9);
		// $pdf->ezText('54', 20, array('justification'=>'center'));
		$pdf->addText(25,300,80,'54',''); 
		$pdf->restoreState(); 
		$pdf->closeObject(); 
		$pdf->addObject($watermark,'all'); 
 */

		$header=array(array('tempat'=>'Tempat Penyumbangan - <b>Bengkel Hangtuah</b>','tanggal'=>'Tanggal <b>'.$tampilan_tgl.'</b>'));
		$pdf->ezTable($header,'','',array('showHeadings'=>0,'shaded'=>0,'showLines'=>1,'fontSize'=>9,'width'=>364.25,'xPos'=>'center','cols'=>array('tempat'=>array('justification'=>'left'),'tanggal'=>array('justification'=>'right'))));
		$pdf->ezSetDy(-10);

		$c1='kolom1';
		$c2='kolom2';
		$c3='kolom3';

		$isi=array(array($c1=>'Nama donor',$c2=>$nama,$c3=>$kelamin),
				   array($c1=>'Alamat rumah',$c2=>$alamat,$c3=>'No. '.$nomor.' - RT/RW '.$rtrw),
				   array($c1=>'Kelurahan',$c2=>$kelurahan,$c3=>'Kecamatan '.$kecamatan),
				   array($c1=>'Wilayah',$c2=>$wilayah,$c3=>'Telepon '.$telepon),
				   array($c1=>'Pekerjaan',$c2=>$pekerjaan,$c3=>''),
				   array($c1=>'Tanggal lahir',$c2=>"Tgl [ <b>".$tgl."</b> ] Bln [ <b>".$bln."</b> ] Th [ <b>".$th."</b> ]",$c3=>'No. kartu donor '.$no_donor));
		$pdf->ezTable($isi,'','',array('showHeadings'=>0,'shaded'=>0,'showLines'=>0,'fontSize'=>9,'width'=>364.25,'xPos'=>'center','cols'=>array($c1=>array('justification'=>'left','width'=>70),$c2=>array('justification'=>'left','width'=>150),$c3=>array('justification'=>'left'))));
		
		$pdf->ezSetDy(-3);
		$pdf->ezText('Penghargaan yang telah diterima <b>'.$penghargaan.'x</b>', 9, array('justification'=>'left'));
		$pdf->ezSetDy(-4);
		$pdf->ezText('Bersediakah Saudara donor pada waktu bulan puasa? <b>'.$donor_puasa.'</b>', 9, array('justification'=>'left'));

		$isi=array(array($c1=>'Donor terakhir tanggal '.$donor_terakhir,$c2=>'',$c3=>'Sekarang donor yang ke <b>'.$donor_ke.'</b> kali'));
		$pdf->ezSetDy(-3);
		$pdf->ezTable($isi,'','',array('showHeadings'=>0,'shaded'=>0,'showLines'=>0,'fontSize'=>9,'width'=>364.25,'xPos'=>'center','cols'=>array($c1=>array('justification'=>'left','width'=>150),$c2=>array('justification'=>'left'),$c3=>array('justification'=>'left'))));
		$pdf->ezSetDy(-50);
		$pdf->setColor(0.9,0.9,0.9);
		$pdf->ezText('<b>54</b>', 150, array('justification'=>'center'));
		$pdf->ezStream();

?>



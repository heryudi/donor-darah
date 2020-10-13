<?php 

include "system/dbTools.php";
include "system/function.php";
include "pdf/class.ezpdf.php";

$idp=$_GET['idp'];
$tanggal=date("Y-m-d");
$tampilan_tgl = konversi_Tanggal($tanggal);
$jam = date("H:i:s");
$waktu = date("Y-m-d - H:i:s");

		$pdf = new Cezpdf('a5','portrait');
		$pdf ->ezSetCmMargins(1,1,1,1);
		$mainFont = 'font/Helvetica.afm';
		$pdf->selectFont($mainFont);
		$header=array(array('tempat'=>'Tempat Penyumbangan - <b>Bengkel Hangtuah</b>','tanggal'=>'Tanggal <b>'.$tampilan_tgl.'</b>'));
		$pdf->ezTable($header,'','',array('showHeadings'=>0,'shaded'=>0,'showLines'=>1,'fontSize'=>9,'width'=>364.25,'xPos'=>'center','cols'=>array('tempat'=>array('justification'=>'left'),'tanggal'=>array('justification'=>'right'))));
		$pdf->ezSetDy(-10);

		$c1='kolom1';
		$c2='kolom2';
		$c3='kolom3';

	// $c2=>"Tgl [ <b>".$tgl."</b> ] Bln [ <b>".$bln."</b> ] Th [ <b>".$th."</b> ]"
	// $c2=>$dbP->Record['tgl_lahir']

	$dbP=new DbTools;
	$dbP->DbConnection();
	$sqlP="SELECT nama, kelamin, alamat, nomor, rtrw, kelurahan, kecamatan, wilayah, telepon, pekerjaan, tgl_lahir, no_donor, penghargaan, donor_puasa, donor_terakhir, donor_ke FROM pendonor WHERE id = '".$idp."'";
	$dbP->query($sqlP);
	$dbP->fetchRecordArray();
	$pecah_tgl=split("-",$dbP->Record['tgl_lahir']);

		$isi=array(array($c1=>'Nama donor',$c2=>$dbP->Record['nama'],$c3=>$dbP->Record['kelamin']),
				   array($c1=>'Alamat rumah',$c2=>$dbP->Record['alamat'],$c3=>'No. '.$dbP->Record['nomor'].' - RT/RW '.$dbP->Record['rtrw']),
				   array($c1=>'Kelurahan',$c2=>$dbP->Record['kelurahan'],$c3=>'Kecamatan '.$dbP->Record['kecamatan']),
				   array($c1=>'Wilayah',$c2=>$dbP->Record['wilayah'],$c3=>'Telepon '.$dbP->Record['telepon']),
				   array($c1=>'Pekerjaan',$c2=>$dbP->Record['pekerjaan'],$c3=>''),
				   array($c1=>'Tanggal lahir',$c2=>"Tgl [ <b>".$pecah_tgl[2]."</b> ] Bln [ <b>".$pecah_tgl[1]."</b> ] Th [ <b>".$pecah_tgl[0]."</b> ]",$c3=>'No. kartu donor '.$dbP->Record['no_donor']));
		$pdf->ezTable($isi,'','',array('showHeadings'=>0,'shaded'=>0,'showLines'=>0,'fontSize'=>9,'width'=>364.25,'xPos'=>'center','cols'=>array($c1=>array('justification'=>'left','width'=>70),$c2=>array('justification'=>'left','width'=>150),$c3=>array('justification'=>'left'))));
		
		$pdf->ezSetDy(-3);
		$pdf->ezText('Penghargaan yang telah diterima <b>'.$dbP->Record['penghargaan'].'x</b>', 9, array('justification'=>'left'));
		$pdf->ezSetDy(-4);
		$pdf->ezText('Bersediakah Saudara donor pada waktu bulan puasa? <b>'.$dbP->Record['donor_puasa'].'</b>', 9, array('justification'=>'left'));

		$isi=array(array($c1=>'Donor terakhir tanggal '.$dbP->Record['donor_terakhir'],$c2=>'',$c3=>'Sekarang donor yang ke <b>'.$dbP->Record['donor_ke'].'</b> kali'));
		$pdf->ezSetDy(-3);
		$pdf->ezTable($isi,'','',array('showHeadings'=>0,'shaded'=>0,'showLines'=>0,'fontSize'=>9,'width'=>364.25,'xPos'=>'center','cols'=>array($c1=>array('justification'=>'left','width'=>150),$c2=>array('justification'=>'left'),$c3=>array('justification'=>'left'))));
		// $pdf->ezSetDy(-2);
		// $pdf->setColor(1,1,1);
		$pdf->ezText('<b>'.$idp.'</b>', 70, array('justification'=>'center'));
		$pdf->ezStream();

?>



<?php

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
	$tgl = $_POST[tgl]; $bln = $_POST[bln];	$th = $_POST[th];
	$tgl_lahir = $th."-".$bln."-".$tgl;
	$no_donor = strtoupper($_POST[no_donor]);
	$penghargaan = strtoupper($_POST[penghargaan]);
	$donor_puasa = strtoupper($_POST[donor_puasa]);
	$donor_terakhir = strtoupper($_POST[donor_terakhir]);
	$donor_ke = strtoupper($_POST[donor_ke]);

	if (!empty($_POST[idp])) {
		$idp=$_POST[idp];
		$sqlUpdatePendonor="UPDATE pendonor SET kelamin = 'LAKI-LAKI', `timestamp` = NOW( ) WHERE `id` = 1 LIMIT 1";
		$sqlAntri="INSERT INTO antrian (id_donor) VALUES ('".$idp."')";
		$dbAntri=new DbTools;
		$dbAntri->DbConnection();
		$dbAntri->queryInsert($sqlAntri);
	};
	
	if (!empty($_POST[idp])) {
	
	$sqlP=""

echo '<script>';
echo 'setTimeout("self.close()",5000) // after 5 seconds';
echo '</script>';
echo '<iframe src="proses_pdf2.php?idp='.$_POST['idp'].'" width="500" height="300" align="center"></iframe>';

?>
<?php
include_once "path_dir.php";

//Convert bulan
function Konversi_Bulan($data_bulan){
$pecah=split("-",$data_bulan);
$month="$pecah[1]";
	if($month=='01'){
		echo "$pecah[0]"."&nbsp;"."Januari"."&nbsp;"."$pecah[2]";
	}
	if($month=='02'){
		echo "$pecah[0]"."&nbsp;"."Februari"."&nbsp;"."$pecah[2]";
	}
	if($month=='03'){
		echo "$pecah[0]"."&nbsp;"."Maret"."&nbsp;"."$pecah[2]";
	}
	if($month=='04'){
		echo "$pecah[0]"."&nbsp;"."April"."&nbsp;"."$pecah[2]";
	}
	if($month=='05'){
		echo "$pecah[2]"."&nbsp;"."Mei"."&nbsp;"."$pecah[0]";
	}
	if($month=='06'){
		echo "Juni";
	}
	if($month=='07'){
		echo "Juli";
	}
	if($month=='08'){
		echo "Agustus";
	}
	if($month=='09'){
		echo "September";
	}
	if($month=='10'){
		echo "Oktober";
	}
	if($month=='11'){
		echo "November";
	}
	if($month=='12'){
		echo "Desember";
	}
}

//Convert bulan 2
function Konversi_Tanggal($data){
$pecah=split("-",$data);
$month="$pecah[1]";
	if($month=='01'){
		return "$pecah[2]"." "."Januari"." "."$pecah[0]";
	}
	if($month=='02'){
		return "$pecah[2]"." "."Februari"." "."$pecah[0]";
	}
	if($month=='03'){
		return "$pecah[2]"." "."Maret"." "."$pecah[0]";
	}
	if($month=='04'){
		return "$pecah[2]"." "."April"." "."$pecah[0]";
	}
	if($month=='05'){
		return "$pecah[2]"." "."Mei"." "."$pecah[0]";
	}
	if($month=='06'){
		return "$pecah[2]"." "."Juni"." "."$pecah[0]";
	}
	if($month=='07'){
		return "$pecah[2]"." "."Juli"." "."$pecah[0]";
	}
	if($month=='08'){
		return "$pecah[2]"." "."Agustus"." "."$pecah[0]";
	}
	if($month=='09'){
		return "$pecah[2]"." "."September"." "."$pecah[0]";
	}
	if($month=='10'){
		return "$pecah[2]"." "."Oktober"." "."$pecah[0]";
	}
	if($month=='11'){
		return "$pecah[2]"." "."November"." "."$pecah[0]";
	}
	if($month=='12'){
		return "$pecah[2]"." "."Desember"." "."$pecah[0]";
	}
}

function Konversi_Tanggal_Waktu($data){
$dataTemp=split(" ",$data);
$pecah=split("-",$dataTemp[0]);
$month="$pecah[1]";
	if($month=='01'){
		return "$pecah[2]"." "."Januari"." "."$pecah[0]";
	}
	if($month=='02'){
		return "$pecah[2]"." "."Februari"." "."$pecah[0]";
	}
	if($month=='03'){
		return "$pecah[2]"." "."Maret"." "."$pecah[0]";
	}
	if($month=='04'){
		return "$pecah[2]"." "."April"." "."$pecah[0]";
	}
	if($month=='05'){
		return "$pecah[2]"." "."Mei"." "."$pecah[0]";
	}
	if($month=='06'){
		return "$pecah[2]"." "."Juni"." "."$pecah[0]";
	}
	if($month=='07'){
		return "$pecah[2]"." "."Juli"." "."$pecah[0]";
	}
	if($month=='08'){
		return "$pecah[2]"." "."Agustus"." "."$pecah[0]";
	}
	if($month=='09'){
		return "$pecah[2]"." "."September"." "."$pecah[0]";
	}
	if($month=='10'){
		return "$pecah[2]"." "."Oktober"." "."$pecah[0]";
	}
	if($month=='11'){
		return "$pecah[2]"." "."November"." "."$pecah[0]";
	}
	if($month=='12'){
		return "$pecah[2]"." "."Desember"." "."$pecah[0]";
	}
}

function Konversi_Waktu($data){
	$dataTemp=split(" ",$data);
	return $dataTemp[1];
}

function Konversi_Tanggal_Waktu_2($data){
$dataTemp=split(" ",$data);
$pecah=split("-",$dataTemp[0]);
$month="$pecah[1]";
	if($month=='01'){
		return "$pecah[2]"." "."Januari"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='02'){
		return "$pecah[2]"." "."Februari"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='03'){
		return "$pecah[2]"." "."Maret"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='04'){
		return "$pecah[2]"." "."April"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='05'){
		return "$pecah[2]"." "."Mei"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='06'){
		return "$pecah[2]"." "."Juni"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='07'){
		return "$pecah[2]"." "."Juli"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='08'){
		return "$pecah[2]"." "."Agustus"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='09'){
		return "$pecah[2]"." "."September"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='10'){
		return "$pecah[2]"." "."Oktober"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='11'){
		return "$pecah[2]"." "."November"." "."$pecah[0] - $dataTemp[1]";
	}
	if($month=='12'){
		return "$pecah[2]"." "."Desember"." "."$pecah[0] - $dataTemp[1]";
	}
}

function Konversi_Tanggal_Waktu_3($data){
$dataTemp=split(" ",$data);
$pecah=split("-",$dataTemp[0]);
$month="$pecah[1]";
	if($month=='01'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='02'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='03'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='04'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='05'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='06'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='07'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='08'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='09'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='10'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='11'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
	if($month=='12'){
		return "$pecah[2]"."/"."$pecah[1]"."/"."$pecah[0] - $dataTemp[1]";
	}
}

function Konversi_Tanggal_Singkat($data){
$pecah=split("-",$data);
$month="$pecah[1]";
	if($month=='01'){
		return "$pecah[2]"." "."Jan"." "."$pecah[0]";
	}
	if($month=='02'){
		return "$pecah[2]"." "."Feb"." "."$pecah[0]";
	}
	if($month=='03'){
		return "$pecah[2]"." "."Mar"." "."$pecah[0]";
	}
	if($month=='04'){
		return "$pecah[2]"." "."Apr"." "."$pecah[0]";
	}
	if($month=='05'){
		return "$pecah[2]"." "."Mei"." "."$pecah[0]";
	}
	if($month=='06'){
		return "$pecah[2]"." "."Jun"." "."$pecah[0]";
	}
	if($month=='07'){
		return "$pecah[2]"." "."Jul"." "."$pecah[0]";
	}
	if($month=='08'){
		return "$pecah[2]"." "."Agt"." "."$pecah[0]";
	}
	if($month=='09'){
		return "$pecah[2]"." "."Sep"." "."$pecah[0]";
	}
	if($month=='10'){
		return "$pecah[2]"." "."Okt"." "."$pecah[0]";
	}
	if($month=='11'){
		return "$pecah[2]"." "."Nov"." "."$pecah[0]";
	}
	if($month=='12'){
		return "$pecah[2]"." "."Des"." "."$pecah[0]";
	}
}

function Konversi_Tanggal_Waktu_Singkat($data){
$dataTemp=split(" ",$data);
$pecah=split("-",$dataTemp[0]);
$month="$pecah[1]";
	if($month=='01'){
		return "$pecah[2]"." "."Jan"." "."$pecah[0]";
	}
	if($month=='02'){
		return "$pecah[2]"." "."Feb"." "."$pecah[0]";
	}
	if($month=='03'){
		return "$pecah[2]"." "."Mar"." "."$pecah[0]";
	}
	if($month=='04'){
		return "$pecah[2]"." "."Apr"." "."$pecah[0]";
	}
	if($month=='05'){
		return "$pecah[2]"." "."Mei"." "."$pecah[0]";
	}
	if($month=='06'){
		return "$pecah[2]"." "."Jun"." "."$pecah[0]";
	}
	if($month=='07'){
		return "$pecah[2]"." "."Jul"." "."$pecah[0]";
	}
	if($month=='08'){
		return "$pecah[2]"." "."Agt"." "."$pecah[0]";
	}
	if($month=='09'){
		return "$pecah[2]"." "."Sep"." "."$pecah[0]";
	}
	if($month=='10'){
		return "$pecah[2]"." "."Okt"." "."$pecah[0]";
	}
	if($month=='11'){
		return "$pecah[2]"." "."Nov"." "."$pecah[0]";
	}
	if($month=='12'){
		return "$pecah[2]"." "."Des"." "."$pecah[0]";
	}
}

function Konversi_Bulan_Ke_Angka($data_bulan){

$month="$data_bulan";
	if($month=='Januari'){
		return "01";
	}
	if($month=='Februari'){
		return "02";
	}
	if($month=='Maret'){
		return "03";
	}
	if($month=='April'){
		return "04";
	}
	if($month=='Mei'){
		return "05";
	}
	if($month=='Juni'){
		return "06";
	}
	if($month=='Juli'){
		return "07";
	}
	if($month=='Agustus'){
		return "08";
	}
	if($month=='September'){
		return "09";
	}
	if($month=='Oktober'){
		return "10";
	}
	if($month=='November'){
		return "11";
	}
	if($month=='Desember'){
		return "12";
	}
}

function Konversi_Bulan_Ke_Nama($data_bulan){

$month="$data_bulan";
	if($month=='01'){
		return "Januari";
	}
	if($month=='02'){
		return "Februari";
	}
	if($month=='03'){
		return "Maret";
	}
	if($month=='04'){
		return "April";
	}
	if($month=='05'){
		return "Mei";
	}
	if($month=='06'){
		return "Juni";
	}
	if($month=='07'){
		return "Juli";
	}
	if($month=='08'){
		return "Agustus";
	}
	if($month=='09'){
		return "September";
	}
	if($month=='10'){
		return "Oktober";
	}
	if($month=='11'){
		return "November";
	}
	if($month=='12'){
		return "Desember";
	}
}

//Konversi hari
function Konversi_Hari_Tanggal($tgl) {
$pecah=split(",",$tgl);
$hari = $pecah[0];
$tanggal = Konversi_Tanggal($pecah[1]);
	if ($hari=="Monday") {
	    return "Senin, ".$tanggal;
	}
	else if ($hari=="Tuesday") {
	    return "Selasa, ".$tanggal;
	}
	else if ($hari=="Wednesday") {
	    return "Rabu, ".$tanggal;
	}
	else if ($hari=="Thursday") {
	    return "Kamis, ".$tanggal;
	}
	else if ($hari=="Friday") {
	    return "Jumat, ".$tanggal;
	}
	else if ($hari=="Saturday") {
	    return "Sabtu, ".$tanggal;
	}
	else if ($hari=="Sunday") {
	    return "Minggu, ".$tanggal;
	}
	else {
		die("Ada kesalahan hari");
	}
}

//Convert to Currency
function Currency($total){
	$split=explode(".",$total);
	$data="$split[0]";
	if(empty($split[1])){
		$data1="00";
	}else{
		$data1="$split[1]";
	}
	$pecah=strlen($data);
	$array=substr("$data",Hasil);
	if($pecah=='0'){
	echo "0".",$data1";
	}
	if($pecah=='1'){
	echo "$array[0]".",$data1";
	}
	if($pecah=='2'){
	echo "$array[0]$array[1]".",$data1";
	}
	if($pecah=='3'){
	echo "$array[0]$array[1]$array[2]".",$data1";
	}
	if($pecah=='4'){
	echo "$array[0].$array[1]$array[2]$array[3]".",$data1";
	}
	if($pecah=='5'){
	echo "$array[0]$array[1].$array[2]$array[3]$array[4]".",$data1";
	}
	if($pecah=='6'){
	echo "$array[0]$array[1]$array[2].$array[3]$array[4]$array[5]".",$data1";
	}
	if($pecah=='7'){
	echo "$array[0].$array[1]$array[2]$array[3].$array[4]$array[5]$array[6]".",$data1";
	}
	if($pecah=='8'){
	echo "$array[0]$array[1].$array[2]$array[3]$array[4].$array[5]$array[6]$array[7]".",$data1";
	}
	if($pecah=='9'){
	echo "$array[0]$array[1]$array[2].$array[3]$array[4]$array[5].$array[6]$array[7]$array[8]".",$data1";
	}
	if($pecah=='10'){
	echo "$array[0].$array[1]$array[2]$array[3].$array[4]$array[5]$array[6].$array[7]$array[8]$array[9]".",$data1";
	}
	if($pecah=='11'){
	echo "$array[0]$array[1].$array[2]$array[3]$array[4].$array[5]$array[6]$array[7].$array[8]$array[9]$array[10]".",$data1";
	}
	if($pecah=='12'){
	echo "$array[0]$array[1]$array[2].$array[3]$array[4]$array[5].$array[6]$array[7]$array[8].$array[9]$array[10]$array[11]".",$data1";
	}
}

// Beri angka 0 di depan angka integer cont: 23 -> 00023
function beri_nol_depan($angka,$digit){
	$panjang_angka = strlen($angka);
	if ($panjang_angka > $digit) {
	    echo "Angka lebih besar dari batasan jumlah digit";
		exit();
	}else{
		$jml_nol = $digit - $panjang_angka;
	}
	$larik = "";
	for ($i=0;$i<$jml_nol;$i++){
		$larik = $larik."0";
	}
	$larik = $larik.$angka;
	return $larik;
}

function select_tanggal($nama,$data) {
	echo '<select name="'.$nama.'"><option></option>';
	for ($i=1;$i<32;$i++) {
		if ($i<10) {
		    $j = "0".$i;
		}else {$j=$i;}
		if ($j==$data) {
		    $selected = "selected";
		}else {$selected = "";}
		echo '<option value="'.$j.'" '.$selected.'>'.$j.'</option>';
	}
	echo '</select>';
}

function select_bulan($nama,$data) {
	echo '<select name="'.$nama.'"><option></option>';
	for ($i=1;$i<13;$i++) {
		if ($i<10) {
		    $j = "0".$i;
		}else {$j=$i;}
		$t = Konversi_Bulan_Ke_Nama($j);
		if ($j==$data) {
		    $selected = "selected";
		}else {$selected = "";}
		echo '<option value="'.$j.'" '.$selected.'>'.$t.'</option>';
	}
	echo '</select>';
}

function select_tahun($awal,$panjang,$nama,$data) {
	echo '<select name="'.$nama.'"><option></option>';
	for ($i=0;$i<$panjang;$i++) {
		if ($awal==$data) {
		    $selected = "selected";
		}else {$selected = "";}
		echo '<option value="'.$awal.'" '.$selected.'>'.$awal.'</option>';
		$awal++;
	}
	echo '</select>';

}

function detikkejam($detik) {
	$jam = $detik / 3600;$jam=(int)$jam;
	$detik = $detik % 3600;
	$menit= $detik / 60;$menit=(int)$menit;
	$detik = $detik % 60;
	if ($jam < 10) {
	    $jam = "0".$jam;
	}
	if ($menit < 10) {
	    $menit = "0".$menit;
	}
	if ($detik < 10) {
	    $detik = "0".$detik;
	}
	$str = $jam.":".$menit.":".$detik;
	return $str;
}

function rupiah($uang) {
	$uang = "Rp. ".number_format($uang, '', '', '.');
	return $uang;
}

function uang($uang) {
	$uang = number_format($uang, '', '', '.');
	return $uang;
}

function waktu() {

return '<font size="1" face="verdana" color="red">
<script language="javascript">
  var ap;
  var mydate=new Date()
  var year=mydate.getYear()
  if (year < 1000)
  year+=1900
  var day=mydate.getDay()
  var month=mydate.getMonth()
  var daym=mydate.getDate()

  var hrs = mydate.getHours()
	  switch(hrs){
	   case 0:
		   ap = "A.M.";
		   break;
	   case 12:
		   ap = "P.M.";
		   break;
	   case 24:
		   ap = "A.M.";
		   break;
	   default:
		   if (hrs > 12)
		   {
			 ap = "P.M.";
			 break;
		   }
		   if(hrs < 12)
		   {
			 ap = "A.M.";
			 break;
		   }
		}
	  var hrs1= mydate.getHours()
		  hrs=""+((hrs>12)?hrs-12:hrs);
	  var mins = mydate.getMinutes()
		  mins=((mins<10)?"0":"")+mins;
	  var secs = mydate.getSeconds()
		 secs=((secs<10)?"0":"")+secs;
	  if (daym<10)
	  daym="0"+daym
	  var dayarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu")
	  var montharray=new  Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember")
		  document.write(dayarray[day]+", "+daym+" "+montharray[month]+" "+year)
	</script>
	<script language="Javascript1.2">
	<!--
	// please keep these lines on when you copy the source
	// made by: Nicolas - http://www.javascript-page.com

	if(navigator.appName == "Netscape") {
	   document.write(\'<layer id="clock"></layer><br>\');
	}

	if (navigator.appVersion.indexOf("MSIE") != -1){
//	   document.write(\'<span id="clock"></span><br>\');
	}

	function upclock(){
	var dte = new Date();
	var hrs = dte.getHours();
	var min = dte.getMinutes();
	var sec = dte.getSeconds();
	var col = ":";
	var spc = " ";
	var apm;

	if (12 < hrs) {
	apm="PM";
	hrs-=12;
	}else {
	apm="AM";
	}

	if (hrs == 0) hrs=12;
	if (min <=9) min="0"+min;
	if (sec <=9) sec="0"+sec;

	if(navigator.appCodeName == "Netscape") {
//	document.clock.document.write(hrs+col+min+col+sec);
//	document.clock.document.close();
	}

	if (navigator.appVersion.indexOf("MSIE") != -1){
		clock.innerHTML = ", " +hrs+col+min+col+sec;
	}
	}

	setInterval("upclock()",1000);
	//-->
</script>
</font>';

}

function kepala(){
global $theme_dir;
	return '
		<table id="kepala" width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td width="429" >
					<img src="'.$theme_dir.'images/INDEX_01.gif"></TD>
				<td width="84">
					<img src="'.$theme_dir.'images/INDEX_02.gif"></TD>
				<td width="287">
					<img src="'.$theme_dir.'images/INDEX_03.gif"></TD>
			</tr>
			<tr>
				<td colspan="3" align="center"><span id="tab">Last Update : 18 Maret 2007</span></td>
			</tr>
		</table>
	';
}

function kaki(){
global $theme_dir;

	return '
		<table id="kaki" width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<img src="'.$theme_dir.'images/INDEX_06.gif" width=140 height=88></TD>
				<td>
					<img src="'.$theme_dir.'images/INDEX_07.gif" width=117 height=88></TD>
				<td>
					<img src="'.$theme_dir.'images/INDEX_08.gif" width=68 height=88></TD>
				<td>
					<img src="'.$theme_dir.'images/INDEX_09.gif" width=475 height=88></TD>
			</tr>
		</table>
	';
}

function nama($tabel, $asal, $tujuan, $str) {
	$dbNama = new DbTools;
	$dbNama->DbConnection();
	$sqlNama="SELECT $tujuan FROM $tabel WHERE $asal = '$str'";
	$dbNama->query($sqlNama);
	if ($dbNama->RecordNum<1) {
	    return "BLM ADA";
	}else {
		$dbNama->fetchRecordArray();
		return $dbNama->Record[$nama];
	}
}

function bersihkan_input($text)
{
	//$text = addslashes($text);
	$text = trim($text);
	$text = strip_tags($text);
	$text = stripslashes($text);

	$to_be_replace = array(";", '!', '#', '`', ',');
	$text = str_replace($to_be_replace, '', $text);

	return $text;
}
function customize($text2) {
	$text2 = bersihkan_input($text2);
	$text2 = strtoupper($text2);
	return $text2;
}

function tanggal_database($tgl_db) {
	$pecah=split("/",$tgl_db);
	$tgl_ret="$pecah[2]-$pecah[1]-$pecah[0]";
	return $tgl_ret;
}
?>
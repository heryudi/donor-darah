<?php 

$nama = $_POST[nama];
$kelamin = $_POST[kelamin];
$alamat = $_POST[alamat];
$nomor = $_POST[nomor];
$rtrw = $_POST[rtrw];
$kelurahan = $_POST[kelurahan];
$kecamatan = $_POST[kecamatan];
$wilayah = $_POST[wilayah];
$telepon = $_POST[telepon];
$pekerjaan = $_POST[pekerjaan];
$tgl_lahir = $_POST[tgl_lahir];
$no_donor = $_POST[no_donor];
$penghargaan = $_POST[penghargaan];
$donor_puasa = $_POST[donor_puasa];
$donor_terakhir = $_POST[donor_terakhir];
$donor_ke = $_POST[donor_ke];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pendaftaran PMI</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style></head>
<body>
<table width="760" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><strong>Palang Merah Indonesia</strong></td>
  </tr>
  <tr>
    <td height="486"><p>Pendaftaran Donor PMI</p>
      <p>Berikut data yang Anda berikan, silahkan periksa ulang. Apabila sudah benar, silahkan tekan tombol Lanjut untuk mencetak nomor antrian Anda.</p>
      <form id="biodata" name="biodata" method="post" action="proses.php">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFCCCC">
        <tr>
          <td width="155" valign="middle"><div align="right">Nama</div></td>
          <td width="204" valign="middle"><strong><?php echo $nama; ?></strong></td>
          <td width="111" valign="middle"><div align="right">Kelamin</div></td>
          <td width="230" colspan="2" valign="middle"><strong><?php echo $kelamin; ?></strong></td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Alamat</div></td>
          <td valign="middle"><strong><?php echo $alamat; ?></strong></td>
          <td width="111" valign="middle"><div align="right">No.</div></td>
          <td colspan="2" valign="middle"><strong><?php echo $nomor; ?></strong> RT/RW <strong><?php echo $rtrw; ?></strong></td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Kelurahan</div></td>
          <td valign="middle"><strong><?php echo $kelurahan; ?></strong></td>
          <td width="111" valign="middle"><div align="right">Kecamatan</div></td>
          <td colspan="2" valign="middle"><strong><?php echo $kecamatan; ?></strong></td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Wilayah</div></td>
          <td valign="middle"><strong><?php echo $wilayah; ?></strong></td>
          <td width="111" valign="middle"><div align="right">Telepon</div></td>
          <td colspan="2" valign="middle"><strong><?php echo $telepon; ?></strong></td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Pekerjaan</div></td>
          <td colspan="4" valign="middle"><strong><?php echo $pekerjaan; ?></strong></td>
        </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Tanggal lahir</div></td>
          <td valign="middle"><strong><?php echo $tgl_lahir; ?></strong></td>
          <td width="111" valign="middle"><div align="right">No. kartu donor</div></td>
          <td colspan="2" valign="middle"><strong><?php echo $no_donor; ?></strong></td>
          </tr>
        <tr>
          <td colspan="5" valign="middle">Penghargaan yang telah diterima <strong><?php echo $penghargaan; ?></strong></td>
          </tr>
        <tr>
          <td colspan="5" valign="middle">Bersediakah Saudara donor pada waktu bulan puasa? <strong><?php echo $donor_puasa; ?></strong></td>
          </tr>
        <tr>
          <td width="155" valign="middle">Donor terakhir tanggal</td>
          <td valign="middle"><strong><?php echo $donor_terakhir; ?></strong></td>
          <td colspan="3" valign="middle">Saat ini donor yang ke <strong><?php echo $donor_ke; ?></strong></td>
          </tr>
      </table>
      <p align="center">
        <input name="submit" type="submit" id="submit" />
      </p>
      </form>
    </td>
  </tr>
  <tr>
    <td>Hangtuah 2007. Hak cipta dilindungi hati nurani.</td>
  </tr>
</table>
</body>
</html>

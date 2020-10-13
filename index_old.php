<?php 

include "system/dbTools.php";
include "system/function.php";
include "pdf/class.ezpdf.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="JavaScript" src="gen_validatorv2.js" type="text/javascript"></script>
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

	if (isset($_POST['action']) && $_POST['action'] == 'isidata') {

	$dbP=new DbTools;
	$dbP->DbConnection();
	$sqlP="INSERT INTO pendonor (nama, kelamin, alamat, nomor, rtrw, kelurahan, kecamatan, wilayah, telepon, pekerjaan, tgl_lahir, no_donor, penghargaan, donor_puasa, donor_terakhir, donor_ke) VALUES ('".$nama."', '".$kelamin."', '".$alamat."', '".$nomor."', '".$rtrw."', '".$kelurahan."', '".$kecamatan."', '".$wilayah."', '".$telepon."', '".$pekerjaan."', '".$tgl_lahir."', '".$no_donor."', '".$penghargaan."', '".$donor_puasa."', '".$donor_terakhir."', '".$donor_ke."')";
	$dbP->queryInsert($sqlP);

	$sqlPid="SELECT id FROM pendonor WHERE nama = '".$nama."' AND tgl_lahir = '".$tgl_lahir."' AND alamat = '".$alamat."' AND telepon = '".$telepon."' ORDER BY id DESC";
	$dbPid=new DbTools;
	$dbPid->DbConnection();
	$dbPid->query($sqlPid);
	$dbPid->fetchRecordArray();

	echo '<script>window.open(\'simpan.php?id='.$dbPid->Record['id'].'\',\'cetakPemakaian\',\'width=640,height=480,scrollbars\');</script>';
	}
?>

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
</style></head>
<body>
      <p>Selamat datang. Mohon data berikut diisi dengan lengkap dan jelas, pemberian kabar dari PMI akan dikirimkan ke alamat yang Anda berikan. Terima kasih atas kesediaannya meluangkan waktu untuk menyumbangkan darah.</p>
      <form id="biodata" name="biodata" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFCCCC">
        <tr>
          <td width="155" valign="middle"><div align="right">Nama</div></td>
          <td width="234" valign="middle"><input name="nama" type="text" id="nama" size="30" maxlength="50" /></td>
          <td width="107" valign="middle"><div align="right">Kelamin</div></td>
          <td width="204" colspan="2" valign="middle"><input type="radio" name="kelamin" id="laki-laki" value="laki-laki" />
            Laki-laki 
              <input type="radio" name="kelamin" id="perempuan" value="perempuan" />
            Perempuan</td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Alamat</div></td>
          <td valign="middle"><input name="alamat" type="text" id="alamat" size="30" maxlength="50" /></td>
          <td width="107" valign="middle"><div align="right">No.</div></td>
          <td colspan="2" valign="middle"><input name="nomor" type="text" id="nomor" size="5" maxlength="5" /> 
            RT/RW 
              <input name="rtrw" type="text" id="rtrw" size="10" maxlength="10" /></td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Kelurahan</div></td>
          <td valign="middle"><input name="kelurahan" type="text" id="kelurahan" size="20" maxlength="20" /></td>
          <td width="107" valign="middle"><div align="right">Kecamatan</div></td>
          <td colspan="2" valign="middle"><input name="kecamatan" type="text" id="kecamatan" size="20" maxlength="20" /></td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Wilayah</div></td>
          <td valign="middle"><input name="wilayah" type="text" id="wilayah" size="20" maxlength="20" /></td>
          <td width="107" valign="middle"><div align="right">Telepon</div></td>
          <td colspan="2" valign="middle"><input name="telepon" type="text" id="telepon" size="20" maxlength="20" /></td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Pekerjaan</div></td>
          <td colspan="4" valign="middle"><table width="500" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td><input name="pekerjaan" type="radio" id="pekerjaan" value="tni/polri" />
TNI/POLRI</td>
              <td><input name="pekerjaan" type="radio" id="pekerjaan" value="pegawai negeri/swasta" />
Pegawai Negeri/Swasta</td>
              <td><input name="pekerjaan" type="radio" id="pekerjaan" value="mahasiswa/pelajar" />
Mahasiswa/Pelajar</td>
            </tr>
            <tr>
              <td><input name="pekerjaan" type="radio" id="pekerjaan" value="petani/buruh" />
Petani/Buruh</td>
              <td><input name="pekerjaan" type="radio" id="pekerjaan" value="wiraswasta" />
Wiraswasta</td>
              <td><input name="pekerjaan" type="radio" id="pekerjaan" value="lain-lain" />
Lain-lain</td>
            </tr>
          </table>            </td>
          </tr>
        <tr>
          <td width="155" valign="middle"><div align="right">Tanggal lahir</div></td>
          <td valign="middle">Tgl 
            <select name="tgl" id="tgl">
              <option value=""></option>
              <?php for ($i=1; $i<=31; $i++) {
			  		echo "<option value=\"".$i."\">".$i."</option>";
					};
				?>
            </select>
            Bln 
            <select name="bln" id="bln">
              <option value=""></option>
              <?php for ($i=1; $i<=12; $i++) {
			  		echo "<option value=\"".$i."\">".$i."</option>";
					};
				?>
            </select>
            Th 
            <select name="th" id="th">
              <option value=""></option>
              <?php for ($i=1947; $i<=1990; $i++) {
			  		echo "<option value=\"".$i."\">".$i."</option>";
					};
				?>
            </select>
            </td>
          <td width="107" valign="middle"><div align="right">No. kartu donor</div></td>
          <td colspan="2" valign="middle"><input name="no_donor" type="text" id="no_donor" size="10" maxlength="10" /></td>
          </tr>
        <tr>
          <td colspan="5" valign="middle">Penghargaan yang telah diterima
            <input name="penghargaan" type="radio" id="penghargaan" value="10" />
            10x 
              <input name="penghargaan" type="radio" id="penghargaan" value="25" />
              25x
              <input name="penghargaan" type="radio" id="penghargaan" value="50" />
              50x
              <input name="penghargaan" type="radio" id="penghargaan" value="75" />
              75x
              <input name="penghargaan" type="radio" id="penghargaan" value="100" />
            100x</td>
          </tr>
        <tr>
          <td colspan="5" valign="middle">Bersediakah Saudara donor pada waktu bulan puasa? <input type="radio" name="donor_puasa" id="ya" value="ya" />Ya <input type="radio" name="donor_puasa" id="tidak" value="tidak" />Tidak</td>
          </tr>
        <tr>
          <td width="155" valign="middle">Donor terakhir tanggal</td>
          <td valign="middle"><input name="donor_terakhir" type="text" id="donor_terakhir" size="20" maxlength="10" /></td>
          <td colspan="3" valign="middle">Saat ini donor yang ke 
            <input name="donor_ke" type="text" id="donor_ke" size="3" maxlength="5" /></td>
          </tr>
      </table>
      <p align="center">
      	<input type="hidden" name="action" value="isidata" />
        <input name="submit" type="submit" id="submit" />
      </p>
      </form>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("biodata");
 frmvalidator.addValidation("nama","req","Mohon masukkan nama Anda");
 frmvalidator.addValidation("kelamin","req","Mohon pilih jenis kelamin Anda");
 frmvalidator.addValidation("alamat","req","Mohon masukkan alamat jelas Anda");
 frmvalidator.addValidation("nomor","req","Mohon masukkan alamat (nomor) jelas Anda");
 frmvalidator.addValidation("telepon","req","Mohon masukkan telepon Anda");
 frmvalidator.addValidation("tgl","dontselect=0","Mohon masukkan tanggal lahir Anda");
 frmvalidator.addValidation("bln","dontselect=0","Mohon masukkan bulan lahir Anda");
 frmvalidator.addValidation("th","dontselect=0","Mohon masukkan tahun lahir Anda");
</script>
</body>
</html>

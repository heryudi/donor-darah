<?php 
	if (empty($_POST[pilih]) AND empty($_POST[daftar])) {
		header("Location: index.php");
		exit();
	}

	include "system/dbTools.php";
	include "system/function.php";
	if (!empty($_POST[id]) AND !empty($_POST[pilih])) {
		$id=$_POST[id];
		$sqlPid="SELECT nama, kelamin, alamat, nomor, rtrw, kelurahan, kecamatan, wilayah, telepon, pekerjaan, tgl_lahir, no_donor, penghargaan, donor_puasa, donor_terakhir, donor_ke FROM pendonor WHERE id = ".$id;
		$dbPid=new DbTools;
		$dbPid->DbConnection();
		$dbPid->query($sqlPid);
		$dbPid->fetchRecordArray();
	};
	
	$donor_bengkel_terakhir="18/06/2007";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="JavaScript" src="gen_validatorv2.js" type="text/javascript"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donor Darah | Biodata</title>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php // print_r($_POST); ?>
<form id="biodata" name="biodata" method="post" action="proses_pdf2.php">
  <table width="100%" border="0" cellspacing="10" cellpadding="5">
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                  <td width="50%"><font size="5"><strong>Donor Darah</strong></font></td>
                <td width="50%"><div align="right"><font size="5">bengkel <em><strong>Hangtuah</strong></em></font></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#FFCC99"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td bgcolor="#FFFFFF"><div align="center"><font size="6"><strong>Biodata</strong></font></div></td>
                </tr>
              </table>
                <table width="100%" border="0" cellpadding="5" cellspacing="0">
                  <tr>
                    <td width="155" valign="middle"><div align="right">Nama</div></td>
                    <td width="234" valign="middle"><input name="nama" type="text" id="nama" value="<?php echo $dbPid->Record['nama']; ?>" size="30" maxlength="50" /></td>
                    <td width="107" valign="middle"><div align="right">Kelamin</div></td>
                    <td width="204" colspan="2" valign="middle"><input type="radio" name="kelamin" id="laki-laki" value="laki-laki" <?php if ($dbPid->Record['kelamin']=='LAKI-LAKI') { echo 'checked="checked"'; }; ?>/>
                      Laki-laki
                      <input type="radio" name="kelamin" id="perempuan" value="perempuan" <?php if ($dbPid->Record['kelamin']=='PEREMPUAN') { echo 'checked="checked"'; }; ?>/>
                      Perempuan</td>
                  </tr>
                  <tr>
                    <td width="155" valign="middle"><div align="right">Alamat</div></td>
                    <td valign="middle"><input name="alamat" type="text" value="<?php echo $dbPid->Record['alamat']; ?>" id="alamat" size="30" maxlength="50" /></td>
                    <td width="107" valign="middle"><div align="right">No.</div></td>
                    <td colspan="2" valign="middle"><input name="nomor" type="text" value="<?php echo $dbPid->Record['nomor']; ?>" id="nomor" size="5" maxlength="5" />
                      RT/RW
                      <input name="rtrw" type="text" value="<?php echo $dbPid->Record['rtrw']; ?>" id="rtrw" size="10" maxlength="10" /></td>
                  </tr>
                  <tr>
                    <td width="155" valign="middle"><div align="right">Kelurahan</div></td>
                    <td valign="middle"><input name="kelurahan" type="text" value="<?php echo $dbPid->Record['kelurahan']; ?>" id="kelurahan" size="20" maxlength="20" /></td>
                    <td width="107" valign="middle"><div align="right">Kecamatan</div></td>
                    <td colspan="2" valign="middle"><input name="kecamatan" type="text" value="<?php echo $dbPid->Record['kecamatan']; ?>" id="kecamatan" size="20" maxlength="20" /></td>
                  </tr>
                  <tr>
                    <td width="155" valign="middle"><div align="right">Wilayah</div></td>
                    <td valign="middle"><input name="wilayah" type="text" value="<?php echo $dbPid->Record['wilayah']; ?>" id="wilayah" size="20" maxlength="20" /></td>
                    <td width="107" valign="middle"><div align="right">Telepon</div></td>
                    <td colspan="2" valign="middle"><input name="telepon" type="text" value="<?php echo $dbPid->Record['telepon']; ?>" id="telepon" size="20" maxlength="20" /></td>
                  </tr>
                  <tr>
                    <td width="155" valign="middle"><div align="right">Pekerjaan</div></td>
                    <td colspan="4" valign="middle"><table width="500" border="0" cellspacing="0" cellpadding="1">
                        <tr>
                          <td><input name="pekerjaan" type="radio" id="pekerjaan" value="tni/polri" <?php if ($dbPid->Record['pekerjaan']=='TNI/POLRI') { echo 'checked="checked"'; }; ?>/>
                            TNI/POLRI</td>
                          <td><input name="pekerjaan" type="radio" id="pekerjaan" value="pegawai negeri/swasta" <?php if ($dbPid->Record['pekerjaan']=='PEGAWAI NEGERI/SWASTA') { echo 'checked="checked"'; }; ?>/>
                            Pegawai Negeri/Swasta</td>
                          <td><input name="pekerjaan" type="radio" id="pekerjaan" value="mahasiswa/pelajar" <?php if ($dbPid->Record['pekerjaan']=='MAHASISWA/PELAJAR') { echo 'checked="checked"'; }; ?>/>
                            Mahasiswa/Pelajar</td>
                        </tr>
                        <tr>
                          <td><input name="pekerjaan" type="radio" id="pekerjaan" value="petani/buruh" <?php if ($dbPid->Record['pekerjaan']=='PETANI/BURUH') { echo 'checked="checked"'; }; ?>/>
                            Petani/Buruh</td>
                          <td><input name="pekerjaan" type="radio" id="pekerjaan" value="wiraswasta" <?php if ($dbPid->Record['pekerjaan']=='WIRASWASTA') { echo 'checked="checked"'; }; ?>/>
                            Wiraswasta</td>
                          <td><input name="pekerjaan" type="radio" id="pekerjaan" value="lain-lain" <?php if ($dbPid->Record['pekerjaan']=='LAIN-LAIN') { echo 'checked="checked"'; }; ?>/>
                            Lain-lain</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="155" valign="middle"><div align="right">Tanggal lahir</div></td>
                    <td valign="middle">Tgl [ <strong><?php echo $_POST[tgl]; ?></strong> ] Bln [ <strong><?php echo $_POST[bln]; ?></strong> ] Th [ <strong><?php echo $_POST[thn]; ?></strong> ]</td>
                    <td width="107" valign="middle"><div align="right">No. kartu donor</div></td>
                    <td colspan="2" valign="middle"><input name="no_donor" type="text" value="<?php echo $dbPid->Record['no_donor']; ?>" id="no_donor" size="10" maxlength="10" /></td>
                  </tr>
                  <tr>
                    <td colspan="5" valign="middle">Penghargaan yang telah diterima
                      <input name="penghargaan" type="radio" id="penghargaan" value="10" <?php if ($dbPid->Record['penghargaan']=='10') { echo 'checked="checked"'; }; ?>/>
                      10x
                      <input name="penghargaan" type="radio" id="penghargaan" value="25" <?php if ($dbPid->Record['penghargaan']=='25') { echo 'checked="checked"'; }; ?>/>
                      25x
                      <input name="penghargaan" type="radio" id="penghargaan" value="50" <?php if ($dbPid->Record['penghargaan']=='50') { echo 'checked="checked"'; }; ?>/>
                      50x
                      <input name="penghargaan" type="radio" id="penghargaan" value="75" <?php if ($dbPid->Record['penghargaan']=='75') { echo 'checked="checked"'; }; ?>/>
                      75x
                      <input name="penghargaan" type="radio" id="penghargaan" value="100" <?php if ($dbPid->Record['penghargaan']=='100') { echo 'checked="checked"'; }; ?>/>
                      100x</td>
                  </tr>
                  <tr>
                    <td colspan="5" valign="middle">Bersediakah Saudara donor pada waktu bulan puasa?
                      <input type="radio" name="donor_puasa" id="ya" value="ya" <?php if ($dbPid->Record['donor_puasa']=='YA') { echo 'checked="checked"'; }; ?>/>
                      Ya
                      <input type="radio" name="donor_puasa" id="tidak" value="tidak" <?php if ($dbPid->Record['donor_puasa']=='TIDAK') { echo 'checked="checked"'; }; ?>/>
                      Tidak</td>
                  </tr>
                  <tr>
                    <td width="155" valign="middle">Donor terakhir tanggal</td>
                    <td valign="middle"><input name="donor_terakhir" type="text" id="donor_terakhir" value="<?php if (!empty($dbPid->Record['nama'])) { echo $donor_bengkel_terakhir; }; ?>" size="20" maxlength="10" /></td>
                    <td colspan="3" valign="middle">Saat ini donor yang ke
                      <input name="donor_ke" type="text" id="donor_ke" value="<?php if (!empty($dbPid->Record['donor_ke'])) { echo $dbPid->Record['donor_ke']+1; }; ?>" size="3" maxlength="5" /></td>
                  </tr>
                </table><p align="center"><input name="idp" type="hidden" value="<?php if (!empty($_POST[id])) { echo $id; }; ?>" /><input name="cetak" type="submit" id="submit" value="Cetak Nomor Antrian" /></p>
            </td>
          </tr>
          <tr>
            <td><font size="2"><strong>Sistem Informasi Bengkel Hangtuah</strong><br />
              Hak cipta dilindungi hati nurani 2007</font></td>
          </tr>
        </table>
        </form>
  <p>&nbsp;</p>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("biodata");
 frmvalidator.addValidation("nama","req","Mohon masukkan nama Anda");
 frmvalidator.addValidation("kelamin","req","Mohon pilih jenis kelamin Anda");
 frmvalidator.addValidation("alamat","req","Mohon masukkan alamat jelas Anda");
 frmvalidator.addValidation("nomor","req","Mohon masukkan alamat (nomor) jelas Anda");
 frmvalidator.addValidation("telepon","req","Mohon masukkan telepon Anda");
 frmvalidator.addValidation("donor_ke","num","Mohon masukkan dalam bentuk angka");
</script>
</body>
</html>

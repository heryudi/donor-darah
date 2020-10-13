<?php
	include "system/dbTools.php";
	include "system/function.php";
	
	require_once("xajax/xajax.inc.php");
	
	$xajax = new xajax();
	$xajax->registerFunction("updateNama");
	function updateNama($tgl,$bln,$thn)
	{
	    // do some stuff based on $arg like query data from a database and
	    // put it into a variable like $newContent

	    // Instantiate the xajaxResponse object
	    $objResponse = new xajaxResponse();
	    
	    // add a command to the response to assign the innerHTML attribute of
	    // the element with id="SomeElementId" to whatever the new content is
		$objResponse->addClear('id','innerHTML');
		$objResponse->addClear('kosong', 'innerHTML');
		$dbP=new DbTools;
		$dbP->DbConnection();
		$sqlP="SELECT id, nama, alamat FROM pendonor WHERE tgl_lahir = '".$thn."-".$bln."-".$tgl."'";
		$dbP->query($sqlP);
		if ($dbP->RecordNum>0) {
			$objResponse->addClear("id", "disabled");
			$objResponse->addClear("pilih", "disabled");
			while ($dbP->fetchRecordArray()) {
				$optionId = "id_".mt_rand();
				$objResponse->addCreate("id", "option", $optionId);
				$objResponse->addAssign($optionId,"value", $dbP->Record['id']);
	    		$objResponse->addAssign($optionId,"text", $dbP->Record['nama']." (".$dbP->Record['alamat'].")");
		    };
		} else {
			$objResponse->addAssign("id", "disabled", "disabled");
			$objResponse->addAssign("pilih", "disabled", "disabled");
			$objResponse->addCreate("id", "option", "null");
			$objResponse->addAssign("null","value", "");
	    	$objResponse->addAssign("kosong", "innerHTML", "Maaf, data tanggal lahir tidak ditemukan. Silahkan mendaftar baru.");
		};
	    //return the xajaxResponse object
		return $objResponse;

	};
	
	$xajax->processRequests();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="JavaScript" src="gen_validatorv2.js" type="text/javascript"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

	$xajax->printJavascript('xajax');
	
?>
<title>Donor Darah</title>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form id="pmi" name="pmi" method="post" action="update_data.php">
  <table width="100%" border="0" cellspacing="10" cellpadding="5">
    <tr>
      <td colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="50%"><font size="5"><strong>Donor Darah</strong></font></td>
            <td width="50%"><div align="right"><font size="5">bengkel <em><strong>Hangtuah</strong></em></font></div></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="50%" valign="top" bgcolor="#FFCC99"><table width="100%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td bgcolor="#FFFFFF"><div align="center"><font size="6"><strong>1</strong></font></div></td>
          </tr>
        </table>
        <p align="center">Masukkan tanggal lahir Anda:</p>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="33%" valign="top"><p align="center"><strong><font size="5">Tanggal</font></strong></p>
              <p align="center">
                <select name="tgl" class="select" id="tgl">
                  <option value=""></option>
                  <?php for ($i=1; $i<=31; $i++) {
			  		echo "<option value=\"".$i."\">".$i."</option>";
					};
				?>
                </select>
              </p></td>
            <td width="33%" valign="top"><p align="center"><strong><font size="5">Bulan</font></strong></p>
              <p align="center">
                <select name="bln" class="select" id="bln">
                  <option value=""></option>
                  <?php for ($i=1; $i<=12; $i++) {
			  		echo "<option value=\"".$i."\">".$i."</option>";
					};
				?>
                </select>
              </p></td>
            <td width="33%" valign="top"><p align="center"><font size="5"><strong>Tahun</strong></font></p>
              <p align="center">
                <select name="thn" class="select" id="thn">
                  <option value=""></option>
                  <?php for ($i=1942; $i<=1990; $i++) {
			  		echo "<option value=\"".$i."\">".$i."</option>";
					};
				?>
                </select>
              </p></td>
          </tr>
        </table>
        <p align="center">Lalu tekan tombol berikut</p>
        <p align="center">
          <input name="kirim" type="button" id="kirim" value="Kirim" onclick="xajax_updateNama(document.getElementById('tgl').value,document.getElementById('bln').value,document.getElementById('thn').value);return false;" />
        </p></td>
      <td width="50%" valign="top" bgcolor="#FFCC99"><table width="100%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td bgcolor="#FFFFFF"><div align="center"><strong><font size="6">2</font></strong></div></td>
          </tr>
        </table>
        <p align="center">Pilih nama Anda:</p>
        <div align="center">
            <select name="id" size="5" class="list" id="id" disabled="disabled">
            </select>
          <p>
            <input name="pilih" type="submit" id="pilih" value="Pilih" disabled="disabled"/>
          </p>
        </div><hr size="1" noshade="noshade" />
        <p><div align="center" class="kosong" id="kosong"></div>
        </p>
        <p align="center">Apabila nama Anda tidak ada dalam daftar di atas, silahkan tekan tombol berikut untuk mendaftar.</p>
        <p align="center">
          <input name="daftar" type="submit" id="daftar" value="Daftar" />
        </p></td>
    </tr>
    <tr>
      <td colspan="2"><font size="2"><strong>Sistem Informasi Bengkel Hangtuah</strong><br />
        Hak cipta dilindungi hati nurani 2007</font></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("pmi");
 frmvalidator.addValidation("tgl","dontselect=0","Mohon masukkan tanggal lahir Anda");
 frmvalidator.addValidation("bln","dontselect=0","Mohon masukkan bulan lahir Anda");
 frmvalidator.addValidation("thn","dontselect=0","Mohon masukkan tahun lahir Anda");
</script>
</body>
</html>
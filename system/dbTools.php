<?php
class DbTools{
	var $Server1		= "127.0.0.1";
	var	$DbHost			= "db";
	var	$Username		= "root";
	var	$Password		= "root";
	var $Database		= "pmi";
	var $IDCon			= 0;
	var $IDQuery		= 0;
	var $RecordNum	= 0;
	var $Record			= 0;
	var $pecah			= 0;

function DbConnection(){
		$this->IDCon=@mysql_pconnect($this->DbHost,$this->Username,$this->Password);
		if(!$this->IDCon):
			echo("Error koneksi ke mysql \n pconnect($DbHost, $Username, $Password).");
			exit;
			endif;
		@mysql_select_db($this->Database) or die ("Tidak Ada Database di ".$this->DbHost."!");
		}


function CloseDB(){
			if ($this->IDCon){
				mysql_close ($this->IDCon);
			}
			return $this -> CM_TRUE;
		}

function query($sql){
		$this->IDQuery=mysql_query($sql);
		$this->RecordNum=mysql_num_rows($this->IDQuery);
		$this->FieldNum=mysql_num_fields($this->IDQuery);
		$this->Error = mysql_error();
		$this->Errno = mysql_errno();
	  	if ($this->Errno != 0 || $this->Error != '') {
			  return $this->Errno;
		}
		}

function queryInsert($sql){
		$this->IDQuery=mysql_query($sql);
		$this->affectedNum=mysql_affected_rows();
		$this->Errno = mysql_errno();
		if ($this->Errno != 0 || $this->Error != '') {
			  return $this->Errno;
		}
		}

function fetchRecordArray(){
  $this->Record = @mysql_fetch_array($this->IDQuery);
  $this->RecordNo += 1;  $this->Errno = mysql_errno();

  $this->Error = mysql_error();

	  if ($this->Errno != 0 || $this->Error != '' || $this->RecordNo  > $this->RecordNum) :
			  return false;
	  else :
			  return true;
	  endif;
	}

function fetchRecordRow(){
  $this->Record = @mysql_fetch_row($this->IDQuery);
  $this->RecordNo += 1;
  $this->Errno = mysql_errno();
  $this->Error = mysql_error();

	  if ($this->Errno != 0 || $this->Error != '' || $this->RecordNo  > $this->RecordNum) :
			  return false;
	  else :
			  return true;
	  endif;
	}

} //end of Class DbTools

function no_error() {
	$this->Errno = mysql_errno();
	return $this->Errno;
}

?>
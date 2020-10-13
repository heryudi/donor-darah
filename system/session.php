<?php
	//error_reporting(E_ALL);
	session_start();

	if(!session_is_registered(userSession)) :
		$msg="Maaf anda tidak berhak mengakses jendela ini, Silahkan login";
		echo "<script>alert('$msg')</script>";
		echo "<script>window.location='../index.php'</script>";
		exit();
	endif;
?>

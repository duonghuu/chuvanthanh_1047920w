<?php
	session_start();
	$session=session_id();
	@define ( '_source' , '../../sources/');
	@define ( '_lib' , '../../libraries/');
	include_once _lib."config.php";
	require_once _source."lang$lang.php";
	include_once _lib."Mobile_Detect.php";
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_for.php";
	include_once _lib."class.database.php";
	include_once _lib."functions_user.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
?>

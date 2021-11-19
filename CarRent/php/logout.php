<?php
	session_start();
	session_unset ();
	session_destroy();
	setcookie('member_login', '', time()-3600);
	setcookie('member_password', '', time()-3600);
	header("Location: ../");
	exit;
?>
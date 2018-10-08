<?php

	function encNanoSec($in){
		$saltKey = 'ssHGHGGGJGKGGVN5hj8xxffFFnanoX4kih';
		$encryptout = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($saltKey),$in,MCRYPT_MODE_CBC,md5(md5($saltKey))));
		
		return($encryptout);
	}
	
	function decNanoSec($in){
		$saltKey = 'ssHGHGGGJGKGGVN5hj8xxffFFnanoX4kih';
		$decryptout = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,md5($saltKey),base64_decode($in),MCRYPT_MODE_CBC,md5(md5($saltKey))),"\0");
		
		return($decryptout);
	}
	
?>
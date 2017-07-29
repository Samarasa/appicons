<?php
	include_once('AES.php');  
	function decrp($inputText, $inputKey, $blockSize) 
	{	 
		$aes = new AES($inputText, $inputKey, $blockSize); 
		$dec=$aes->decrypt();
		return $dec;

	}
?>
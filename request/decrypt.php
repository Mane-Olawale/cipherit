<?php
include '../inc/func.php';
include '../inc/vigenere_table.php';
include '../inc/class-vigenere.php';
if (post('data',false) != '' && post('key',false) != ''){
	if (preg_match('/(^[a-zA-Z]+$)/', post('key',false))) {
		$crpto = new vigenere(post('data',false));
	    $result['successtxt'] = '<b>STATUS:</b>Decryption successful.';
	    $result['htmlresult'] = nl2br($crpto->decrypt(post('key',false)));
	    $result['result'] = $crpto->decrypt(post('key',false));
	} else {
	    $result['successtxt'] = '<b>STATUS:</b>Key can only contain alphabets.';
	    $result['htmlresult'] = '';
	    $result['result'] = '';
	}
	
}else{
	$result['successtxt'] = '<b>STATUS:</b>Input not complete.';
	$result['htmlresult'] = '';
	$result['result'] = '';
}
die(json_encode($result));
?>
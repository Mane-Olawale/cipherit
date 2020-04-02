<?php
include 'inc/func.php';
include 'inc/vigenere_table.php';
include 'inc/class-vigenere.php';

?><!DOCTYPE html>
<html>
<head>
	<title>Cipherit Homepage</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Encrypt your text using vigenere cipher algorithm" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	<script type="text/javascript" src="js.js"></script>

</head>
<body>

<div class="page_body">
	<center>  <div class="key_icon"><a href="/"><img src="images/logo.png" width="300px" height="128px"></a></div> </center>
	<div class="blue_note">
		Cipherit helps you encrypt your text using vigenere cipher algorithm...
		<br>
		<ul>
			<i>Your key must contain only alphabets no numbers not even space or periods.</i>
		</ul>

	</div>
	<div align="center"><br/>
	<a href="encrypt.php" style="color: black;">
	<div class="menu_card">
		<img src="images/menu_lock.png" width="100%" >
		<br/><font size="4"><b>Cipher it</b></font>
	</div> 
    </a>
	<a href="decrypt.php" style="color: black;">
	<div class="menu_card">
		<img src="images/menu_key.png" width="100%" >
		<br/><font size="4"><b>Decipher it</b></font>
	</div>
	</a> 
	<a href="tutorial.html" style="color: black;">
	<div class="menu_card">
		<img src="images/menu_lock.png" width="100%" >
		<br/><font size="4"><b>How to use</b></font>
	</div>
	</a> 
	<a href="coder.html" style="color: black;">
	<div class="menu_card">
		<img src="images/coder.png" width="100%" >
		<br/><font size="4"><b>About coder</b></font>
	</div>
	</a> 
<div style="clear: both;"></div>
<br>
</div>
</div>
</body>
</html>


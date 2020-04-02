<?php
include 'inc/func.php';
include 'inc/vigenere_table.php';
include 'inc/class-vigenere.php';

?><!DOCTYPE html>
<html>
<head>
	<title>Encript text</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Encrypt your text using vigenere cipher algorithm" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	<script type="text/javascript" src="js.js"></script>

</head>
<body>

<div class="page_body"><div align="left"><br/>
	<center>  <div class="key_icon"><a href="/"><img src="images/lock1.png" width="100px" height="149px"></a><div class="loader"></div><div class="deem"></div></div> </center>
<div class="result_case" id="result_case">
	<div class="result_head" id="status"><b>Status</b>:Encrption successful</div>
	<div class="result" id="result"></div>
	<div class="result_foot"><span>Actions</span> <form style="display:inline-block;" action="decrypt.php" method="post"><input type="hidden"  name="data" id="hiddenresult"/><button type="submit">Decrypt</button></form><button onclick="copy('result')">Copy text</button></div>
</div>
 <div style="margin: 0px 0px 0px 0px; padding: 4px;color:#fff;text-align:left"><form onsubmit="return encrypt()" method="post">
<input type="password" name="key" id="key" placeholder="Key"><br/>
<textarea name="text" rows="6" id="data" cols="20" placeholder="Type something..." ><?php echo post('data',false);?></textarea>
<div style="background-color:#eee;border:1px solid#eee;margin:1px;" align="center"><center>  <button type="submit" value="POST" class="button"><img src="images/lock2.png" width="46px" height="46px"></button>  </center> </form></div></div>
</div>
</div></div>

</body>
</html>
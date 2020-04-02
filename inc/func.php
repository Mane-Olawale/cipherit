<?php
function connect(){
  global $DB,$conn;
  return $conn;
}

function my_sql_query($sql){
  $conn = connect();
  $query = $conn->query($sql);

  if ($conn->connect_error) {
    echo 'Error from the database:'.$conn->connect_error;
    die();
  }

  if ($query === false) {
    $result = false;
  }else{ 
    $result = true;
  }

  return $result;
  $conn->close();
}

function my_sql_array($sql){
  $conn = connect();
  $query=$conn->query($sql);

  if ($conn->connect_error) {
    echo 'Error from the database:'.$conn->connect_error;
    die();
  }

  if ($query===false) {
    $result = '';
  }else{
    $result = $query->fetch_array(MYSQLI_BOTH);
  }

  return $result;
  $conn->close();
}

function my_sql_rows($sql){
  $conn = connect();
  $query=$conn->query($sql);

  if ($conn->connect_error) {
    echo 'Error from the database:'.$conn->connect_error;
    die();
  }

  if ($query===false) {
    $result = '';
  }else{
    $result = $query->num_rows;  
  }

  return $result;

  $conn->close();
}

function my_sql_sanitise($data){
  $conn = connect();

  $query=$conn->real_escape_string($data);

  if ($conn->connect_error) {
    echo 'Error from the database:'.$conn->connect_error;
    die();
  }

  if ($query===false) {
    $result = '';
  }else{
    $result = $query;  
  }

  return $result;

  $conn->close();
}
function get($str, $bol = true , string $notfound = ''){
	if (isset($_GET[$str])){
    if ($bol == true){
      $result = my_sql_sanitise($_GET[$str]);
    }else{
      $result = $_GET[$str];
    }
		return $result;
	}else{
		return $notfound;
	}
}

function post($str, $bol = true , string $notfound = ''){
  if (isset($_POST[$str])){
    if ($bol == true){
      $result = my_sql_sanitise($_POST[$str]);
    }else{
      $result = $_POST[$str];
    }
    return $result;
  }else{
    return $notfound;
  }
}

function cookie($str, $bol = true , string $notfound = ''){
  if (isset($_COOKIE[$str])){
    if ($bol == true){
      $result = my_sql_sanitise($_COOKIE[$str]);
    }else{
      $result = $_COOKIE[$str];
    }
    return $result;
  }else{
    return $notfound;
  }
}


function append_log($error){
  global $DIR;
  $file = 'error_log.txt';
  if (is_file($file)){
    file_put_contents($file, file_get_contents($file)."\n".'['.date('Y-M-D h:m').']'.$error);
  }else{
    file_put_contents($file,"\n".'['.date('Y-M-D h:m').']'.$error);
  }
}

?>
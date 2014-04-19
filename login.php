<?php
  function generateCode($length=6) { 
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789"; 
    $code = ""; 
    $clen = strlen($chars) - 1;   
    while (strlen($code) < $length) { 
        $code .= $chars[mt_rand(0,$clen)];   
    } 
    return $code; 
  } 
  
  if (isset($_COOKIE['errors'])){
      $errors = $_COOKIE['errors'];
      setcookie('errors', '', time() - 60*24*30*12, '/');
  }

  include_once ('configs/mysql_connect.php');
	include_once ('configs/errors.php'); 	

  if(isset($_POST['submit'])) 
  { 
    
    
    $data = mysql_fetch_assoc(mysql_query("SELECT users_id, users_password FROM `users` WHERE `users_login`='".mysql_real_escape_string($_POST['login'])."' LIMIT 1")); 
     
     
    if($data['users_password'] === md5(md5($_POST['password']))) 
    { 
      
      $hash = md5(generateCode(10)); 
      mysql_query("UPDATE users SET users_hash='".$hash."' WHERE users_id='".$data['users_id']."'") or die("MySQL Error: " . mysql_error()); 
      setcookie("id", $data['users_id'], time()+60*60*24*30); 
      setcookie("hash", $hash, time()+60*60*24*30); 
       
      header("Location: auth_check.php"); exit(); 
    } 
    else 
    { 
      print "Вы ввели неправильный логин/пароль<br>"; 
    } 
  } 
?>
  <form method="POST"> 
  Логин <input name="login" type="text"><br> 
  Пароль <input name="password" type="password"><br> 
  <input name="submit" type="submit" value="Войти"> 
  </form>
  <?php
  if (isset($errors)) {print '<h4>'.$error[$errors].'</h4>';}

  ?>
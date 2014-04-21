<?php 
	include_once ('configs/mysql_connect.php');
	include_once ('configs/errors.php');	

	if(isset($_POST['submit'])) 
	{ 

			$err = array(); 

		 if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])) 
			{ 
					$err[] = "Логин может состоять только из букв английского алфавита и цифр"; 
			} 
			 
			if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) 
			{ 
					$err[] = "Логин должен быть не меньше 3-х символов и не больше 30"; 
			} 
			 
		$query = mysql_query("SELECT COUNT(users_id) FROM users WHERE users_login='".mysql_real_escape_string($_POST['login'])."'")or die ("<br>Invalid query: " . mysql_error()); 
			if(mysql_result($query, 0) > 0) 
			{ 
					$err[] = "Пользователь с таким логином уже существует в базе данных"; 
			} 
		
			 
		 if(count($err) == 0) 
			{ 
					 
					$login = $_POST['login'];  
					$password = md5(md5(trim($_POST['password']))); 
					$name = $_POST['name'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					 
					mysql_query("INSERT INTO users SET users_login='".$login."', users_password='".$password."', users_name='".$name."',users_email='".$email."', users_phone='".$phone."'"); 
					header("Location: login.php"); exit(); 
			}
	} 
	?>

		<form method="POST" action="">
		Логин<br><input type="text" name="login" id="reg_inp" required /><br />
		Пароль<br><input type="password" name="password" id="reg_inp" required /><br />
		Ваше им'я<br><input type="text" name="name" id="reg_inp" required /><br />
		E-mail<br><input type="text" name="email" id="reg_inp" required /><br />
		Телефон<br><input type="text" name="phone" id="reg_inp" /><br />
		<input name="submit" type="submit" value="Зарегистрироваться"> 
		</form>
		<?php
			if (isset($err)) {
				print "<b>При регистрации произошли следующие ошибки:</b><br>"; 
				foreach($err AS $error) 
				{ 
					print $error."<br>"; 
				}   
			}
  ?>
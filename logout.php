<form action="" method="post"><input type='submit' name='exit' value='Выйти'/></form>
<?php
	if($_POST['exit']) 
		{
					setcookie('id', '', time() - 60*60*24*30, '/'); 
					setcookie('hash', '', time() - 60*60*24*30, '/');
					header('Location: login.php'); exit();
		}
?>
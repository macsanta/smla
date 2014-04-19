<?php
        include_once ('auth_check.php');
        echo 'Привет! '.$userdata['users_login'];
?>
<form action="logout.php" method="post"><input type='submit' name='exit' value='Выйти'/></form>
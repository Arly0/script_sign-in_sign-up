<?php

include('db/connection.php');

$login = $_GET['login'];
$password = $_GET['password'];
// Присвоение переданных данных переменным и поиск в БД этих данных
$count = mysqli_query( $connection,"SELECT * FROM `use` WHERE `login` = '$login' AND `password` = '$password'");

if( mysqli_num_rows($count) == 0 )
{
	echo 'You dont register. Register now!<br>'; 
	?>
<!-- Если этих данных в БД не обнаружено,создание новой формы и отправка этих данных в файл db_connection.php -->
	<form method="get" action="/db_connect.php">
		<input type="text" placeholder="Enter login" name="login_">
		<input type="text" placeholder="Enter password" name="password_">
		<hr>
		<input type="submit" name="Send">
	</form>

<?php
}
else 
{
	echo 'Hello!)';
}
?>
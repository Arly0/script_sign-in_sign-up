<?php

include('db/connection.php');

// занесение данных в БД
$login_ = $_GET['login_'];
$password_ = $_GET['password_'];
// вставка информации с форм в БД
$reslut = mysqli_query( $connection, "INSERT INTO `use`( `login` , `password` ) VALUES ( '$login_' , '$password_' )" );
// если есть какая-то ошибка - выведет сообщение об оишбке и суть ошибки 
if ( mysqli_connect_errno() )
{
	echo 'Cant connect<br>';
	echo mysqli_connect_error();
	exit();
}
else
{
	echo 'All fine';
}

// mysql_close($connection);

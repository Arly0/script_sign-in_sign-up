<?php

$connection = mysqli_connect('localhost', 'root', '' , 'users');
// подсоединение к БД
if( $connection == false )
{
	echo 'Ошибка при подключении к БД!<br>';
	echo mysqli_connect_error();
	exit();
}
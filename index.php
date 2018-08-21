<?php

include('db/connection.php');

?>
	<!-- Вставка формы входа и отправка данных в файл db.php -->
<form method="get" action="/db.php">
	<input type="text" placeholder="Enter login" name="login">
	<input type="text" placeholder="Enter password" name="password">
	<hr>
	<input type="submit" name="Send">
</form>


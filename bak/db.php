<?php
	// $_SESSION["error"] = '';

		$server = "localhost";				/* Хост */
		$username = "root"; 				/* Имя пользователя */
		$password = "crazyfrog"; 		/* Пароль пользователя */
		$database = "test"; 				/* Имя базы данных */
	 
	// Подключение к базе данный через MySQLi
	$mysqli = new mysqli($server, $username, $password, $database);

	// Проверяем, успешность соединения. 
	if (mysqli_connect_errno()) { 
		//session_start();
		$error_message.= "<font color=red><p class='messages'>Ошибка подключения к БД</p></font>";
		//$_SESSION["error_messages"] = $error_message;		
		//header ("Location: /");
		echo $error_message;
		exit(); 
		//session_write_close();
	}
	
	// Устанавливаем кодировку подключения
	$mysqli->set_charset('utf8');@

	//Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
	$address_site = "http://pozitivs.ru";
?>
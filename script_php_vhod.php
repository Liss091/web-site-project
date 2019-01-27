<?php
	$email = $_POST['email'];
    if (empty($email))
	{
		echo "Не введена почта"."<br>";
	}
	else
	{
		echo "Электронная почта "."$email"."<br>";
	}
///////////////////////////////////////////////////////
	$passw = $_POST['passw1'];
	if (empty($passw))
	{
		echo "Не введен пароль"."<br>";
	}
	else
	{
		echo "Пароль "."$passw"."<br>";
	}
?>
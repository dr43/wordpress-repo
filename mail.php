<?php

$recepient = "evgen@otpotpotp.of.by";
$sitename = "Мой сайт с шутками";

$name = trim($_POST["username"]);
$email = trim($_POST["email"]);
$password = trim($_POST['pwd']);
	$text = "<b>Этот пользователь зарегистрировался на вашем сайте</b>";
$my_message = "Имя: $name \nПочта: $email \nПароль: $password \nТекст: $text";
$user_message = "Благодарим Вас за регистрацию. Можете использовать следующую информация для входа на сайт: \nВаш логин: $name \nВаш пароль: $password";
$user_pagetitle = "Благодарю Вас за регистрацию на сайте лучших шуток от Sylmain";
$my_pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $my_pagetitle, $my_message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
mail($email, $user_pagetitle, $user_message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
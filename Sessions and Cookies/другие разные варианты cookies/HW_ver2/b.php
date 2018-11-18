<?php

session_start();

//Запись в cookie адреса страницы, то же самое для страницы b.php с таким же именем
$lastPage = $_SERVER['REQUEST_URI'];

setcookie('lastPage', $lastPage);

//Если сессия создана, то поприветствовать пользователя и подключить файл logout.php с кнопкой Выйти

echo "Добро пожаловать, ". $_COOKIE['name'] .". Вы авторизованы. <br>";




?>
<h3>Страница B.php</h3>

Перейти на страницу index.php <a href="index.php"><input type="submit" value="index.php"></a><br><br>
Перейти на страницу a.php <a href="a.php"><input type="submit" value="a.php"></a><br><br>
Перейти на страницу auth.php <a href="auth.php"><input type="submit" value="auth.php"></a><br><br>
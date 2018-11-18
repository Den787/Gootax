<?php
header("Content-type: text/html; charset=utf-8");
session_start();

//Запись в cookie адреса страницы, то же самое для страницы a.php с таким же именем
$lastPage = $_SERVER['REQUEST_URI'];
setcookie('lastPage', $lastPage);

//Если сессия создана, то поприветствовать пользователя и подключить файл logout.php с кнопкой Выйти
if(!empty($_SESSION['auth'])){
    echo "Добро пожаловать, ". $_COOKIE['name'] .". Вы авторизованы. <br>";
    include_once("logout.php");

    //Если нажата кнопка Выйти в файле logout.php, то уничтожить сессии
    if(isset($_POST['submit'])){
        session_destroy();
    }
}
?>
<h3>Страница B.php</h3>

Перейти на страницу index.php <a href="index.php"><input type="submit" value="index.php"></a><br><br>
Перейти на страницу a.php <a href="a.php"><input type="submit" value="a.php"></a><br><br>
Вернутся в начало <a href="../../index.php"><input type="submit" value="В начало"></a><br><br>
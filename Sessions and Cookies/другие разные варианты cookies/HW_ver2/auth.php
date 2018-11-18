<?php
session_start();
if(isset($_POST['submit'])){

    //Проверить, не пустая ли переменная $_POST['name']
    if(!empty($_POST['arr[name]'])){

        //Если логин введен, то записать имя в cookie и открыть сессию со знчением true. Редирект на последнюю посещенную страницу, адрес которой в $_COOKIE['lastPage']

        $arr[name] = $_POST['arr[name]'];
        $arrName = serialize($arr[name]);
        setcookie('$arr[name]', $arrName);
     //   $_SESSION['auth'] = true;
        header("Location: ". $_COOKIE['lastPage']);

    }else{
        //Иначе, если нажата кнопка Войти, но форма, то есть переменная $_POST['name'] пустая, то вывести предупреждение
        echo "Вы не ввели логин. Заполните форму <br>";
    }
}

?>



<h3>Cтраница авторизации</h3>
<form action="" method="post">
    Введите логин: <input type="text" name="arr[name]"><br>
    Введите пароль: <input type="password" name="arr[password]"><br>
    <input type="submit" name="submit" value="Войти"><br>
</form>


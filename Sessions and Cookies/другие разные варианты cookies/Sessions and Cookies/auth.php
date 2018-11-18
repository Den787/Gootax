<?php
session_start();
if(isset($_POST['submit'])){

    //Проверить, не пустая ли переменная $_POST['name']
    if(!empty($_POST['name'])){

        //Если логин введен, то открыть сессию . Редирект на последнюю
        // посещенную страницу, адрес которой в $_COOKIE['lastPage']

        $name = $_POST['name'];
        $_SESSION['name'] = $name;

    if (!empty($_COOKIE['lastPage'])) {
        header("Location: " . $_COOKIE['lastPage']);
    }
    else {
        header('Location: a.php');  //если нет куки последней страницы то редирект на первую(a.php)

    }

    }else{
        //Иначе, если нажата кнопка Войти, но форма, то есть переменная $_POST['name'] пустая, то вывести предупреждение
        echo "Вы не ввели логин. Заполните форму <br>";
    }
}

?>



<h3>Cтраница авторизации</h3>
<form action="" method="post">
    Введите логин: <input type="text" name="name"><br>
    <input type="submit" name="submit" value="Войти"><br>
</form>


<?php

session_start();

if (isset($_SESSION['name'])) {   //открыта ли сессия?
        $name = $_SESSION['name'];  // инициализируем  переменную "имя" для сессии
        header('Location: '. $_COOKIE['lastPage']); // проверяем есть ли куки последней страницы для данной
    // переменной
}

else {
        header('Location: auth.php');  //если нет куки то  редирект на страницу авторизации
}
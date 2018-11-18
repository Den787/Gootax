<?php

session_start();

if (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
        header('Location: '. $_COOKIE['lastPage']);
}

else {
        header('Location: auth.php');
}
<?php
if (isset($_POST['name']) && (!empty($_POST['name']))) {  // проверка на введеные данные
    $name = $_POST['name'];    //переменной передается значение из формы
    setcookie('name',$name); //устанавливаем в куки переменную $name
}
elseif (isset($_COOKIE['name'])) {  //проверяем наличие куки name
    $name = $_COOKIE['name'];       //то берем оттуда данные
}
else {
    $name = 'Гость';         //в противном случае присваивается значение гость
}

?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Страница index.php</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Страница Index.php</h1>
<a href="page.php">Страница page.php</a>
<br><br>
<p>Привет, <?php echo $name ?></p>
<form method="post">
    <input type="text" name="name" />
    <input type="submit" name="submit">
</form>
</body>
</html>

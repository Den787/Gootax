<?php

if (isset($_COOKIE['name'])) {  //проверяем наличие куки name
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
<a href="page.php"> Страница page.php </a>
<br><br>
<p>Привет, <?php echo $name ?></p>

</body>
</html>

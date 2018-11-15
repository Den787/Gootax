<?php
include_once 'funcCalculator.php';

if  (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $znak = $_POST['znak'];

    if (!empty($a) && !empty($znak) && !empty($b)) {

        if (is_numeric($a) && is_numeric($b)) {

            $result = calc($a, $znak, $b);

            if ($result != false) {

               print_r ($result);

            }


        }
        else {
            echo "Введены не числа";
}
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="Calculator.php" method="post">
    <p> Введите число 1: </p>
    <input type="text" name="a"><br>
    <p> Введите знак: </p>
    <input type="text" name="znak"><br>
    <p> Введите число 2: </p>
    <input type="text" name="b"><br>
    <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>

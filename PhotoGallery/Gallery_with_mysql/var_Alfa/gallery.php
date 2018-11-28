 <link rel="stylesheet" type="text/css" href="gallery.css" />

<div id="container">
<div id="heading"> <!-- Заголовок -->
  <h1>Фотогалерея</h1>
  </div>
  <div id="gallery"> <!-- это блок для изображений -->
<?php
include ("bd.php");

$directorySmall = 'img/small/';	//название папки с изображениями
$directoryBig = 'img/big/';
$nomargin = '';
$j=0;

$sql = mysqli_query($db,"SELECT id, image_id, ext, click FROM image ORDER BY click DESC");

if (!$sql) {
exit();
}

if (mysqli_num_rows($sql) > 0) {
$row=mysqli_fetch_array($sql);
$count = $row["click"];

    $i=1;
do {
    if(($j+1)%4==0) {
        $nomargin='nomargin';
    } 	//последнему изображению в ряде присваевается CSS класс "nomargin"
    echo '
  <div class="pic '.$nomargin.'" style="background:url('.$directorySmall.$row["image_id"].'.'.$row["ext"].') no-repeat 50% 50%;">
  <a href="'.$directoryBig.$row["image_id"].'.'.$row["ext"].'"  target="_blank">'.$count.'</a> 
    <!-- $count для отладки, потом убрать мысли this.count? -->
  </div>';

    $j++;
$i++;
}

while (@$row = mysqli_fetch_array($sql));

}

else

{

echo "<label class='label'>В базе данных нет
    
    добавленных картинок!</label>";

exit();

}

  ?>
<div class="clear"></div> <!-- using clearfix -->
  </div>
<div id="footer"> <!-- футер -->
  </div>
</div> <!-- закрывающий div -->


<!--  есть минус, автоматически не обновляет галерею, f5 нужно нажимать. технология AJAX Нужна -->


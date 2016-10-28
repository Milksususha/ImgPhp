<?php
// Создание изображения 55x30 
$im = imagecreatetruecolor(55, 30);
$white = imagecolorallocate($im, 255, 255, 255);

// Рисование прямоугольника
imagefilledrectangle($im, 4, 4, 50, 25, $white);

// Сохранение изображения
imagepng($im, './imagefilledrectangle.png');
imagedestroy($im);
?>
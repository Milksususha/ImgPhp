<?php
// �������� ����������� 55x30 
$im = imagecreatetruecolor(55, 30);
$white = imagecolorallocate($im, 255, 255, 255);

// ��������� ��������������
imagefilledrectangle($im, 4, 4, 50, 25, $white);

// ���������� �����������
imagepng($im, './imagefilledrectangle.png');
imagedestroy($im);
?>
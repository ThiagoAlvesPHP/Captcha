<?php
session_start();
header("Content-type: image/jpeg");
//CAPTURANDO O CAPTCHA SALVO NO SESSION
$n = $_SESSION['captcha'];

//CRIANDO IMAGEM
$imagem = imagecreate(100, 50);
//COR DE FUNDO DA IMAGEM
imagecolorallocate($imagem, 200, 200, 100);
$fontcolor = imagecolorallocate($imagem, 20, 20, 20);
//ESCREVE TEXTO NA IMAGEM
imagettftext($imagem, 40, 0, 21, 35, $fontcolor, __DIR__.'/Ginga.otf', $n);

imagejpeg($imagem, null, 100);
?>
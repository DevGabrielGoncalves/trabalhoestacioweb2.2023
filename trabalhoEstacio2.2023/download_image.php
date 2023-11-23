<?php

// Definir a URL da imagem
$url = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

// Baixar a imagem
$imagem = file_get_contents($url);

// Salvar a imagem
file_put_contents("imagem.png", $imagem);

// Definir o cabeçalho de download
header("Content-Type: image/png");
header("Content-Disposition: attachment; filename=imagem.png");

// Enviar a imagem para o navegador
echo $imagem;

?>

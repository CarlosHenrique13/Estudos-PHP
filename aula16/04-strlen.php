<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $txt = "Curso em Vídeo";
        $tamanho = strlen($txt);
        printf ("A palavra %s tem %.1f de caracter",$txt,$tamanho);
    ?>
</div>
</body>
</html>
 
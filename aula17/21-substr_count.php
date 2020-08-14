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
        $frase = "Estou aprendendo PHP";
        $cont = substr_count($frase,"PHP");
        echo ("$frase <br/>A palavra PHP foi encontrada $cont vezes.");
    ?>
</div>
</body>
</html>
 
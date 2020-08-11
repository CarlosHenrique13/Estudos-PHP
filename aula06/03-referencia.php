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
        $a = 3;
        $b = &$a;//B faz referencia a A com &
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/>A varialve B vale $b ";

    ?>
</div>
</body>
</html>
 
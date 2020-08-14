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
        $nome = "Carlos";
        $novo = str_pad($nome,30," ",STR_PAD_RIGHT);
        $novo1 = str_pad($nome,30,"#",STR_PAD_LEFT);
        $novo2 = str_pad($nome,30,"#",STR_PAD_BOTH);

        echo ("O aluno $novo e lindo!<br/>$novo1<br/>$novo2");
    ?>
</div>
</body>
</html>
 
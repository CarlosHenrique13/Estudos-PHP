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
        $name = $_GET["nome"];
        printf ("Palavra %s com %.1f",trim($name),strlen(trim($name)));
    ?>
    <a href="05-trim.html">Voutar</a>
</div>
</body>
</html>
 
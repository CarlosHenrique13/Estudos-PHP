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
        $estado = isset($_GET["est"])?$_GET["est"]:0;
        switch ($estado){
            case 1:
                $r = "Norte";
                break;
            case 2:
                $r = "Nordeste";
                break;
            case 3:
                $r = "Centro-Oeste";
                break;
            case 4:
                $r = "Sudeste";
                break;
            case 5:
                $r = "Sul";
                break;
            default:
                echo "Não valido";
        }
        echo "Você mora na região <span class='foco'>$r</span>"
    ?>
    <br/><a href="exercicio03.html" class="botao">Voutar</a>
</div>
</body>
</html>
 
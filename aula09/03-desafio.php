<!DOCTYPE html>
<html>
<head>
    <?php
    $noata1 = isset($_GET["v1"])?$_GET["v1"]:"Valor não informado";
    $noata2 = isset($_GET["v2"])?$_GET["v2"]:"Valor não informado";
    $m = ($noata1 + $noata2) / 2;
    $cor = "#FF0000";
    if ($m >= 7){
        $v = "Aprovado";
        $cor = "#0000FF";
    }elseif ($m < 7 && $m >= 5){
        $v = "Recuperação";
    }else{
        $v = "Reprovado";
    }
    ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span {
            color: <?php echo $cor ;?>;
            font-size: 15pt;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "Sua Media foi <span>$m</span> e você estar <span>$v</span>";
    ?>
</div>
</body>
</html>
 
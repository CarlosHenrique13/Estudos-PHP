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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos.<br/>";
        if($i < 16){
            $v = "nao pode Votar";
            $d = "nao pode dirigir";
        }elseif(($i >= 16 && $i < 18) || ($i>65)){
            $v = "Voto Opicional";
            $d = "nao pode dirigir";
        } else{
            $v = "Voto obrigatorio";
            $d = "Pode dirigir";
        }
        echo "Com essa idade voce $v e tambem $d";
    ?>
</div>
</body>
</html>
 
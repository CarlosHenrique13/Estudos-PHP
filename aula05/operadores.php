<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Operadores em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1 + $n2) / 2;
        echo "A soma vale ".($n1+$n2);
        echo "<br/>A Subtracao vale ".($n1-$n2);
        echo "<br/>A multiplicacao vale ".($n1*$n2);
        echo "<br/>A divisao vale ".($n1/$n2);
        echo "<br/>O modulo vale ".($n1%$n2);
        echo "<br/> A media vale $m";
    ?>
</div>
</body>
</html>


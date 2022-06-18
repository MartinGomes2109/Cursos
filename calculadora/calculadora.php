<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <form class="caja" action="calculadora.php" method="get">
        <h1>CALCULADORA PHP</h1>
        <input type="text" name="numero1" value="" placeholder = "ingrese un numero">
        <select name="opcion" >
            <option value="+">
                +
            </option>
            <option value="-">
                -
            </option>
            <option value="x">
                x
            </option>
            <option value="/">
                /
            </option>
        </select>
        <input type="text" name="numero2" value="" placeholder = "ingrese otro numero" >
        <input type="submit" name="" value="respuesta">
        <output type = "number" name="">
    </form>    
</body>
</html>
<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$opcion= $_GET['opcion'];
if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) &&  is_numeric($_GET['numero2']));{
#    echo $numero1 + $numero2;
#}
if($opcion =='+'){
    $solucion = $numero1+$numero2;
}else if($opcion=='-'){
    $solucion= $numero1-$numero2;
}else if($opcion=='x'){
    $solucion= $numero1*$numero2;
}else if($opcion=='/'){
    $solucion=$numero1/$numero2;
}
}
echo $solucion;

?>
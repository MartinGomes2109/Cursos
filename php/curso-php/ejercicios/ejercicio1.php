<?php
echo 'ejercicio 1';
echo '<br>';
$arreglo= ['keyStr1'=>'lado',0=>'ledo', 'keyStr2'=>'lido', 1=>'lodo', 2=>'ludo'];

echo $arreglo['keyStr1'],',',$arreglo[0],',',$arreglo['keyStr2'],',',$arreglo[1],',',$arreglo[2];
echo '<br>';
echo 'decirlo al reves lo dudo';
echo '<br>';
echo $arreglo[2],',',$arreglo[1],',',$arreglo['keyStr2'],',',$arreglo[0],',', $arreglo['keyStr1'];
echo '<br>';
echo '¡que trabajo me a costado!';
echo '<br>';

echo 'ejercicio 2';
echo '<br>';
echo '<br>';
echo '<br>';

$paises=[
    'argentina'=>['corrientes', 'buenos aires', 'chaco'],
    'eeuu'=>['NY', 'los santos', 'chicago'],
    'mexico'=>['Monterrey', 'Querétaro', 'Guadalajara'],
    'colombia'=>['Bogota', 'Cartagena', 'Medellin'],
    'brasil'=>['ciudad1', 'ciudad2', 'ciudad3']
];

foreach($paises as $pais=>$ciudad){
    echo "el pais es: $pais :";
    foreach($ciudad as $valor){
        echo "$valor, ";
    }
    echo '.<br>';
}

echo 'ejercicio 3';
echo '<br>';
echo '<br>';
echo '<br>';
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
rsort($valores);
echo '<br>';
for ($i=0; $i < count($valores) ; $i++) { 
    echo $valores[$i],'-';
}
echo '<br>';
echo 'los valores mas bajos son: ';
$largo=count($valores);
for ($t=1; $t < 4; $t++) { 
    echo $valores[($largo - $t)], ' ';
}
echo '<br>';
echo '<br>';
echo 'los valores mas altos son: ';
for ($y=0; $y < 3; $y++) { 
    echo $valores[$y],'-';
}


?>
<?php

echo '-----variables-----';
echo '<br>';
#variables
$nombre = 'victor';
$numero = 3;
echo $numero;
echo '<br>';
echo 'este numero es:', $numero;
echo '<br>';
echo "este numero es: $numero";
echo '<br>';

print 'hola mundo';
echo 'hola mundo', 'hola', $nombre;
echo '<br>';

#contantes
define('curso','php');
echo curso;#imprime php
echo '<br>';

echo '-----if-----';
echo '<br>';
#condicionales
$numero1= 2;
$numero2= 2;
if ($numero1<$numero2)
{
    echo 'numero 1';
}
elseif ($numero1>$numero2){
    echo 'numero 2';
}
else{
    echo 'numeros iguales';
}
echo '<br>';

echo '-----switch(case)-----';
echo '<br>';
#switch(case)
$curso = 'php';
switch ($curso){
    case 'php':
        echo 'lunes y martes';
        break;
    case 'java';
        echo 'miercoles';
        break;
    case 'python';
        echo 'jueves';
        break;
    default:
        echo 'no extiste curso';
        break;
    }
echo '<br>';

#ciclos
echo '-----ciclos-----';
echo '<br>';

echo '-----while-----';
echo '<br>';
$numero3= 1;
while ($numero3 <=10){
    echo $numero3;
    $numero3=$numero3 + 1;
}

echo '<br>';
echo '-----do-----';
echo '<br>';
$numero4=1;
do {
    echo $numero4;
    $numero4 = $numero4 + 1;
}while ($numero4 <=10);

echo '<br>';
echo '-----for-----';
echo '<br>';
$numero5=1;
//var++ = var=var+1
for ($numero5=0; $numero5<=10; $numero5++){
    echo $numero5;
}
echo '<br>';

#arreglo, vectores, array
echo '-----array-----';
echo '<br>';
$dias = array('lunes','martes', 'miercoles','jueves','viernes');
#var_dumb: informarcion de la variable, contenido y rango
#ejemplo var_dumb(dias) ==> array[0]=lunes(5)
#print_r: visualisar contenido

$dias[0]='domingo';
$dias[0]='lunes';
$dias[5]='sabado';
$dias[6]='domingo';
print_r($dias);
echo '<br>';
for ($i=0; $i <count($dias) ; $i++) { 
    echo $dias[$i];
    echo '<br>';
}
echo '<br>';
echo count($dias);
#count: cuenta elementos del vector 
#asort: ordena alfabeticamente
#rsort: inverso de asort
#arsort: mantiene los indices

echo '<br>';
echo '<br>';
$estudiante = array('nombre' => 'victor','apellido' => 'cruz','edad'=>23 );
echo "mi nombre es: ".$estudiante['nombre'];

#funciones rapidas con array
#array_chunk: divide el arreglo en sub arreglos de un numero determinado
#array_slice: crea un nuevo arreglo eliminando algunos elemetos desde el principio hasta una posicion dada
#array_merge: permite combinar 2 arreglos, uno despues de otro
#array_pop: elimina el ultimo elemento
#array_search: permite buscar en un array, tira la posicion, array_search('pedro',$amigos)
#array_reverse: invierte el arreglo
echo '<br>';
echo 'funciones con array';
echo '<br>';
echo '<br>';
$amigos = array ('jose','maria','raul','sara','pedro','camila','luis','david');
$compañeros = array('sergio','hugo', 'carla', 'elias');
$funcion = array_reverse($amigos);
print_R($funcion);
echo '<br>';
echo '<br>';

#matrices, arreglos multidimencionales
#$matriz[1](fila)[2]columna
echo 'matrices';
echo '<br>';
$matriz = array(
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15)
);

echo $matriz[1][2];

echo '<br>';
echo 'ciclo for-earch';
echo '<br>';
#se usar el array estudiante porque es asociativo
# se puede imprimir tanto dato o valor
foreach ($estudiante as $dato => $valor) {
    echo $valor;
    echo '<br>';
}

echo '<br>';

#funciones
echo '<br>';
echo 'funciones';
echo '<br>';

#function estudiante($nombre){
#    echo 'nuevo estudiante: ', $nombre;
#    echo '<br>';
#}

#estudiante('victor');
#estudiante('carla');
#estudiante('raul');

function estudiantes($nombre,$apellido,$edad){
    echo "el estudiante $nombre con el apellido $apellido tiene la edad de $edad años";
}

estudiantes('victor', 'sanchez', '24');

echo '<br>';
function suma($a,$b){
    #$resultado = $a + $b;
    #echo $resultado;
    return $a + $b;
}

#suma(2,2);
$resultado = suma(4,5);
echo $resultado;

echo '<br>';


#variable scope
echo '<br>';
echo 'variable scope';
echo '<br>';

function estudiante(){
    global $edad;
    $edad = 32;
    echo $edad;
}
estudiante();
echo '<br>';
echo $edad;#si $edad no tiene global no se puede poner aca

#no puedo volver a llamar a la variable $edad por ya estar dentro de una variable
#para que se pueda usar una variable mas alla de su funcion se utiliza la palabra global
#ejemplo: global $edad;

#variables globales
echo '<br>';
echo 'variables globales';
echo '<br>';

$n1 = 6;
$n2 = 4;
function sumar(){
    $GLOBALS['s'] = $GLOBALS['n1']+ $GLOBALS['n2'];
}
sumar();
echo $s;
#desde aca para abajo funciona desde el index.html

echo '<br>';
echo $_SERVER['PHP_SELF'];#sirve para mostrar la hubicacion del archivo
echo '<br>';
echo $_SERVER['SERVER_NAME'];#direccion del server
echo '<br>';
echo $_SERVER['HTTP_REFERER'];#enlace de la pagina
echo '<br>';

echo 'GET';
echo '<br>';
$numero6 = $_GET['numero6'];
echo 'el numero es: '. $numero6;

?>
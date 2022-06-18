<?php
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$genero = $_POST['genero'];
$materia = $_POST['materia'];
$telefono = $_POST['telefono'];
$email = $_POST["email"] ??"";

if(!empty($nombre) || !empty($password) || !empty($genero) || !empty($email) || !empty($materia) || !empty($telefono)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "estudiante";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT telefono from usuario where telefono = ? limit 1";
        $INSERT = "INSERT INTO  usuario (nombre,password,genero,email,materia,telefono)values(?,?,?,?,?,?)";
        $stmt = $conn->prepare($SELECT);
        $stmt -> bind_param("i",$telefono);
        $stmt -> execute();
        $stmt -> bind_result($telefono);
        $stmt -> store_result();
        $rnum = $stmt->num_rows;
        if($rnum ==0){
            $stmt-> close();
            $stmt = $conn->prepare($INSERT);
            $stmt -> bind_param("sssssi",$nombre,$password,$genero,$email,$materia,$telefono);
            $stmt -> execute();
            echo 'registro completado.';
        }
        else{
            echo 'alguien ya tiene ese numero';
        }
        $stmt-> close();
        $conn->close();
    }
}
else{
    echo "todos los datos son obligatorios";
    die();
}
?>
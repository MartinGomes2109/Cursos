<?php

require_once 'vendor/autoload.php';

use app\models\project;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule2 = new Capsule;

$capsule2->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'curso php',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);



// Make this Capsule instance available globally via static methods... (optional)
$capsule2->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule2->bootEloquent();

if (!empty($_POST)) {
    $project = new project();
    $project->title = $_POST['title'];
    $project->description = $_POST['description'];
    $project->save();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproject</title>
</head>

<body>
    <h1>Add Project</h1>
    <form action="addproject.php" method="POST">
        <label for="">Tittle:</label>
        <input type="text" name="title"><br>
        <label for="">Description:</label>
        <input type="text" name="description"><br>
        <button type="submit">enviar</button>
    </form>
</body>

</html>
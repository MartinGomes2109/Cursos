<?php



use app\models\job;


if (!empty($_POST)) {
    $job = new job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addjob</title>
</head>

<body>
    <h1>Add Job</h1>
    <form action="addjob.php" method="POST">
        <label for="">Tittle:</label>
        <input type="text" name="title"><br>
        <label for="">Description:</label>
        <input type="text" name="description"><br>
        <button type="submit">enviar</button>
    </form>
</body>

</html>
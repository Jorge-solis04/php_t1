<?php
include("connection.php");
ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
$conn = conectar();
$id = $_GET["id"];
$sql = "SELECT * FROM alumnos WHERE cod_estudiante=$id";
$query = mysqli_query($conn, $sql);
$alumno = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-T1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <h1 class="text-center">PHP T1</h1>
        </div>
        <form action="updateFunc.php" method="post">
            <input type="text" name='cod_estudiante' value="<?php echo $alumno["cod_estudiante"]?>" hidden >
            <input type="text" name='ine' value="<?php echo $alumno['ine']?>"class="form-control mb-3" placeholder="Escribe tu INE">
            <input type="text" name='nombre' value="<?php echo $alumno['nombre']?>" class="form-control mb-3" placeholder="Escribe tu nombre">
            <input type="text" name='apellidos' value="<?php echo $alumno['apellidos']?>" class="form-control mb-3" placeholder="Escribe tus apellidos">
            <input type="submit" value="Actualizar" class="btn btn-primary">
            <button class="btn btn-dark" @onclick="location.redirect('index.php')">Regresar</button>
            </form>
    </div>
</body>

</html>
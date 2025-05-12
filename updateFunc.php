<?php
    include("connection.php");
    $conn = conectar();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $cod_estudiante = $_POST["cod_estudiante"];
    $ine = $_POST["ine"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];

    $sql = "UPDATE alumnos SET ine='$ine', nombre='$nombre', apellidos='$apellidos' WHERE cod_estudiante=$cod_estudiante";
    $query = mysqli_query($conn, $sql);
    if($query){ 
        Header("Location: index.php");
    } else{
        echo $query;
    }
?>
<?php
    include("connection.php");
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $conn = conectar();
    $ine = $_POST['ine'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $sql = "INSERT INTO alumnos VALUES (null, '$ine', '$nombre','$apellidos')";
    $query = mysqli_query($conn, $sql);

    if($query){
        Header("Location:index.php");
    } else{
        echo $query;
    }
?>
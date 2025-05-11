<?php
    include("connection.php");
    $conn = conectar();
    $sql = "SELECT * FROM alumnos";
    $query = mysqli_query($conn, $sql);

    echo $query;
?>
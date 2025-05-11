<?php
function conectar()
{
    $host = "localhost:8889";
    $user = "root";
    $pass = "root";     
    $bd = "proyecto_php_t1";
    

    $conn = mysqli_connect($host, $user, $pass, $bd);


    return $conn;
}
?>

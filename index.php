<?php
    include("connection.php");
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $conn = conectar();
    $sql = "SELECT * FROM alumnos";
    $query = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresa los datos del alumno</h1>
                <form action="insert.php" method="post"> 
                    <input type="text" name='ine' class="form-control mb-3" placeholder="Escribe tu INE">
                    <input type="text" name='nombre' class="form-control mb-3" placeholder="Escribe tu nombre">
                    <input type="text" name='apellidos' class="form-control mb-3" placeholder="Escribe tus apellidos">
                    <input type="submit" value="Insertar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>INE</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row["cod_estudiante"] ?>
                                </td>
                                <td>
                                    <?php echo $row["ine"] ?>
                                </td>
                                <td>
                                    <?php echo $row["nombre"] ?>
                                </td>
                                <td>
                                    <?php echo $row["apellidos"] ?>
                                </td>
                                <td>
                                    <a href="update.php?id=<?php echo $row["cod_estudiante"]?>" class="btn btn-warning">EDITAR</a>
                                    |
                                    <a href="delete.php?id=<?php echo $row["cod_estudiante"]?>" class="btn btn-danger">BORRAR</a>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
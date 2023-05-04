<?php
    include_once('../Config/Conexion.php');
    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM alumnos WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-warning p-2 text-white text-center">Editar Alumno</h1>
    <br>

    <div class="container">
        <form action="../CRUD/Editar.php" method="POST">
            <input type="Hidden" name="Id" value="<?php echo $fila['id']?>">
            <div class="mb-3">
                <label class="form-label">DNI</label>
                <input type="text" class="form-control" placeholder="DNI" name="DNI" value="<?php echo $fila['dni']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre Alumno</label>
                <input type="text" class="form-control" placeholder="Nombre alumno" name="NombreAlumno" value="<?php echo $fila['Nombre']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido Alumno</label>
                <input type="text" class="form-control" placeholder="Apellido alumno" name="ApellidoAlumno" value="<?php echo $fila['Apellido']?>">
            </div>
            <div class="mb-3">
            <label class="form-label">Correo</label>
                <input type="text" class="form-control" placeholder="Correo" name="Correo" value="<?php echo $fila['Correo']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" name="Telefono" value="<?php echo $fila['Telefono']?>">
            </div>
            <div class="container text-center">
                <button type="submit" class="btn btn-primary">Editar Alumno</button>
                <a href="../Index.php" class="btn btn-dark">Atras</a>
            </div>

        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
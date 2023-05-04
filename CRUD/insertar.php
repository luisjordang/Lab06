<?php

    include_once('../Config/Conexion.php');

    $DNI = $_POST['DNI'];
    $nombreAlumno = $_POST['NombreAlumno'];
    $apellidoAlumno = $_POST['ApellidoAlumno'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];

    $sql = "INSERT INTO alumnos(dni,Nombre,Apellido,Correo,Telefono)VALUES('$DNI','$nombreAlumno','$apellidoAlumno','$correo','$telefono')";

    $query = mysqli_query($conexion,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }

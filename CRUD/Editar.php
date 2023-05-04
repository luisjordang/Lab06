<?php 

    include_once("../Config/Conexion.php");

    $Id = $_POST['Id'];
    $dni = $_POST['DNI'];
    $Nombre = $_POST['NombreAlumno'];
    $Apellido = $_POST['ApellidoAlumno'];
    $Correo = $_POST['Correo'];
    $Telefono = $_POST['Telefono'];

    $sql = "UPDATE alumnos SET dni='$dni', Nombre='$Nombre', Apellido='$Apellido', Correo ='$Correo', Telefono='$Telefono' WHERE id='$Id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location: ../Index.php');
    }

?>
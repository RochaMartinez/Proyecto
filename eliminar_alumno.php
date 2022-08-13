<?php
if (!empty($_GET['id'])) {
    require("conexion.php");
    $idAlumno = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM alumno WHERE idAlumno = $idAlumno");
    mysqli_close($conexion);
    header("location: alumno.php");
}
?>
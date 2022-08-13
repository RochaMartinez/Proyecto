<?php
if (!empty($_GET['id'])) {
    require("conexion.php");
    $idProfesor = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM profesor WHERE idProfesor = $idProfesor");
    mysqli_close($conexion);
    header("location: profesor.php");
}
?>
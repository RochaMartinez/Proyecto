<?php
if (!empty($_GET['id'])) {
    require("conexion.php");
    $idMateria = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM materia WHERE idMateria = $idMateria");
    mysqli_close($conexion);
    header("location: materia.php");
}
?>
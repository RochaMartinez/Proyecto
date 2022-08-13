<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/form.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa fa-mortar-board"></i>
            <h4>Escuela</h4>
        </div>

        <div class="options__menu">	

            <a href="index.php" class="selected">
                <div class="option">
                    <i class="fa fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="materia.php">
                <div class="option">
                    <i class="fa fa-book" title="Blog"></i>
                    <h4>Materia</h4>
                </div>
            </a>

            <a href="alumno.php">
                <div class="option">
                    <i class="fa fa-address-book-o" title="Portafolio"></i>
                    <h4>Alumnos</h4>
                </div>
            </a>
            
            <a href="profesor.php">
                <div class="option">
                    <i class="fa fa-address-card" title="Cursos"></i>
                    <h4>Profesores</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        <?php include "conexion.php";
        if (!empty($_POST)) {
            $alert = "";
            if (empty($_POST['NombreMateria']) || empty($_POST['Dia']) || empty($_POST['Hora'])) {
                $alert = '<div class="alert alert-danger" role="alert">
                                            Todo los campos son obligatorios
                                        </div>';
            } else {
                $materia = $_POST['NombreMateria'];
                $dia = $_POST['Dia'];
                $hora = $_POST['Hora'];

                $query_insert = mysqli_query($conexion, "INSERT INTO materia (NombreMateria,Dia,Hora) values ('$materia', '$dia', '$hora')");
                if ($query_insert) {
                    $alert = '<div class="alert alert-primary" role="alert">
                                    Materia Registrada
                                </div>';
                } else {
                    $alert = '<div class="alert alert-danger" role="alert">
                                    Error al Guardar
                                </div>';
                }
            }
            mysqli_close($conexion);
        }
        ?>

        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
                <a href="materia.php" class="btn btn-sav-mat">Regresar</a>
            </div>

            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form action="" method="post" autocomplete="off">
                        <?php echo isset($alert) ? $alert : ''; ?>
                        <div class="form-group">
                            <label for="NombreMateria">Materia</label>
                            <input type="text" placeholder="Ingrese el nombre de la materia" name="NombreMateria" id="materia" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Dia">Día</label>
                            <input type="text" placeholder="Ingrese el día" name="Dia" id="dia" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Hora">Hora</label>
                            <input type="time" placeholder="Ingrese la hora" name="Hora" id="hora" class="form-control">
                        </div>
                        <input type="submit" value="Guardar materia" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/tabla.css">

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
    <h1>Lista de materias</h1>
    <div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Id</th>
							<th>Materia</th>
							<th>Día</th>
							<th>Hora</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include "conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM materia");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr class="campos">
									<td><?php echo $data['idMateria']; ?></td>
									<td><?php echo $data['NombreMateria']; ?></td>
									<td><?php echo $data['Dia']; ?></td>
									<td><?php echo $data['Hora']; ?></td>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>
    <h1>Lista de alumnos</h1>
    <div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido</th>
                            <th>Domicilio</th>
							<th>Teléfono</th>
                            <th>Carrera</th>
                            <th>IdMateria</th>
                            <th>Calificación</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include "conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM alumno");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr class="campos">
									<td><?php echo $data['idAlumno']; ?></td>
									<td><?php echo $data['Nombre']; ?></td>
									<td><?php echo $data['Apellido']; ?></td>
									<td><?php echo $data['Domicilio']; ?></td>
                                    <td><?php echo $data['Tel']; ?></td>
                                    <td><?php echo $data['Carrera']; ?></td>
                                    <td><?php echo $data['idMateria']; ?></td>
                                    <td><?php echo $data['Calificacion']; ?></td>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>
    <h1>Lista de profesores</h1>
    <div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Domicilio</th>
                            <th>Teléfono</th>
                            <th>idMateria</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include "conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM profesor");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr class="campos">
									<td><?php echo $data['idProfesor']; ?></td>
									<td><?php echo $data['Nombre']; ?></td>
									<td><?php echo $data['Apellido']; ?></td>
									<td><?php echo $data['Domicilio']; ?></td>
                                    <td><?php echo $data['Tel']; ?></td>
                                    <td><?php echo $data['IdMateria']; ?></td>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
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
							<th>Acciones</th>
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
									<td>
										<a href="editar.php?id=<?php echo $data['idProfesor']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>

										<form action="eliminar_profesor.php?id=<?php echo $data['idProfesor']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
										</form>
									</td>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="agregar_profesor.php" class="btn btn-add"><i class='fas fa-audio-description'></i></a>
    </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
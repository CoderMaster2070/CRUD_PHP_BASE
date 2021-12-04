<?php

	session_start();

	if(!$_SESSION["Ingreso"]){

		header("location:index.php?ruta=ingreso");

		exit();
	}

?>
	<br>
	<h1>EDITAR EMPLEADO</h1>

	<form method="post" action="">
		
		
		<?php

		$editar = new EmpleadosC();
		$editar -> EditarEmpleadoC();

		$actualizar = new EmpleadosC();
		$actualizar -> ActualizarEmpleadoC();


		?>

	</form>



<?php

	session_start();

	if(!$_SESSION["Ingreso"]){

		header("location:index.php?ruta=ingreso");

		exit();
	}

?>
	<br>
	<h1>Empleados</h1>

	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Puesto</th>
				<th>Salario</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			

			<?php	

			$mostrar = new EmpleadosC();
			$mostrar -> MostrarEmpleadosC();


			?>

		</tbody>

	</table>

	<?php 

	$eliminar = new EmpleadosC();
	$eliminar -> BorrarEmpleadoC();




	 ?>

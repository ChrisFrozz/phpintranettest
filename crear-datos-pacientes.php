<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Datos del paciente</h1>
	<p>
		Añade los datos del paciente
	</p>
	<br/>
	<form action="guardar-datos-pacientes.php" method="POST">
		<label for="nombre">Nombre del paciente (Categoria):</label>
		<input type="text" name="nombre" required="required"/>
                
                <label for="RUT-PACIENTES">RUT:</label>
		<input type="text" name="RUT-PACIENTES" required="required" placeholder="11.111.111-1"/>
                
                <label for="Profesiona">Profesional:</label>
                <input type="text" name="Profesional" required="required" placeholder="Nombre del profesional"/>
                
                <label for="Fecha">Fecha:</label>
                <input type="date" name="Fecha" />
                <br> </br>
		
		<input type="submit" value="Guardar" />
                
                
               
            <h1>Formulario</h1>
		
		<form action="" method="POST" enctype="multipart/form-data">
                        Prueba:
                       <select name="prueba">
                               <option value="hola">hola</option>
                               <option value="chao">batman</option><!-- comment -->
                               <option value="nose">la jungla</option>
                       </select>
			Peliculas:
			<select name="peliculas">
				<option value="Spiderman">Spiderman</option>
				<option value="Batman">Batman</option>
				<option value="La jungla de cristal">La jungla de cristal</option>
				<option value="Gran torino">Gran torino</option>
			</select>
			<br/>
		
			<input type="submit" value="Enviar" />
		</form>
	</form>

</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>
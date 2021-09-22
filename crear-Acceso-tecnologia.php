<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->

<div id="EvaluacionAccesoTecnologiaInformacion">
	<h1>Evaluacion acceso a la tecnologia</h1>
	<p>
		Añade nuevas evaluaciones.
	</p>
	<br/>
	<form action="guardar-entrada.php" method="POST">
            <label for="categoria">Nombre del paciente</label>
		<select name="categoria">
			<?php 
				$categorias = conseguirCategorias($db); 
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)): 
			?>
				<option value="<?=$categoria['id']?>">
					<?=$categoria['nombre']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
                <br><br/><!-- comment -->
		<label for="titulo">Titulo:</label>
		<input type="text" name="titulo" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
		
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
               
		
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->

<div id="EvaluacionAccesoTecnologia">
	<h1>Dispositivo(s) disponible(s) en domicilio</h1>
	<p>
		Contesta las siguientes preguntas.
	</p>
	<br/>
	<form>
            
            <label for="p1">¿Ocupas algun celular NO smart?</label>
            <select id="Celular no smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
            </br>
            </br>

            <label for="p2"> ¿Ocupas algun celular smart?</label>
            <select id="Celular smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
            
              </br>
            </br>

            <label for="p3">¿Ocupas alguna tablet?</label>
            <select id="Celular tablet">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
               </br>
            </br>

            <label for="p4">¿Ocupas algun computador?</label>
            <select id="computador">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
          
            </br>
            </br>
            <label for="p5">¿Ocupas alguna consola de juego?</label>
            <select id="Celular no smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
                <label for="">¿Cual?</label>
                <p><input type="text" name="observacion" /></p>
               
            </br>
            <label for="p4">¿Dispositivo de accesibilidad?</label>
            <select id="computador">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
                <label for="">¿Cual?</label>
                <p><input type="text" name="observacion" /></p>
             </br>
            <label for="p5">Otro</label>
                <p><input type="text" name="observacion" /></p>
              </br>   
            <label for="p5">Especificaciones dispositivos</label>
            <p><input type="text" name="observacion" /></p>
          


	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->

<div id="EvaluacionAccesoTecnologiaDos">
	<h1>Disponibilidad de Internet  en domicilio</h1>
	<p>
		Constesta las siguientes preguntas.
	</p>
	<br/>
	<form action="guardar-entrada.php" method="POST">
           <label for="p2"> ¿Tienes disponibilidad a internet?</label>
            <select id="Celular smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
            <br/>
             <label for="p2"> ¿Tienes disponibilidad a internet compartido desde el celular?</label>
            <select id="Celular smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
        <br/>
             <label for="p2"> ¿Tienes banda ancha?</label>
            <select id="Celular smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
             <br/>
             <label for="p2"> ¿Tienes internet desde el celular?</label>
            <select id="Celular smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
            <br/>
             <label for="p2"> ¿Tienes banda ancha a domicilio?</label>
            <select id="Celular smart">
                <option value="CNSV">No</option>
                <option value="CNSV">Si</option>
            </select>
              </br>
            <label for="p5">Otro</label>
                <p><input type="text" name="observacion" /></p>
              </br>   
            
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->



			
<?php require_once 'includes/pie.php'; ?>
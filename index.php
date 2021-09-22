<?php require_once 'includes/cabecera.php'; ?>
		

		
<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Ultimas entradas</h1>
	
	<?php 
		$entradas = conseguirEntradas($db, true);
		if(!empty($entradas)):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
				<article class="entrada">
					<a href="entrada.php?id=<?=$entrada['id']?>">
						<h2><?=$entrada['titulo']?></h2>
						<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
						<p>
							<?=substr($entrada['descripcion'], 0, 180)."..."?>
						</p>
					</a>
				</article>
	<?php
			endwhile;
		endif;
	?>

	<div id="ver-todas">
		<a href="entradas.php">Ver todas las entradas</a>
	</div>
        
         
</div> <!--fin principal-->

<div id="usuario-nologueado" class="bloquelateraltesteo">
             <h3>Buscar</h3>
             
             <br></br>

            <form action="buscar.php" method="POST"> 
                    <input type="text" name="busqueda" />
                    <input type="submit" value="Buscar" />
            </form>
             <br></br><!-- comment -->
             <br></br>
            
            <!--botones-->
            <a href="crear-datos-pacientes.php" class="boton">Datos personales de paciente</a>
            <a href="1-crear-acceso-tecnologia.php" class="boton boton-verde">Acceso a la tecnologia</a>  
            <a href="6-crear-uso-tecnologia.php" class="boton boton-verde">Uso de tecnologia</a> 
            <a href="5-crear-tipo-comunicador" class="boton boton-verde">Tipo de comunicador</a> 
            <a href="crear-modo-comunicativo.php" class="boton boton-verde">Modo comunicativo</a>  
            <a href="crear-punto-control.php" class="boton boton-verde">Punto de control</a>  
            <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
            
        </div>
			
<?php require_once 'includes/pie.php'; ?>
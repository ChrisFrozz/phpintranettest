<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"  /><!-- comment -->
        <title>INTRANET INRPAC</title>     
<!--        <link rel="stylesheet" type="text/css" href="./asset/css/styleeee.css" />  -->
        <link rel="stylesheet" type="text/css" href="./asset/css/style.css?ts=<?=time()?>" />
      

        
    </head>
    <body>
        <!-----CABECERA---->
     
            
        </nav>
        <header id="cabecera">
            <!---LOGO--->
            <div id="logo">
                <a href="pagina-inicial.php">
                  INTRANET INRPAC
                </a>
            </div>
            
        
       <!-- MENU -->
			<nav id="menu">
				<ul>
					<li>
						<a href="index.php">Inicio</a>
					</li>
					<?php 
						$categorias = conseguirCategorias($db);
						if(!empty($categorias)):
							while($categoria = mysqli_fetch_assoc($categorias)): 
					?>
								<li>
									<a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
								</li>
					<?php
							endwhile;
						endif;
					?>
					<li>
						<a href="index.php">Sobre mí</a>
					</li>
					<li>
						<a href="index.php">Contacto</a>
					</li>
				</ul>
			</nav>
			
			<div class="clearfix"></div>
		</header>
		
		<div id="contenedor">
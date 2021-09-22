<!-- BARRA LATERAL -->


<aside id="lateral">

    
	

    <?php if (isset($_SESSION['usuario'])): ?>
        
        <div id="usuario-logueado" class="bloquelateraltesteo">
             <h3>Buscar</h3>
             
             <br></br>

            <form action="buscar.php" method="POST"> 
                    <input type="text" name="busqueda" />
                    <input type="submit" value="Buscar" />
            </form>
             <br></br><!-- comment -->
             <br></br>
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']; ?></h3>
            <!--botones-->
            <a href="crear-datos-pacientes.php" class="boton">Datos personales de paciente</a>
            <a href="crear-Acceso-tecnologia.php" class="boton boton-verde">Acceso a la tecnologia</a>  
            <a href="crear-uso-tecnologia.php" class="boton boton-verde">Uso de tecnologia</a> 
            <a href="crear-tipo-comunicador.php" class="boton boton-verde">Tipo de comunicador</a> 
            <a href="crear-modo-comunicativo.php" class="boton boton-verde">Modo comunicativo</a>  
            <a href="crear-punto-control.php" class="boton boton-verde">Punto de control</a>  
            <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
            
        </div>
        
    <?php endif; ?>
</aside>

<aside id="sidebar">
    <?php if (!isset($_SESSION['usuario'])): ?>
        <div id="login" class="bloque">
            <h3>Identificate</h3>

            <?php if (isset($_SESSION['error_login'])): ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['error_login']; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST"> 
                <label for="email">Email</label>
                <input type="email" name="email" />

                <label for="password">Contraseña</label>
                <input type="password" name="password" />
             <nav id="botones-entrar-registrar">
                 <ul>
                    <li>
                       <input type="submit" value="Entrar" />
                   </li>
                   <li>
                       <input type="submit" value="Registrate" />
                   </li>
                </ul>
             </nav>
                <div class="clearfix"></div>
            </form>
        </div>

        <div id="register" class="bloque">
            <h3>Resgistrate</h3>

            <!-- Mostrar errores -->
            <?php if (isset($_SESSION['completado'])): ?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['completado'] ?>
                </div>
            <?php elseif (isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>

            <form action="registro.php" method="POST"> 
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                <input type="submit" name="submit" value="Registrar" />
            </form>
            <?php borrarErrores(); ?>
        </div>
    <?php endif; ?>
</aside>
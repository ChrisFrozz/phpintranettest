<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script type="text/javascript" src="js/jquery.js"></script>
              <script type="text/javascript">
                  function mostrar(id) {
                      if (id === "estudiante") {
                          $("#estudiante").show();
                          $("#trabajador").hide();
                          $("#autonomo").hide();
                          $("#paro").hide();
                      }

                      if (id === "trabajador") {
                          $("#estudiante").hide();
                          $("#trabajador").show();
                          $("#autonomo").hide();
                          $("#paro").hide();
                      }

                      if (id === "autonomo") {
                          $("#estudiante").hide();
                          $("#trabajador").hide();
                          $("#autonomo").show();
                          $("#paro").hide();
                      }

                      if (id === "paro") {
                          $("#estudiante").hide();
                          $("#trabajador").hide();
                          $("#autonomo").hide();
                          $("#paro").show();
                      }

                           if (id === "E") {
                          $("#E").show();
                          $("#F").hide();
                          $("#G").hide();
                          $("#H").hide();
                      }
                      if (id === "F") {
                          $("#E").hide();
                          $("#F").show();
                          $("#G").hide();
                          $("#H").hide();
                      }
                      if (id === "G") {
                          $("#E").hide();
                          $("#F").hide();
                          $("#G").show();
                          $("#H").hide();
                      }
                        if (id === "H") {
                          $("#E").hide();
                          $("#F").hide();
                          $("#G").hide();
                          $("#H").show();
                       }    
                          if (id === "I") {
                          $("#I").show();
                          $("#J").hide();
                          $("#K").hide();
                          $("#M").hide();
                          $("#N").hide();
                         }  
                          if (id === "J") {
                          $("#I").hide();
                          $("#J").show();
                          $("#K").hide();
                          $("#M").hide();
                          $("#N").hide();
                          } 
                          if (id === "K") {
                          $("#I").hide();
                          $("#J").hide();
                          $("#K").show();
                          $("#M").hide();
                          $("#N").hide();
                          } 
                          if (id === "M") {
                          $("#I").hide();
                          $("#J").hide();
                          $("#K").hide();
                          $("#M").show();
                          $("#N").hide();
                          } 
                           if (id === "N") {
                          $("#I").hide();
                          $("#J").hide();
                          $("#K").hide();
                          $("#M").hide();
                          $("#N").show();
                      }
                      
                        if (id === "O") {
                          $("#O").show();
                          $("#P").hide();
                          $("#Q").hide();
                      }
                      
                        if (id ==="P"){
                          $("#O").hide();
                          $("#P").show();
                          $("#Q").hide();
                      }
                      
                        if (id == "Q") {
                          $("#O").hide();
                          $("#P").hide();
                          $("#Q").show();
                      }
                      
                        if (id === "R") {
                          $("#R").show();
                          $("#S").hide();
                      }
                        if (id === "S") {
                          $("#R").hide();
                          $("#S").show();
                      }
                  }
        </script>



        <div id="EvaluacionUsoTecnologiaInformacion">
                <h1>Nivel de uso de la tecnologia</h1>
                <br/>
                <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Ut ut purus ut dolor placerat gravida. Vestibulum ante ipsum primis in 
                        faucibus orci luctus et ultrices posuere cubilia curae; Nullam tristique mauris urna, 
                        sed interdum nunc imperdiet sed. Integer ullamcorper tellus vel scelerisque eleifend. Fusce viverra 
                        tincidunt ultrices. Donec tortor erat, bibendum porttitor purus in, condimentum eleifend mauris. Duis
                        pellentesque massa vitae sodales maximus. Donec volutpat enim sit amet tellus molestie venenatis. 
                        Phasellus tincidunt nec risus eget congue. Phasellus dapibus dui vel dolor sollicitudin convallis.
                        Suspendisse potenti. Morbi pellentesque eu elit id cursus. Maecenas sed purus laoreet, congue elit ac,
                        auctor elit. Aliquam erat volutpat. Donec suscipit, sem eu egestas congue, nulla nunc pellentesque risus,
                        lobortis efficitur ex sapien et odio..
                </p>
                <br/>

                <?php borrarErrores(); ?>
        </div> <!--fin principal-->

        <div id="EvaluacionUsoTecnologia">
                <h1>a) Definiciones de nivel:</h1>
                <br/>
                <form action="guardar-entrada.php" method="POST">
                 
                    <label for="sexo"> Nivel pasivo: <input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                        Usuarie que responde a estímulos entregados 
                        por el dispositivo tecnológico, presenta respuesta emotiva a la interacción, no logra manejar el dispositivo, respuestas  inconsistentes y/o por periodos muy breves. 
                    </p>
                     <br/>
                    <label for="sexo"> Nivel interacción básica: <input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                       Usuarie que responde a estímulos entregados por el dispositivo tecnológico, presenta respuesta emotiva a la interacción, no logra manejar el dispositivo, respuestas consistentes en periodos breves
                    </p><!-- comment -->
                     <br/>
                    <label for="sexo"> Nivel interacción involucrada:<input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                       respuestas consistentes en períodos breves a moderados, logra manejo sencillo  del dispositivo, realiza y finaliza una actividad simple.
                    </p>
                     <br/>
                      <label for="sexo"> Nivel interacción activa:<input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                        Respuestas consistentes y sostenida, logra manejo básico del dispositivo, usa funciones y aplicaciones, reconoce elementos de uso cotidiano. 
                    </p>
                     <br/>
                      <label for="sexo"> Nivel interacción activa avanzada:<input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                       respuestas consistentes y sostenida, logra manejo avanzado del dispositivo, genera productos, usa funciones y aplicaciones en actividades cotidianas.
                    </p>
                     <br/>
                    
                </form>
                <?php borrarErrores(); ?>
        </div> <!--fin principal-->

 <div id="EvaluacionUsoTecnologiaDos">
                <h1>b) Evaluación por nivel: </h1>

                <br/>
                <form action="guardar-entrada.php" method="POST">
                  <form action="index.php" method="post">
                      
                      
                      
<!--                     SECCION Nivel pasivo:-->
                    Nivel pasivo:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="estudiante">Logra percibir estímulos audibles, visuales o ambos del dispositivo tecnológico (videos, canciones, sonidos)</option>
                        <option value="trabajador">Genera una respuesta positiva (corporal, gestual, sonidos, otros) cuando se le presenta un estímulo en el dispositivo tecnológico</option>
                        <option value="autonomo">Podría generar señales de solicitud o molestia ante el retiro del estímulo.</option>
                        <option value="paro">Mantiene la atención en el dispositivo, en un rango de tiempo de 10 segundos a 2 minutos cuando está presente un estímulo.</option>
                     </select>
                    </form>
                          <!--                  Alternativa Nivel pasivo-->
                 <div id="estudiante" style="display: none;">
                 <br/>
                 <h2>Logra percibir estímulos audibles, visuales o ambos del dispositivo tecnológico (videos, canciones, sonidos)</h2>
                
                 <br/>
                 <form action="index.php" method="post">
                     
                      <label for="sexo">    <input type="checkbox" name="sexo" value="hombre"/>Si </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/>No: esta etapa supera la capacidad del niño (a) </label>
                      <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/>No: el niño(a) ha superado esta etapa  </label>
                     <input type="submit" name="send" value="Enviar" />
                     
                 </form>
                 </div>
                 
                 <div id="trabajador" style="display: none;">
                 <br/>
                 <h2>Genera una respuesta positiva (corporal, gestual, sonidos, otros) cuando se le presenta un estímulo en el dispositivo tecnológico</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">    <input type="checkbox" name="sexo" value="hombre"/>Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">  <input type="checkbox" name="sexo" value="hombre"/>No: porque las habilidades del niño superan esta opción </label>
                    <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                    
                 <div id="autonomo" style="display: none;">
                 <br/>
                 <h2>Podría generar señales de solicitud o molestia ante el retiro del estímulo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">  <input type="checkbox" name="sexo" value="hombre"/> Si  </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">  <input type="checkbox" name="sexo" value="hombre"/>No: porque las habilidades del niño superan esta opción </label>
                    <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>  
                    
                 <div id="paro" style="display: none;">
                 <br/>
                 <h2>Mantiene la atención en el dispositivo, en un rango de tiempo de 10 segundos a 2 minutos cuando está presente un estímulo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                          
                          
                          
                 
                    <!--                     SECCION  Nivel interaccion basica:-->
                    <br/><!-- comment -->
                     Nivel interaccion basica:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="E">Percibe y disfruta estímulos audiovisuales entregados a través del dispositivo tecnológico. </option>
                        <option value="F">Logra realizar una interacción sencilla, como detener o echar a andar música o videos, tocar la pantalla o señala elementos que sean de su interés</option>
                        <option value="G">Responde a ellas con gestos, movimientos corporales, sonidos de solicitud o rechazo.</option>
                        <option value="H">Mantiene la atención en el dispositivo, en un rango de 2 a 5 minutos cuando está presente el estímulo. </option>
                     </select>
                    </form>
                <br/>
                
                <!--   Alternativa Nivel pasivo  Nivel interaccion basica:-->
                  
                  <div id="E" style="display: none;">
                 <br/>
                 <h2>Percibe y disfruta estímulos audiovisuales entregados a través del dispositivo tecnológico.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                
                 <div id="F" style="display: none;">
                 <br/>
                 <h2>Logra realizar una interacción sencilla, como detener o echar a andar música o videos, tocar la pantalla o señala elementos que sean de su interés</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                <div id="G" style="display: none;">
                 <br/>
                 <h2>Responde a ellas con gestos, movimientos corporales, sonidos de solicitud o rechazo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                   <div id="H" style="display: none;">
                 <br/>
                 <h2>Mantiene la atención en el dispositivo, en un rango de 2 a 5 minutos cuando está presente el estímulo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                 
                 <!--                   SECCION  Nivel Interacción Involucrada-->
                    <br/><!-- comment -->
                     Nivel Interacción Involucrada:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="I">Logra realizar funciones básicas con el dispositivo tecnológico (prender/apagar, manejar volumen, entrar a una aplicación)</option>
                        <option value="J">Interactúa con el material audiovisual cantando, copiando movimientos o respondiendo a consultas (tipo dora la exploradora)</option>
                        <option value="K">Interactúa con el dispositivo tecnológico, respondiendo a una acción solicitada por 
                            este (volver atrás, cerrar una ventana, aceptar o rechazar una acción, cliquear 1 o 2 veces, etc).</option>
                        <option value="M">Realiza juegos tipo causa efectos simples como reventar burbujas, peek a boo (esta no esta), lavar autos, memorice, rompecabeza.</option>
                         <option value="N">Logra mantener la atención en el dispositivo tecnológico hasta completar una tarea o actividad deseada</option>
                     </select>
                    </form>
                    <br/>
                    
                    <!--   Alternativa Nivel pasivo  Interacción Involucrada-->
                  
                  <div id="I" style="display: none;">
                 <br/>
                 <h2>Logra realizar funciones básicas con el dispositivo tecnológico (prender/apagar, manejar volumen, entrar a una aplicación)</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="J" style="display: none;">
                 <br/>
                 <h2>Interactúa con el material audiovisual cantando, copiando movimientos o respondiendo a consultas (tipo dora la exploradora)</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="K" style="display: none;">
                 <br/>
                 <h2>Interactúa con el dispositivo tecnológico, respondiendo a una acción solicitada por 
                            este (volver atrás, cerrar una ventana, aceptar o rechazar una acción, cliquear 1 o 2 veces, etc).</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="M" style="display: none;">
                 <br/>
                 <h2>Realiza juegos tipo causa efectos simples como reventar burbujas, peek a boo (esta no esta), lavar autos, memorice, rompecabeza.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="N" style="display: none;">
                 <br/>
                 <h2>Logra mantener la atención en el dispositivo tecnológico hasta completar una tarea o actividad deseada</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                    
                  <!--                  SECCION  Nivel Interacción activa-->
                    <br/><!-- comment -->
                     Nivel Interacción activa:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="O">Puede identificar los logos de las aplicaciones de uso frecuente, abre y cierra aplicaciones, logra seleccionar dentro de las opciones de una aplicación</option>
                        <option value="P">Logra asociar imágenes, puede parear conceptos básicos, ordena secuencias y planifica acciones sencillas. </option>
                        <option value="Q">Es capaz de utilizar más de una aplicación u herramienta del dispositivo tecnológico al mismo tiempo, para realizar una actividad o tarea </option>
                     </select>
                        </form>
                        <br/>
                        
                    <div id="O" style="display: none;">
                     <br/>
                     <h2>Puede identificar los logos de las aplicaciones de uso frecuente, abre y cierra aplicaciones, logra seleccionar dentro de las opciones de una aplicación</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                        
                          <div id="P" style="display: none;">
                     <br/>
                     <h2>Logra asociar imágenes, puede parear conceptos básicos, ordena secuencias y planifica acciones sencillas.</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                        
                          <div id="Q" style="display: none;">
                     <br/>
                     <h2>Es capaz de utilizar más de una aplicación u herramienta del dispositivo tecnológico al mismo tiempo, para realizar una actividad o tarea</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del niño son menores a esto </label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del niño superan esta opción</label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                        
                        
                        
                        
                      <!--               SECCION     Nivel Interacción activa avanzada-->
                    <br/><!-- comment -->
                     Nivel Interacción activa avanzada:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="R">Realiza diversas actividades de su vida cotidiana a partir del uso del dispositivo tecnológico, utilizando diversas aplicaciones o herramientas de este (comunicación, ocio, trabajo, juego)</option>
                        <option value="S">Logra generar un producto a través del uso del dispositivo (hacer un documento, correo electrónico, subir material a plataformas, etc.)</option>
                     </select>
                    </form>
                    
                          <div id="R" style="display: none;">
                     <br/>
                     <h2>Realiza diversas actividades de su vida cotidiana a partir del uso del dispositivo tecnológico, utilizando diversas aplicaciones o herramientas de este (comunicación, ocio, trabajo, juego)</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: Las habilidades del niño son menores a esto </label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                    
                          <div id="S" style="display: none;">
                     <br/>
                     <h2>Logra generar un producto a través del uso del dispositivo (hacer un documento, correo electrónico, subir material a plataformas, etc.)</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                         
                    
                         
                   
                  

                <?php borrarErrores(); ?>
</div> <!--fin principal-->

			
<?php require_once 'includes/pie.php'; ?>
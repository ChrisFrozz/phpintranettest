<?php require_once 'includes/cabecera.php'; ?>	


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
                        Usuarie que responde a est??mulos entregados 
                        por el dispositivo tecnol??gico, presenta respuesta emotiva a la interacci??n, no logra manejar el dispositivo, respuestas  inconsistentes y/o por periodos muy breves. 
                    </p>
                     <br/>
                    <label for="sexo"> Nivel interacci??n b??sica: <input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                       Usuarie que responde a est??mulos entregados por el dispositivo tecnol??gico, presenta respuesta emotiva a la interacci??n, no logra manejar el dispositivo, respuestas consistentes en periodos breves
                    </p><!-- comment -->
                     <br/>
                    <label for="sexo"> Nivel interacci??n involucrada:<input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                       respuestas consistentes en per??odos breves a moderados, logra manejo sencillo  del dispositivo, realiza y finaliza una actividad simple.
                    </p>
                     <br/>
                      <label for="sexo"> Nivel interacci??n activa:<input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                        Respuestas consistentes y sostenida, logra manejo b??sico del dispositivo, usa funciones y aplicaciones, reconoce elementos de uso cotidiano. 
                    </p>
                     <br/>
                      <label for="sexo"> Nivel interacci??n activa avanzada:<input type="checkbox" name="sexo" value="hombre"/> </label>
                    <p>
                       respuestas consistentes y sostenida, logra manejo avanzado del dispositivo, genera productos, usa funciones y aplicaciones en actividades cotidianas.
                    </p>
                     <br/>
                    
                </form>
                <?php borrarErrores(); ?>
        </div> <!--fin principal-->

 <div id="EvaluacionUsoTecnologiaDos">
                <h1>b) Evaluaci??n por nivel: </h1>

                <br/>
                <form action="guardar-entrada.php" method="POST">
                  <form action="index.php" method="post">
                      
                      
                      
<!--                     SECCION Nivel pasivo:-->
                    Nivel pasivo:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="estudiante">Logra percibir est??mulos audibles, visuales o ambos del dispositivo tecnol??gico (videos, canciones, sonidos)</option>
                        <option value="trabajador">Genera una respuesta positiva (corporal, gestual, sonidos, otros) cuando se le presenta un est??mulo en el dispositivo tecnol??gico</option>
                        <option value="autonomo">Podr??a generar se??ales de solicitud o molestia ante el retiro del est??mulo.</option>
                        <option value="paro">Mantiene la atenci??n en el dispositivo, en un rango de tiempo de 10 segundos a 2 minutos cuando est?? presente un est??mulo.</option>
                     </select>
                    </form>
                          <!--                  Alternativa Nivel pasivo-->
                 <div id="estudiante" style="display: none;">
                 <br/>
                 <h2>Logra percibir est??mulos audibles, visuales o ambos del dispositivo tecnol??gico (videos, canciones, sonidos)</h2>
                
                 <br/>
                 <form action="index.php" method="post">
                     
                      <label for="sexo">    <input type="checkbox" name="sexo" value="hombre"/>Si </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/>No: esta etapa supera la capacidad del ni??o (a) </label>
                      <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/>No: el ni??o(a) ha superado esta etapa  </label>
                     <input type="submit" name="send" value="Enviar" />
                     
                 </form>
                 </div>
                 
                 <div id="trabajador" style="display: none;">
                 <br/>
                 <h2>Genera una respuesta positiva (corporal, gestual, sonidos, otros) cuando se le presenta un est??mulo en el dispositivo tecnol??gico</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">    <input type="checkbox" name="sexo" value="hombre"/>Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">  <input type="checkbox" name="sexo" value="hombre"/>No: porque las habilidades del ni??o superan esta opci??n </label>
                    <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                    
                 <div id="autonomo" style="display: none;">
                 <br/>
                 <h2>Podr??a generar se??ales de solicitud o molestia ante el retiro del est??mulo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">  <input type="checkbox" name="sexo" value="hombre"/> Si  </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">  <input type="checkbox" name="sexo" value="hombre"/>No: porque las habilidades del ni??o superan esta opci??n </label>
                    <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>  
                    
                 <div id="paro" style="display: none;">
                 <br/>
                 <h2>Mantiene la atenci??n en el dispositivo, en un rango de tiempo de 10 segundos a 2 minutos cuando est?? presente un est??mulo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                          
                          
                          
                 
                    <!--                     SECCION  Nivel interaccion basica:-->
                    <br/><!-- comment -->
                     Nivel interaccion basica:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="E">Percibe y disfruta est??mulos audiovisuales entregados a trav??s del dispositivo tecnol??gico. </option>
                        <option value="F">Logra realizar una interacci??n sencilla, como detener o echar a andar m??sica o videos, tocar la pantalla o se??ala elementos que sean de su inter??s</option>
                        <option value="G">Responde a ellas con gestos, movimientos corporales, sonidos de solicitud o rechazo.</option>
                        <option value="H">Mantiene la atenci??n en el dispositivo, en un rango de 2 a 5 minutos cuando est?? presente el est??mulo. </option>
                     </select>
                    </form>
                <br/>
                
                <!--   Alternativa Nivel pasivo  Nivel interaccion basica:-->
                  
                  <div id="E" style="display: none;">
                 <br/>
                 <h2>Percibe y disfruta est??mulos audiovisuales entregados a trav??s del dispositivo tecnol??gico.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                
                 <div id="F" style="display: none;">
                 <br/>
                 <h2>Logra realizar una interacci??n sencilla, como detener o echar a andar m??sica o videos, tocar la pantalla o se??ala elementos que sean de su inter??s</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                <div id="G" style="display: none;">
                 <br/>
                 <h2>Responde a ellas con gestos, movimientos corporales, sonidos de solicitud o rechazo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                   <div id="H" style="display: none;">
                 <br/>
                 <h2>Mantiene la atenci??n en el dispositivo, en un rango de 2 a 5 minutos cuando est?? presente el est??mulo.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                
                 
                 <!--                   SECCION  Nivel Interacci??n Involucrada-->
                    <br/><!-- comment -->
                     Nivel Interacci??n Involucrada:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="I">Logra realizar funciones b??sicas con el dispositivo tecnol??gico (prender/apagar, manejar volumen, entrar a una aplicaci??n)</option>
                        <option value="J">Interact??a con el material audiovisual cantando, copiando movimientos o respondiendo a consultas (tipo dora la exploradora)</option>
                        <option value="K">Interact??a con el dispositivo tecnol??gico, respondiendo a una acci??n solicitada por 
                            este (volver atr??s, cerrar una ventana, aceptar o rechazar una acci??n, cliquear 1 o 2 veces, etc).</option>
                        <option value="M">Realiza juegos tipo causa efectos simples como reventar burbujas, peek a boo (esta no esta), lavar autos, memorice, rompecabeza.</option>
                         <option value="N">Logra mantener la atenci??n en el dispositivo tecnol??gico hasta completar una tarea o actividad deseada</option>
                     </select>
                    </form>
                    <br/>
                    
                    <!--   Alternativa Nivel pasivo  Interacci??n Involucrada-->
                  
                  <div id="I" style="display: none;">
                 <br/>
                 <h2>Logra realizar funciones b??sicas con el dispositivo tecnol??gico (prender/apagar, manejar volumen, entrar a una aplicaci??n)</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="J" style="display: none;">
                 <br/>
                 <h2>Interact??a con el material audiovisual cantando, copiando movimientos o respondiendo a consultas (tipo dora la exploradora)</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="K" style="display: none;">
                 <br/>
                 <h2>Interact??a con el dispositivo tecnol??gico, respondiendo a una acci??n solicitada por 
                            este (volver atr??s, cerrar una ventana, aceptar o rechazar una acci??n, cliquear 1 o 2 veces, etc).</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="M" style="display: none;">
                 <br/>
                 <h2>Realiza juegos tipo causa efectos simples como reventar burbujas, peek a boo (esta no esta), lavar autos, memorice, rompecabeza.</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                      <div id="N" style="display: none;">
                 <br/>
                 <h2>Logra mantener la atenci??n en el dispositivo tecnol??gico hasta completar una tarea o actividad deseada</h2>
                 <br/>
                 <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                    <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                     <input type="submit" name="send" value="Enviar" />
                 </form>
                 </div>
                    
                    
                  <!--                  SECCION  Nivel Interacci??n activa-->
                    <br/><!-- comment -->
                     Nivel Interacci??n activa:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="O">Puede identificar los logos de las aplicaciones de uso frecuente, abre y cierra aplicaciones, logra seleccionar dentro de las opciones de una aplicaci??n</option>
                        <option value="P">Logra asociar im??genes, puede parear conceptos b??sicos, ordena secuencias y planifica acciones sencillas. </option>
                        <option value="Q">Es capaz de utilizar m??s de una aplicaci??n u herramienta del dispositivo tecnol??gico al mismo tiempo, para realizar una actividad o tarea </option>
                     </select>
                        </form>
                        <br/>
                        
                    <div id="O" style="display: none;">
                     <br/>
                     <h2>Puede identificar los logos de las aplicaciones de uso frecuente, abre y cierra aplicaciones, logra seleccionar dentro de las opciones de una aplicaci??n</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                        
                          <div id="P" style="display: none;">
                     <br/>
                     <h2>Logra asociar im??genes, puede parear conceptos b??sicos, ordena secuencias y planifica acciones sencillas.</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                        
                          <div id="Q" style="display: none;">
                     <br/>
                     <h2>Es capaz de utilizar m??s de una aplicaci??n u herramienta del dispositivo tecnol??gico al mismo tiempo, para realizar una actividad o tarea</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: porque las habilidades del ni??o son menores a esto </label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> no: porque las habilidades del ni??o superan esta opci??n</label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                        
                        
                        
                        
                      <!--               SECCION     Nivel Interacci??n activa avanzada-->
                    <br/><!-- comment -->
                     Nivel Interacci??n activa avanzada:
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="Vacio">Seleccione una opcion</option>
                        <option value="R">Realiza diversas actividades de su vida cotidiana a partir del uso del dispositivo tecnol??gico, utilizando diversas aplicaciones o herramientas de este (comunicaci??n, ocio, trabajo, juego)</option>
                        <option value="S">Logra generar un producto a trav??s del uso del dispositivo (hacer un documento, correo electr??nico, subir material a plataformas, etc.)</option>
                     </select>
                    </form>
                    
                          <div id="R" style="display: none;">
                     <br/>
                     <h2>Realiza diversas actividades de su vida cotidiana a partir del uso del dispositivo tecnol??gico, utilizando diversas aplicaciones o herramientas de este (comunicaci??n, ocio, trabajo, juego)</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                        <label for="sexo"> <input type="checkbox" name="sexo" value="hombre"/> No: Las habilidades del ni??o son menores a esto </label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                    
                          <div id="S" style="display: none;">
                     <br/>
                     <h2>Logra generar un producto a trav??s del uso del dispositivo (hacer un documento, correo electr??nico, subir material a plataformas, etc.)</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si </label>
                         <input type="submit" name="send" value="Enviar" />
                     </form>
                     </div>
                         
                    
                         
                   
                  

                <?php borrarErrores(); ?>
</div> <!--fin principal-->

			
<?php require_once 'includes/pie.php'; ?>
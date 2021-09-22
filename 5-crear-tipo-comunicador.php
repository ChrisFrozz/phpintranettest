<?php require_once 'includes/cabecera.php'; ?>	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script type="text/javascript" src="js/jquery.js"></script>
              <script type="text/javascript">
                  function mostrar(id) {
                        if (id === "O") {
                          $("#O").show();
                          $("#P").hide();
                          $("#Q").hide();
                      }
                      
                        if (id === "P") {
                          $("#O").hide();
                          $("#P").show();
                          $("#Q").hide();
                      }
                      
                        if (id === "Q") {
                          $("#O").hide();
                          $("#P").hide();
                          $("#Q").show();
                      }
                      
                        if (id === "T") {
                          $("#T").show();
                          $("#U").hide();
                      }
                        if (id === "U") {
                          $("#T").hide();
                          $("#U").show();
                      }
                       if (id === "V") {
                          $("#V").show();
                          $("#W").hide();
                          $("#X").hide();
                          
                      }
                       if (id === "W") {
                          $("#V").hide();
                          $("#W").show();
                          $("#X").hide();
                      }
                       if (id === "X") {
                          $("#V").hide();
                          $("#W").hide();
                          $("#X").show();
                      }
                       if (id === "AA") {
                          $("#AA").show();
                          $("#BA").hide();
                      }
                      if (id === "BA") {
                          $("#AA").hide();
                          $("#BA").show();
                      }
                       if (id === "CA") {
                          $("#CA").show();
                          $("#DA").hide();
                          $("#EA").hide();
                      }
                       if (id === "DA") {
                          $("#CA").hide();
                          $("#DA").show();
                          $("#EA").hide();
                      }
                       if (id === "EA") {
                          $("#CA").hide();
                          $("#DA").hide();
                          $("#EA").show();
                      }
                        if (id === "FA") {
                          $("#FA").show();
                          $("#GA").hide();
                      }
                         if (id === "GA") {
                          $("#FA").hide();
                          $("#GA").show();
                      }
                         if (id === "HA") {
                          $("#HA").show();
                          $("#IA").hide();
                          $("#JA").hide();
                      }
                          if (id === "IA") {
                          $("#HA").hide();
                          $("#IA").show();
                          $("#JA").hide();
                      }
                          if (id === "JA") {
                          $("#HA").hide();
                          $("#IA").hide();
                          $("#JA").show();
                      }
                         if (id === "KA") {
                          $("#KA").show();
                          $("#MA").hide();
                      }
                         if (id === "MA") {
                          $("#KA").hide();
                          $("#MA").show();
                      }
                      if (id === "NA") {
                          $("#NA").show();
                          $("#OA").hide();
                      }
                      if (id === "OA") {
                          $("#NA").hide();
                          $("#OA").show();
                      }
                      if (id === "PA") {
                          $("#PA").show();
                          $("#QA").hide();
                          $("#RA").hide();
                      }
                      if (id === "QA") {
                          $("#PA").hide();
                          $("#QA").show();
                          $("#RA").hide();
                      }
                      if (id === "RA") {
                          $("#PA").hide();
                          $("#QA").hide();
                          $("#RA").show();
                      }
                      if (id === "SA") {
                          $("#SA").show();
                          $("#TA").hide();
                          $("#UA").hide();
                      }
                      if (id === "TA") {
                          $("#SA").hide();
                          $("#TA").show();
                          $("#UA").hide();
                      }
                      if (id === "UA") {
                          $("#SA").hide();
                          $("#TA").hide();
                          $("#UA").show();
                      }
                      if (id === "VA") {
                          $("#VA").show();
                          $("#WA").hide();
                      }
                      if (id === "WA") {
                          $("#VA").hide();
                          $("#WA").show();
                      }
                      if (id === "XA") {
                          $("#XA").show();
                          $("#YA").hide();
                      }
                      if (id === "YA") {
                          $("#XA").hide();
                          $("#YA").show();
                      }
                       if (id === "ZA") {
                          $("#ZA").show();
                          $("#AB").hide();
                      }
                      if (id === "AB") {
                          $("#ZA").hide();
                          $("#AB").show();
                      }
                   
                  }
        </script>

<!-- CAJA PRINCIPAL -->
    <div id="EvaluacionUsoTecnologiaInformacion">
                <h1>Tipo de comunicador:</h1>
                <br/>
                <h3>Matriz de Comunicación </h3><h5>©2006 de Charity Rowland </h5>
                <br/>
                <p>
                     Marque UNA de las cuatro afirmaciones siguientes que describan mejor  las habilidades comunicativas de la persona.  
                </p>
                <br/>
                
                <b>A)No parece que la persona tenga un control real sobre su cuerpo  todavía. La única manera que tengo de saber que quiere algo es porque se  queja o llora cuando está descontento o incómodo, y sonríe o  hace ruidos o se calma cuando está contento y cómodo. Si marcó esta  afirmación, vaya a la sección A.</b> 
                   <br/>
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="U">No</option>
                        <option value="T">Si</option>
                      
                     </select>
                    </form>
                    
                   <div id="T" style="display: none;">
                     <br/>
                     <p><b>A.1 Expresa incomodidad:</b> ¿Puede darse cuenta de cuándo la persona no está cómodo (con dolor, mojado, hambriento,  asustado)?</p>
                     <br/>
                     <form action="index.php" method="post">
                         <b>¿Qué hace la persona(a) para que note que no está cómodo(a)?</b>
                          <br/><br/>
                          
                          
                    
                                     Movimientos corporales: 
                                     
                    <br/>
              
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="V">Cambia de postura (endurece el cuerpo, se retuerce, se da vuelta):</option>
                        <option value="W">Movimientos de extremidades (patea, agita los brazos)</option>
                        <option value="X">Movimientos de cabeza (aparta la cabeza)</option>
                     </select>
                    </form>
                    
                          <div id="V" style="display: none;">
                     <br/>
                     <h2>Cambia de postura (endurece el cuerpo, se retuerce, se da vuelta):</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> No se utiliza</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Emergente</label><!-- comment -->
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Dominado</label>
                      
                     </form>
                     </div>
                    
                          <div id="W" style="display: none;">
                     <br/>
                     <h2>Movimientos de extremidades (patea, agita los brazos)</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> No se utiliza</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Emergente</label><!-- comment -->
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Dominado</label>
                     </form>
                     </div>
                     
                      <div id="X" style="display: none;">
                     <br/>
                     <h2>Movimientos de cabeza (aparta la cabeza)</h2>
                     <br/>
                     <br/>
                        <label for="nombre">Observacion: </label><!-- comment -->
                        <p><input type="text" name="nombre" /></p><!-- comment -->
                        <input type="submit" value="Enviar" />
                        
                     
                     </div>
                        <br/>
                         <br/>
                          <b> Primeros sonidos:  </b>
                                     
                    <br/>

                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Llora</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Gruñe</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Chilla</label>
                         <br/>
                        <label for="nombre">Observacion: </label><!-- comment -->
                        <p><input type="text" name="nombre" /></p><!-- comment -->
                        <input type="submit" value="Enviar" />
             
                
                         <br/>
                         <br/>
              
              
                        <b> Expresiones faciales:  </b>
                                     
                    <br/>
              
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Hace muecas</label>
                         <br/>
                        <label for="nombre">Observacion: </label><!-- comment -->
                        <p><input type="text" name="nombre" /></p><!-- comment -->
                        <input type="submit" value="Enviar" />
                    <br/>
                    <br/> 
                     <br/>
                     
<!--                     Seleccion A2-->
                     <p><b>A.2 Expresa comodidad:</b> ¿Puede darse cuenta de cuándo la persona está contento, cómodo o con buen ánimo? </p>
                     <br/>
                      <br/>
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="BA">No</option>
                        <option value="AA">Si</option>
                     </select>
                    </form>
                    
                   <div id="AA" style="display: none;">
                     <br/>
                     <p><b>¿qué hace la persona(a) para que note que está cómodo(a)?</b> </p>
                     <br/>
                     
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="CA">Movimientos corporales:</option>
                        <option value="DA">Primeros sonidos</option>
                        <option value="EA">Expresiones faciales</option>
                     </select>

                    
                          <div id="CA" style="display: none;">
                     <br/>
                     <h2>Movimientos corporales:</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> No se utiliza</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Emergente</label><!-- comment -->
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Dominado</label>
                        </div>
                     </form>    
                      <div id="DA" style="display: none;">
                     <br/>
                     <h2>Movimientos corporales:</h2>
                     <br/>
                     <form action="index.php" method="post">
                      <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                     </form>
                      <div id="EA" style="display: none;">
                     <br/>
                     <h2>Movimientos corporales:</h2>
                     <br/>
                     <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                     <b> Primeros sonidos </b>
                                     
                    <br/>
              
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Arrullos</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Chillidos</label>
                         <br/>
                        <label for="nombre">Observacion: </label><!-- comment -->
                        <p><input type="text" name="nombre" /></p><!-- comment -->
                        <input type="submit" value="Enviar" />
                    <br/>
                    <br/> 
                      <b> Expresiones faciales </b>
                                     
                    <br/>
              
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Sonrisa</label>

                         <br/>
                        <label for="nombre">Observacion: </label><!-- comment -->
                        <p><input type="text" name="nombre" /></p><!-- comment -->
                        <input type="submit" value="Enviar" />
                    <br/>
                    <br/> 
                    

                     </form>
                     
                     </div>
                    <br/>
                     <br/>
<!--                     Seleccion A3-->
                     <p><b>A.3 Expresa interés en otras personas:</b> ¿Puede darse cuenta de cuándo la persona se interesa por otra gente?</p>
                     <br/>
                      <br/>
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="GA">No</option>
                        <option value="FA">Si</option>
                     </select>
                    </form>
                    
                   <div id="FA" style="display: none;">
                     <br/>
                     <p><b>¿qué es lo que hace la persona(a) para hacerle saber que está interesado(a) en  usted o en otra gente?  </b> </p>
                     <br/>
                     
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="HA">Movimientos corporales:</option>
                        <option value="IA">Primeros sonidos</option>
                        <option value="JA">Expresiones faciales</option>
                     </select>

                    
                     <div id="HA" style="display: none;">
                     <br/>
                     <h2>Movimientos corporales:</h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> No se utiliza</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Emergente</label><!-- comment -->
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Dominado</label>
                        </div>
                     
                     </form>    
                      <div id="IA" style="display: none;">
                     <br/>
                     <h2>Movimientos de extremidades (patea, agita los brazos)</h2>
                     <br/>
                     <form action="index.php" method="post">
                       <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                     
                     </form>
                      <div id="JA" style="display: none;">
                     <br/>
                     <h2>Movimientos de cabeza (asiente)</h2>
                     <br/>
                     <form action="index.php" method="post">
                    <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                     
                     <br/>
                     <br/>
                     <b> Primeros sonidos </b>
                                     
                    <br/>
              
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Arrullos</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Chillidos</label>
                         <br/>
                        <label for="nombre">Observacion: </label><!-- comment -->
                        <p><input type="text" name="nombre" /></p><!-- comment -->
                        <input type="submit" value="Enviar" />
                    <br/>
                    <br/> 
                      <b> Expresiones faciales </b>
                                     
                    <br/>
              
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Sonrisa</label>

                         <br/>
                        <label for="nombre">Observacion: </label><!-- comment -->
                        <p><input type="text" name="nombre" /></p><!-- comment -->
                        <input type="submit" value="Enviar" />
                    <br/>
                    <br/> 
                    
                    
                    
                     </div>
                     <br/>
                     <br/>
                     <br/>
              
              
   </div> <!--fin principal-->
   
<!--   Seccion B-->
                <br/><br/>
                <b>B) La persona tiene control sobre sus comportamientos, pero no los usa  para tratar de comunicarse conmigo. No viene hacia mí para hacerme  saber lo que quiere, pero es fácil para mí imaginarlo, puesto que trata de  hacer las cosas por sí mismo. Sabe lo que quiere, y su comportamiento  me muestra lo que quiere. Si se le acaba lo que esté comiendo, intenta  obtener más, en vez de intentar que YO le dé más. Si marcó esta  afirmación, vaya a la sección B.  </b> 
                
                   <br/>
                   <br/>
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="MA">No</option>
                        <option value="KA">Si</option>
                     </select>
                    </form>
                    
                   <div id="KA" style="display: none;">
                     <br/>
                     <p>la persona tiene control sobre sus comportamientos, pero no los usa  para tratar de comunicarse conmigo. No viene hacia mí para hacerme  saber lo que quiere, pero es fácil para mí imaginarlo, puesto que trata de  hacer las cosas por sí mismo. Sabe lo que quiere, y su comportamiento  me muestra lo que quiere. Si se le acaba lo que esté comiendo, intenta  obtener más, en vez de intentar que YO le dé más. </p>
                     <br/>
                     <p><b>B.1 Protesta<b/>¿Puede notar que la persona no quiere algo específico, como cierta comida, un juguete o un juego  que usted esté jugando, como que le hagan cosquillas?</p>
                   

                     
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="NA">No</option>
                        <option value="OA">Si</option>
                     </select>
                     
                      <br/>
                         <br/>
                     <p><b>B.2 Continúa una acción<b/>¿Puede notar a veces que a la persona le gustaría seguir con una acción o actividad que usted  acaba de dejar de hacer con él (como caballitos, jugar a las palmadas, jugar con un juguete  musical)? </p>
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="NA">No</option>
                        <option value="OA">Si</option>
                     </select>
                     
                      <br/>
                         <br/>
                     <p><b>B.3 Obtiene más de algo<b/>¿Puede notar a veces que la persona quiere más de algo específico (como comida o un juguete)?  </p>
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="NA">No</option>
                        <option value="OA">Si</option>
                     </select>
                     
                      <br/>
                         <br/>
                     <p><b>B.4 Llama la atención <b/> ¿Hace la persona algo que le hace dirigirle la atención, aun cuando no esté intentando atraer su  atención hacia él de manera intencionada? </p>
                    <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="NA">No</option>
                        <option value="OA">Si</option>
                     </select>
                     

                   </div><!-- comment -->
                     
                <div id="OA" style="display: none;">
                 <br/>
                 <h4>Responde a ellas con gestos, movimientos corporales, sonidos de solicitud o rechazo.</h4>
                 <br/>
                 <form action="index.php" method="post">
                     <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="PA">Movimientos Corporales</option>
                        <option value="QA">Primeros sonidos</option>
                        <option value="RA">Expresiones faciales </option>
                     </select>
                 </form>
                 
                 <div id="PA" style="display: none;">
                     <br/>
                     <h4>Movimientos corporales:</h4>
                     <br/>
                      <select id="status" name="status" onChange="mostrar(this.value);">
                        <option value="SA">movimientos de cabeza (aparta la cabeza hacia un  lado o hacia atrás) </option>
                        <option value="TA">movimientos de brazos (agita los brazos, empuja,  arroja objetos)</option>
                        <option value="UA">movimientos de piernas  (patea el suelo, patea)   </option>
                        <option value="VA">se aleja de personas o  objetos  </option>
                     
                     </select>
                        </div>
                 
                  <div id="SA" style="display: none;">
                     <br/>
                     <h4>movimientos de cabeza (aparta la cabeza hacia un  lado o hacia atrás)</h4>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> No se utiliza</label>
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Emergente</label><!-- comment -->
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Dominado</label>
                        </div>
                 
                   <div id="TA" style="display: none;">
                     <br/>
                     <h4>movimientos de brazos (agita los brazos, empuja,  arroja objetos)</h4>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                 <div id="UA" style="display: none;">
                     <br/>
                     <h4>movimientos de piernas  (patea el suelo, patea)  </h4>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                 <div id="VA" style="display: none;">
                     <br/>
                     <h2>se aleja de personas o  objetos </h2>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>

                 
                 
                 <div id="QA" style="display: none;">
                     <br/>
                     <h4>Primeros sonidos</h4>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                 
                 <div id="RA" style="display: none;">
                     <br/>
                     <h4>Expresiones faciales </h4>
                     <br/>
                     <form action="index.php" method="post">
                        <label for="sexo">   <input type="checkbox" name="sexo" value="hombre"/> Si</label>
                        </div>
                 
                 
                 
                 
                 </div>
                   
                   </div>
                <?php borrarErrores(); ?>
        
            
            

     
			
<?php require_once 'includes/pie.php'; ?>
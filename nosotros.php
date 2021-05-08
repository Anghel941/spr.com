<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociedad Peruana de Radioprotección</title>
    <link rel="icon" type="image/jpg" href="img/Logos/LOGO_SPR6.png">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>
<body>

    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                   <a href="index.html"><img src="img/Logos/LOGO SPR (2).png" width="98%"></a> 
                </div>
                <ul class="menu"> 
                       <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="eventos.html">Eventos</a></li>
                        <li><a href="noticias.html">Noticias</a></li>
                        <li ><a href="socios.html" >Socios</a></li>
                        <li><a href="unete.html">Únete</a></li>
                        <li><a href="contactanos.html">Contáctanos</a></li>
              </ul>
                <div class="hamburguer">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
          </nav>

          <script src="js/header.js"></script>
        </header>


        <main>
        
     
           <!--fundacion-->
          <section class="fundacion container">
            <div class="fundacion-contenido">
              <center>
                <h2 class="titulo-fundacion titulo--border">Fundación</h2>
              </center>
           
              <img src="img/image1.jpg" alt="" >
              <p>El 02 de abril de 1987 se crea la Sociedad Peruana de Radioprotección (SPR) con 26 profesionales, formalizando así el anhelo que se puso de manifiesto en los últimos meses de 1986, cuando un entusiasta grupo de jóvenes profesionales se reunieron en una de las aulas del Instituto Peruano de Energía Nuclear (IPEN) a fin de formar una organización dedicada a impulsar la protección radiológica a nivel nacional. En esa reunión se forma una comisión organizadora integrada por Eduardo Medina Gironzini, Renán Ramírez Quijada y Santiago Regalado Campaña, quienes se encargaron de elaborar el proyecto de Estatuto y convocar a la Asamblea General para formar la SPR.</p>
              <p>La juramentación de la primera Junta Directiva se llevó a cabo en el Colegio de Ingenieros del Perú el día 09 de abril de 1987 durante la Mesa Redonda Internacional sobre Control de Radiactividad en Alimentos en América Latina en donde participaron los Coordinadores del Proyecto ARCAL I, quienes se encontraban en Lima con ocasión del III Taller ARCAL sobre Protección Radiológica.</p>
              <p>Las primeras acciones fueron constituir legalmente la sociedad, así como establecer contactos con organizaciones del país y del extranjero. Se integró a profesionales que trabajaban en diferentes entidades del país, contando en la actualidad con más de 60 Miembros Titulares y 6 Miembros Honorarios (Cari Borrás, César Guzmán Acevedo, Mayer Zaharia Bassan, Ignacio Frisancho Pineda, Luis Pinillos Ashton y Leopoldo Arranz y Carrillo de Albornoz).</p>
              <p>Hasta el momento ha organizado 7 Congresos Nacionales, 2 Congresos Latinoamericanos, 4 Simposios Internacionales, 6 Jornadas de Protección Radiológica del Paciente, 2 Jornadas Binacionales sobre Protección Radiológica (Perú-Chile), una Jornada Binacional con Ecuador, decenas de cursos y conferencias sobre protección radiológica en diversas ciudades del país y en el extranjero, además ha emitido opinión sobre diversas normas nacionales, entre otras actividades.</p>
    
              <div>
                <?php 
                  $texto=" Sus miembros participan en diversos eventos técnicos nacionales e internacionales. Ha sido impulsora de la creación de la Federación de Radioprotección de América Latina y el Caribe (FRALC) en 1993 la cual hoy está integrada por 11 sociedades y del Grupo Iberoamericano de Sociedades Científicas de Protección Radiológica (GRIAPRA) donde se realizaron actividades de capacitación y se recibieron equipos donados por España. <br><br> La SPR ha promovido la creación de otras sociedades en la región latinoamericana y mantiene una comunicación permanente con todas ellas.  En 1995 adquirió un local en donde se cuenta con una biblioteca, equipos y muebles. Durante algunos años se encargó de editar Boletines Informativos y además se efectuaron numerosas proyecciones de videos y charlas a instituciones y se organizaron diversos cursos de capacitación.<br><br> Igualmente se coordinó la revisión de diversas normas reguladoras y se emitieron opiniones técnicas. Igualmente se gestionó la capacitación de sus miembros, la adquisición de equipos específicos para el IPEN y otras entidades a través del GRIAPRA. Actualmente se van incorporando jóvenes quienes han formado la SPR-Joven. Te invitamos a ser parte de nuestra Sociedad. Uno de los requisitos para ser miembro de la SPR es presentar un trabajo sobre protección radiológica y presentarlo oralmente. La Junta Directiva de la SPR se renueva cada 2 años y se procura dar oportunidad a la participación de todos sus miembros.";
                  if (strlen($texto)>40) {
                     $texto = substr($texto,0,40).'... <a href="javascript:void(0);" onclick="MostrarTodo('."'".$texto."'".');"> Ver mas </a>';
                
                     print    '<p id="texto_original">'.$texto.' </p>';
                  }
                ?>
             </div>
               
              <script lenguage="javacript">
                  function MostrarTodo(texto){
                      var elemento=document.getElementById('texto_original');
                      elemento.innerHTML=texto;
                  }
               </script>
            </div>
          </section>}
        <!--vision-mision-->
          <section class="mision-vision container">
            <div class="contenido-mision-vision">
              <h2 class="titulo titulo--bordermision-vision">Misión</h2>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam dolores assumenda tenetur natus excepturi praesentium ducimus esse illo tempore?</p>
            </div>
            <figure class="imagen-mision-vision">
              <img src="img/image1.jpg" alt="" >
            </figure>
           
            <div class="contenido-mision-vision">
              <h2 class="titulo titulo--bordermision-vision">Visión</h2>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam dolores assumenda tenetur natus excepturi praesentium ducimus esse illo tempore?</p>
            </div>
            <figure class="imagen-mision-vision">
              <img src="img/image1.jpg" alt="" >
            </figure>
          </section>
            <!--socios-->
          <section class="socios container">
            <div class="socios-contenido">
              <center>
                <h2 class="titulo-socios titulo--border_junta">Junta Directiva</h2>
              </center>
             
              <div class="socio">
                  <ul>
                    <li>
                      <span class="nombre">M.Sc. Bedher Omar vega Cabrera </span>
                      <span class="cargo">(Presidente)</span>
                    </li>
                    <li>
                      <span class="nombre">M.Sc. José Manuel Osores Rebaza </span>
                      <span class="cargo">(Vicepresidente)</span>
                    </li>
                    <li>
                      <span class="nombre">Dr. Rubén Darío Rojas Muñoz </span>
                      <span class="cargo">(Secretario General)</span>
                    </li>
                    <li>
                      <span class="nombre">Lic. Giovanna Janet Rojas Cuadros</span>
                      <span class="cargo">(Secretaria de Actas)</span>
                    </li>
                    <li>
                      <span class="nombre">Lic. Yrma Céspedes Moreyra </span>
                      <span class="cargo">(Secretaria de Economía)</span>
                    </li>
                    <li>
                      <span class="nombre">M.Sc. Edward Artemio Meca Castro </span>
                      <span class="cargo">(Secretario de Acción Científica)</span>
                    </li>
                    <li>
                      <span class="nombre">Nombre y apellidos</span>
                      <span class="cargo">Cargo</span>
                    </li>
                  </ul>
              </div>
            </div>
          </section>

        <!--Linea de tiempo-->
    
     
    
          <section class="timeline-section">
            <center>
              <h2 class="titulo-timeline titulo--border_junta">Ex-Presidentes</h2>
            </center>
            <div class="timeline-items">
              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <h4 class="timeline-date">1987 – 1989</h4>
                <div class="timeline-content">
                  <h3>Eduardo Medina Gironzini</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <img src="img/image1.jpg" alt="" >
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <h4 class="timeline-date">1989 – 1991</h4>
                <div class="timeline-content">
                  <h3>Eduardo Medina Gironzini</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <img src="img/image1.jpg" alt="" >
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <h4 class="timeline-date">1991 – 1993</h4>
                <div class="timeline-content">
                  <h3>Pedro Valdivia Maldonado</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <img src="img/image1.jpg" alt="" >
                </div>
              </div>

              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <h4 class="timeline-date">1993 – 1995</h4>
                <div class="timeline-content">
                  <h3>Eduardo Medina Gironzini</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <img src="img/image1.jpg" alt="" >
                </div>
              </div>
            </div>
          </section>
    

        </main>
         <!-- redes-Flotantes -->
 <div class="container-redes">
  <input type="checkbox" name="" id="btn-check">
  <div class="social-media-redes">
      <a class="fab fa-facebook" href="#"></a>
      <a class="fab fa-instagram" href="#"></a>
      <a class="fab fa-whatsapp" href="#"></a>
      <a class="fas fa-at" href="#"></a>
  </div>
  <div class="btn-check">
      <label for="btn-check"  class="suma" alt="">+</label>
  </div>
</div>
        <!--footer-->

     <footer >
          <div class="footer-contenido">
              <h2>Lorem ipsum dolor sit amet.</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus a blanditiis inventore. Velit, repellat! Commodi sapiente saepe nostrum rerum ut?</p>
              <p class="socialmedia__legend">Siguenos en:</p>
              <ul class="socialmedia">
                  <li ><a href="#" class='socialmedia__icon bx bxl-facebook-circle'></a></li>
                  <li ><a href="#" class='socialmedia__icon bx bxl-linkedin-square'></a></li>                                                                                                        
                  <il ><a href="#" class='socialmedia__icon bx bxl-twitter'></a></il>   
                  <li ><a href="#"  class='socialmedia__icon bx bxl-instagram'></a></li>
                  <li ><a href="#" class='socialmedia__icon bx bxl-github'></a></li>  
              </ul>
          </div>
          <div class="footer-secundarios">
              <p>Copyright &copy; 2021 <span>SOCIEDAD PERUANA DE RADIOPROTECCIÓN</span>. Todos los derechos reservados</p>
          </div>
         
      </footer>

      <script src="js/main.js"></script>
    <script src="js/header.js"></script>
</body>
</html>
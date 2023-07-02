<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DREAMROUTES</title>
    <link rel="stylesheet" href="Hoteles.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <h2 class= "frase"> ¡HOTELES! </h2>
    <nav>
        <span id="open-close"><i class='bx bx-menu'></i></span>   
    </nav>
    <aside id="aside">
        <div class="container-svg">
            <div>
                <a href="../principal/principal.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/principal.svg" alt="Principal" >
                    <span>Principal</span>
                </a>
            </div>
        </div>
        <div class="container-svg">
            <h2>NUESTROS SERVICIOS</h2>
            <div>
                <a href="../paquetes-planes/planes.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/paquete.svg" alt="planes - Paquetes" >
                    <span>Paquetes - Planes</span>
                </a>

            </div>
            <div>
                <a  href="../ofertas/ofertas.php" style="text-decoration: none; color: inherit;" >
                    <img src="../multimedia/ofertas.svg" alt="Ofertas">
                    <span>Ofertas</span>
                </a>

            </div>
            <div>
                <a  href="../vuelos/vuelos.php" style="text-decoration: none; color: inherit;">                
                    <img src="../multimedia/vuelo.svg" alt="Vuelos">
                    <span>Vuelos</span>
                </a>

            </div>
            <div>
                <a  href="../hoteles/Hoteles.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/hoteles.svg" alt="Hoteles">
                    <span>Hoteles</span>                    
                </a>

            </div>
            <div >
                <a href="../cruceros/cruceros.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/crucero.svg" alt="Cruceros">
                    <span>Cruceros</span>
                </a>

            </div>
            <div>
                <a href="../asistencia/asistencia.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/asistencia.svg" alt="asistencia">
                    <span>Asistencia</span>
                </a>

            </div>
        </div>
        <div class="container-svg">
            <h2>INFORMACION</h2>
            <div>
                <a href="../about us/aboutus.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/about me.svg" alt="aboutme" >
                    <span>About me</span>
                </a>

            </div>
            <div>
                <a  href="../contacto/contacto.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/info.svg" alt="Contacto">
                    <span>Contacto</span>
                </a>

            </div>
            <div>
                <a  href="../carrito/carrito.php" style="text-decoration: none; color: inherit;">
                    <img src="../multimedia/carrito.svg" alt="Carrito">
                    <span>Carrito</span>
                </a>

            </div>
        </div>
    </aside>
    <script src="Hoteles.js"></script>
    <main class="gradient-border">

        <div class="wsp">
            <a href="https://api.whatsapp.com/send?phone=573184932909" target="_blank">
                <img src="../asistencia/wsp.png" alt="whatsapp" width="80" height="80" >
            </a>
        </div>
        <div class="redes">
            <a href="https://www.linkedin.com/in/cristian-nicolas-cardenas-triana-649061168/" target="_blank">
                <img src="../asistencia/linkedin.png" width="30" height="30" alt="linkedin" >
              </a>
            <a href="https://github.com/nikolasHrd" target="_blank">
                <img src="../asistencia/github.png" width="30" height="30" alt="github" >
            </a>            
            <a href="https://www.instagram.com/nikolas.hrd/" target="_blank">
                <img src="../asistencia/instagram.png" width="30" height="30" alt="instagram" >
            </a>
            <a href="mailto:nukoluks@hotmail.com" target="_blank">
                <img src="../asistencia/email.png" width="30" height="30" alt="email" >
            </a>
        </div>
        <div class="box">
            <h2 class="frase2"> ¡SOLO HOSPEDAJE! </h2>
            <section>
                <img  src="../hoteles/BAÑO.jpg">
                <img  src="../hoteles/MINI.jpg">
                <img  src="../hoteles/GUARDA ROPAS.jpg">
                <img  src="../hoteles/CAMA.jpg">
                <img  src="../hoteles/TV.jpg">
                <img  src="../hoteles/ESCRITORIO.jpg">
            </section>
            <p class="frio">
                Este servicio incluye:<br>
                cama doble , minibar, baño con tina, guarda ropas, escritorio<br>
              </p>
              <p class="preciofrio">PLAN  x 200USD</p>
              <a href="../carrito/carrito.php" class="comprar-btn">Comprar ahora</a>
        </div>
        <div class="box2">
            <h2 class="frase3">¡HOSPEDAJE CON TODOS LOS SERVICIOS!</h2>
                <section>
                    <img  src="../hoteles/aseo.jpg">
                    <img  src="../hoteles/bar.jpg">
                    <img  src="../hoteles/pisc.jpg">
                    <img  src="../hoteles/masaj.jpg">
                    <img  src="../hoteles/com.jpg">
                    <img  src="../hoteles/servicio.jpg">
                </section>
            <p class="actividades">
                Este servicio incluye:<br>
                Plan solo hospedaje<br>
                Bar y restaurante del hotel<br>
                Desayuno, almuerzo y cena<br>
                Zonas humedas<br>
                Zonas de masajes<br>
                Servicio a la habitacion sin recargo<br>
            </p>
            <p class="precioactividades">PLAN  x 400USD</p>
            <a href="../carrito/carrito.php" class="comprar-btn">Comprar ahora</a>
          </div>
      </main>
</body>
</html>
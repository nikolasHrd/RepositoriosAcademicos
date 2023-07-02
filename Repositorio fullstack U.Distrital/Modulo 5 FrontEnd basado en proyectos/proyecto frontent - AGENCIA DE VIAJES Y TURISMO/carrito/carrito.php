<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DREAMROUTES</title>
    <link rel="stylesheet" href="carrito.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
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
    <script src="carrito.js"></script>
    <main class="gradient-border">
        <div class="box">
            <h1 class="Form">Formulario de contacto</h1>
            <div class="boxform">
                <form action="enviar.php" method="POST">
                    <label for="nombre">Nombre *</label>
                    <input type="text" id="nombre" name="nombre" required>
                
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                
                    <label for="telefono">Teléfono *</label>
                    <input type="text" id="telefono" name="telefono" required>
                
                    <label for="locacion">Locación *</label>
                    <input type="text" id="locacion" name="locacion" required>
                
                    <label for="asunto">Asunto *</label>
                    <input type="text" id="asunto" name="asunto" required>
                
                    <label for="mensaje">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                
                    <button class="buttonform"  type="submit">Enviar</button>
                </form>

            </div>
        </div>
        <div class="box2">
            <h1 class="ZONA">ZONA DE PAGOS</h1>
            <h3 class="lista">Listado de productos</h3>
            <div class="box3">
            </div>
            <div class="box4">
                <h2 class = "totales">
                    SUBTOTAL:<br>
                    IVA:<br>
                    <br>
                    TOTAL A PAGAR:<br>
                </h2>
            </div>
            <button class="cancelar">Cancelar</button>
            <button class="pagar">Pagar</button>
        </div>
      </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WebApp-CMGL</title>
<!-- Plugins CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- Plugins JS -->
<!-- jQuery library 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-
9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/47e16642b7.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Logotipo -->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>
    <!-- Barra de menu -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"] == "registro"): ?>
                         <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                         </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                         </li>
                    <?php endif ?>
                        
                    <?php if ($_GET["pagina"] == "ingreso"): ?>
                         <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                         </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                         </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "inicio"): ?>
                         <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                         </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                         </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "salir"): ?>
                         <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                         </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                         </li>
                    <?php endif ?>
                <?php else: ?>

                    <!-- GET : $GET ["variable"] Variables que se pasan como parametros vis URL
                Tambien conocido como cadena de consulta a traves de la URL
                cuando es la primera variable se separa con ?
                Las que le siguen a continuacion se separa con &
                -->
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>
                <?php endif ?>
                
            </ul>
        </div>
    </div>
    <!-- Contenido -->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            # ISSET: isser() Determina si una variable esta definida y no es NULL
            
            if (isset($_GET["pagina"])){
                if ($_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio"  ||
                    $_GET["pagina"] == "salir") {
                        include "paginas/" . $_GET["pagina"] . ".php";
                    }
                
            } else {
                include "paginas/registro.php";
            }

            ?>
        </div>
    </div>

    <script src="vistas/js/script.js"></script>
</body>

</html>
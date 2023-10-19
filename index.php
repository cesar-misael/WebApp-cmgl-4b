    <?php
    # En el mostraremos la salida de las vistas al usuario y tambien a traves de el le
    #enviaremos las distintas acciones que el usuario envie al controlador 
    #
    #require(). Establece que el codigo del archivo invocado es requerido
    #es decir, obligatorio para el funcionamiento del programa. Por ello, si el
    #archivo espesificado en la funcion require() no se encuentra 
    #saldra un error "PHO Fatal error" y el programa se detiene en ese punto
    #
    #require_once, funciona de la misma manera que su respectivo, salvo que, al 
    #utilizar la version ONCE, se impide la carga de un mismo archivo
    #mas de una vez
    #

    require_once("controladores/plantilla.controlador.php");
    require_once("controladores/formularios.controlador.php");
    require_once("modelos/formularios.modelo.php");

    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrTraerPlantilla();

    ?>

   
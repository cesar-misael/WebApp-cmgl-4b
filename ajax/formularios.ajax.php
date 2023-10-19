<?php

require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";
/**
 * clase de ajax
 */
class AjaxFormularios{
/**
 * validar email existente
 */
public $validarEmail;
    public function ajaxValidarEmail(){
        $item = "email";
        $valor = $this ->validarEmail;
        $respuesta = ControladorFormularios::ctrlSeleccionarRegistros($item, $valor);
        //echo '<pre>'; print_r($respuesta); echo '</pre>';
        echo json_encode($respuesta);
    }
}

/**
 * objetos de ajax que recibe la variable POST
 */

 if (isset($_POST["validarEmail"])){
    $valEmail = new AjaxFormularios();
    $valEmail -> validarEmail = $_POST["validarEmail"];
    $valEmail -> ajaxValidarEmail();

 }
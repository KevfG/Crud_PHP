<?php
#require_once establece que el codigo que se invoca es obligatorio

require_once "controladores/plantilla_controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();

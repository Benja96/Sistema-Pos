<?php

require_once "controller/plantilla.controller.php";
require_once "controller/usuarios.controller.php";
require_once "controller/categoria.controller.php";
require_once "controller/productos.controller.php";
require_once "controller/clientes.controller.php";
require_once "controller/ventas.controller.php";

require_once "models/plantilla.modelos.php";
require_once "models/usuarios.modelos.php";
require_once "models/categoria.modelos.php";
require_once "models/productos.modelos.php";
require_once "models/clientes.modelos.php";
require_once "models/ventas.modelos.php";


$plantilla = new ControllerPlantilla();
$plantilla -> ctrPlantilla();
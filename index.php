<?php 
require_once 'models/inicioModel.php';
$datos = obtenerDatosDePagina();
$tituloPagina = $datos['titulo'];


include 'views/templates/header.php'; // Incluir el HEADER

include 'views/inicio.php'; // Incluir la vista de inicio

include 'views/templates/footer.php'; // Incluir el FOOTER



?>
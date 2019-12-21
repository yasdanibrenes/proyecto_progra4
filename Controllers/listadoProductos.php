<?php

require 'Models/productos.php';
switch ($action) {
    case 'listado':
        $contenido = new productos();
        $elements = $contenido->select();
        require 'Views/listadoProductos.php';
        break;
    case 'ver':
        if ($_GET['id']) {
            $contenido = new productos();
            $element = $contenido->select($_GET['id'])[0];
            require 'Views/listadoProductosDetalle.php';
        } else {
            $msg = "Error al obtener el elemento";
            $elements = $contenido->select();
            require 'Views/listadoProductos.php';
        }
        break;
    default:
        $contenido = new productos();
        $elements = $contenido->select();
        require 'Views/listadoProductos.php';
        break;
}

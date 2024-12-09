<?php
    include ('app/utils/config.php');
    include ('app/utils/autoload.php');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  
    $entidad = $_GET['entidad'] ?? 'productos';
    $entidad = ucfirst(strtolower($entidad));
    $action = $_GET['action'] ?? 'list';

    $clase = 'App\\Controllers\\'.$entidad.'Controller';
    if (!class_exists($clase)) {
        die('La clase no existe ' . $clase);
    }

    if (!method_exists($clase, $action)) {
        die('El método no existe ' . $action);
    }

    $respuesta = $clase::$action();

    $archivo = $respuesta['view'];

    include (VIEWS . '/templates/header.php');
    include (VIEWS . '/'.$archivo);
    include (VIEWS . '/templates/footer.php');
?>

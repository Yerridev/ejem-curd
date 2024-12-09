<?php
    namespace App\Controllers;

    class ProductosController {
        public static function list() {
            return [
                'view' => 'productos/listado.php',
                
            ];
        }

        public static function agregar() {
            return [
                'view' => 'productos/form.php',
                'form' => [
                    'title' => 'Agregar producto',
                    'button' => 'Crear producto'
                ]
            ];
        }

        public static function edit() {
            return [
                'view' => 'productos/form.php',
                'form' => [
                    'title' => 'Editar producto',
                    'button' => 'Actualizar producto'
                ]
            ];
        }

        public static function delete() {
            //no tiene vista
            echo 'Borrar producto';
        }
    }

?>

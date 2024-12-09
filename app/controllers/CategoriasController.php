<?php
    namespace App\Controllers;

    use App\Models\CategoriasModel;

    class CategoriasController {
        public static function list() {
            $categorias = new CategoriasModel();
            $listado = $categorias->all();
            

            return [
                'view' => 'categorias/listado.php',
                'categorias' => $listado
            ];
        }

        public static function agregar() {
            return [
                'view' => 'categorias/form.php',
                'form' => [
                    'title' => 'Agregar producto',
                    'button' => 'Crear producto'
                ]
            ];
        }

        public static function edit() {
            return [
                'view' => 'categorias/form.php',
                'form' => [
                    'title' => 'Editar producto',
                    'button' => 'Actualizar producto'
                ]
            ];
        }

        public static function delete() {
            $id = $_GET['id'];
            $categoria = new CategoriasModel();
            $categoria->delete($id);
            header('Location: /ejm/categorias');
        }
    }
?>

<?php
    
    namespace App\Models;
    require_once 'app/core/Database.php';
    use App\Core\Database;
    use PDO;    

    class CategoriasModel {
        private $connection;
        private $id;
        private $categoria;

        public function __construct(){
            $database = new Database();
            $this->connection = $database->getConnection();
        }

        public function getId(){
            return $this->id;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        // public function connect(){};

        //Obetner todos los usuarios
        public function all() /*: mixed*/ {
            $query = "SELECT id, categoria FROM categorias";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, CategoriasModel::class);
            return $stmt->fetchAll();
        }

        public function delete($id) {
            $query = "DELETE FROM categorias WHERE id = :id";
            $stmt = $this->connection->prepare($query);
            // $stmt->bindParam(':id', $this->id);
            $stmt->execute(['id' => $id]);
        }
    }

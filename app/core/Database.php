<?php
    namespace App\Core;

    use PDO;
    use PDOException;
    class Database {
        private $connection;
        private $host = DB_HOST;
        private $db_name = DB_NAME;
        private $username = DB_USER;
        private $password = DB_PASS;
        private $db_charset = DB_CHARSET;


        public function getConnection(): ?PDO {
            if ($this->connection === null) {
                try {
                    $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->db_charset}";
                    $this->connection = new PDO($dsn, $this->username, $this->password);
                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $exception) {
                    error_log("Database connection error: " . $exception->getMessage());
                    return null; 
                }
            }
    
            return $this->connection;
        }


    }

?>

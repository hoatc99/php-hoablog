<?php

    class Database {

        // DB Params
        private $dsn = "mysql:host=byt3adjecddqfpnhuj91-mysql.services.clever-cloud.com; dbname=byt3adjecddqfpnhuj91";
        private $username = "ukjs091upjezxrbf";
        private $password = "cXiAVmralrRtrA6i4IdE";
        private $conn = null;

        // DB Connect
        public function connect() {
            $this->conn = null;
            try {
                $this->conn = new PDO($this->dsn, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo "Connection failed: $e->getMessage()";
            }
            return $this->conn;
        }

    }

    $databases = new Database();
    $db = $databases->connect();

?>
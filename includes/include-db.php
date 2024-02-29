    <?php

        class db extends WP_Query {

            // DB Query Functions - Start
        
            /* Connection Aurguments
            protected $dbHost = DB_HOST;
            protected $dbName = DB_NAME;
            protected $dbUser = DB_USER;
            protected $dbPass = DB_PASSWORD; */

            // Functional Aurguments
            public $query      = "";
            private $qType      = "";
            private $tblName    = "";
            private $args       = array();
            private $cond       = array();

            // DB Functions

            // Initialization of Database
            private function __constructor() {}

            function selectAll($tblName) {
                $query = "SELECT * FROM ".$tblName.";";
                return $conn->query($query);
            }

            function selectCondAnd($tblName, $cond) {
                $query = "SELECT FROM ".$tblName." WHERE ";
                foreach($cond as $key => $val) {
                    $query .= $key ." = '".$val."' AND ";
                }
                $query = rtrim($query, " AND ");
                return $conn->query($query);
            }

            function selectCondOr($tblName, $cond) {
                $query = "SELECT FROM ".$tblName." WHERE ";
                foreach($cond as $key => $val) {
                    $query .= $key ." = '".$val."' OR ";
                }
                $query = rtrim($query, " OR ");
                return $conn->query($query);
            }

            function insert($tblName, $args) {
                $query = "INSERT INTO ".$tblName." (";
                foreach($args as $key => $val) {
                    $query .= $key."', ";
                }
                $query = rtrim($query, ", ");
                $query .= ") VALUES(";
                foreach($cond as $key => $val) {
                    $query .= $val."', ";
                }
                $query = rtrim($query, ", ");
                $query .= ");";
                return $conn->query($query);
            }

            function delAll($tblName) {
                $query = "DELETE FROM ".$tblName.";";
                return $conn->query($query);
            }

            function delCondAnd($tblName, $cond) {
                $query = "DELETE FROM ".$tblName." WHERE ";
                foreach($cond as $key => $val) {
                    $query .= $key."='".$val."' AND ";
                }
                $query .= rtrim($query, " AND ");
                $query .= ";";
                return $conn->query($query);
            }

            function delCondOr($tblName, $cond) {
                $query = "DELETE FROM ".$tblName." WHERE ";
                foreach($cond as $key => $val) {
                    $query .= $key."='".$val."' OR ";
                }
                $query .= rtrim($query, " OR ");
                $query .= ";";
                return $conn->query($query);
            }

            function updateAnd($tblName, $cond, $args) {
                $query = "UPDATE ".$tblName." SET ";
                foreach($args as $key => $val) {
                    $query .= $key." = '".$val."', ";
                }
                $query .= rtrim($query, ", ");
                $query .= " WHERE ";
                foreach($cond as $key => $val) {
                    $query .= $key." = ".$val." AND ";
                }
                $query .= rtrim($query, " AND ");
                $query .= ";";
                return $conn->query($query);
            }

            function updateOr($tblName, $cond, $args) {
                $query = "UPDATE ".$tblName." SET ";
                foreach($args as $key => $val) {
                    $query .= $key." = '".$val."', ";
                }
                $query .= rtrim($query, ", ");
                $query .= " WHERE ";
                foreach($cond as $key => $val) {
                    $query .= $key." = ".$val." OR ";
                }
                $query .= rtrim($query, " OR ");
                $query .= ";";
                return $conn->query($query);
            }

            // DB Query Functions - End

        }
?>
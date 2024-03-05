<?php

    class db extends wpdb {

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
        function __construct($dbUser, $dbPass, $dbName, $dbHost) {
            parent::__construct($dbUser, $dbPass, $dbName, $dbHost);
        }

        function dbCreateTbl($tblName, $cols, $types, $lengths, $args, $primary_key) {
            $query = "CREATE ".$tblName." (";
            for($i=0; $i<length($cols); $i++) {
                $query .= $cols[$i]." ".$types[$i]($lengths[$i])." ".$args[$i];
                if($cols[$i] == $primary_key) {
                    $query .= " PRIMARY KEY,";
                }
                else {
                    $query .= ", ";
                }
            }
            $query = rtrim($query, "'");
            $query .= ") ".DB_CHARSET.";";
            return this::query($query);
        }

        function dbSelectAll($tblName) {
            $query = "SELECT * FROM ".$tblName.";";
            return this::query($query);
        }

        function dbSelectCondAnd($tblName, $cond) {
            $query = "SELECT FROM ".$tblName." WHERE ";
            foreach($cond as $key => $val) {
                $query .= $key ." = '".$val."' AND ";
            }
            $query = rtrim($query, " AND ");
            return this::query($query);
        }

        function dbSelectCondOr($tblName, $cond) {
            $query = "SELECT FROM ".$tblName." WHERE ";
            foreach($cond as $key => $val) {
                $query .= $key ." = '".$val."' OR ";
            }
            $query = rtrim($query, " OR ");
            return this::query($query);
        }

        function dbInsert($tblName, $args) {
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
            return this::query($query);
        }

        function dbDelAll($tblName) {
            $query = "DELETE FROM ".$tblName.";";
            return this::query($query);
        }

        function dbDelCondAnd($tblName, $cond) {
            $query = "DELETE FROM ".$tblName." WHERE ";
            foreach($cond as $key => $val) {
                $query .= $key."='".$val."' AND ";
            }
            $query .= rtrim($query, " AND ");
            $query .= ";";
            return this::query($query);
        }

        function dbDelCondOr($tblName, $cond) {
            $query = "DELETE FROM ".$tblName." WHERE ";
            foreach($cond as $key => $val) {
                $query .= $key."='".$val."' OR ";
            }
            $query .= rtrim($query, " OR ");
            $query .= ";";
            return this::query($query);
        }

        function dbUpdateAnd($tblName, $cond, $args) {
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
            return this::query($query);
        }

        function dbUpdateOr($tblName, $cond, $args) {
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
            return this::query($query);
        }

        // DB Query Functions - End

    }
?>
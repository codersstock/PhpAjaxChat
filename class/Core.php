<?php

require_once "/config.php";

class Core{

        private $connection;
        protected $result;
        protected $rows;


        public function __construct(){
                $this->open();
        }

        public function open(){
                $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);;
                        if($this->connection->errno){
                                    die("Connection Failed " .mysqli_connect_error());
                             }
                }

        public function query($sql){
               $this->result = $this->connection->query($sql);
        
               
        }

        function rows(){

                for($x=1;$x<=$this->connection->affected_rows;$x++){
                    $this->rows[] = $this->result->fetch_assoc();
                }
                 return $this->rows;
            }
            



/*
        public function escape_string($string){
                $escape_string = mysqli_real_escape_string($this->connection,$string);
                return $escape_string;
        }

       public function affected_rows(){
        return $this->connection->affected_rows;
       }

       public function insert_id(){
        return mysqli_insert_id($this->connection);
       }

*/




}

?>
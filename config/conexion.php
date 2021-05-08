<?php       
    class Conectar{
        protected $dbh;
        protected function Conexion(){
            try {
               $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=radosys","root","");
               return $conectar;
            } catch (Exception $e) {
               print "Error :".$e->getMessage();
               die();//finalizar conexion
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>
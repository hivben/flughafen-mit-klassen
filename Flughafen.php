
<?php


    class Flughafen{
       
        public static $Fluege = array();
        public $Name;
        private $pdo;


        public function __construct($Name){
            $this->Name = $Name;   
            $pdo = new PDO('mysql:host=localhost;dbname=flugterminal','root','');
        }

        public function Flugerstellen($Standort, $Datum,){
            $Flugdauer = new rand(20,60);
            $neuerFlug = new Flug($this->Name,$Standort,date("d.m.y",$Datum),date("H:i",$Datum),$Flugdauer,360,45);
            array_push(self::$Fluege, $neuerFlug);

        }

        public function FlugLoeschen($id){

            $statement = $pdo->prepare("DELETE from fluege where FlugID like ?");
			$statement->execute(array());
			echo "Datensätze gelöscht";
        }
        public function AlleFluegeLoeschen($id){

            $statement = $pdo->prepare("DELETE * from fluege");
			$statement->execute(array());
			echo "Alle Datensätzen gelöscht";
        }

        public function FluegeUebersicht(){

        }

    }

?>
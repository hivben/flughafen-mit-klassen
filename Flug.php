
<?php
    class Flug{
        public static $FlugID = 0;
        public $StartStandort;
        public $ZielStandort;
        public $AbflugDatum;
        public $AbflugZeit;
        public $Flugdauer;
        public $Sitzplaetze;
        public $Einzelpreis;
        public $Status;
        private $pdo;

        public function __construct($Start, $Ziel, $Datum, $Abflugzeit, $Flugdauer, $Sitzplaetze, $Preis){
            self::$FlugID++;
            $this->StartStandort = $Start;
            $this->ZielStandort = $Ziel;
            $this->AbflugDatum = $Datum;
            $this->AbflugZeit = $Abflugzeit;
            $this->Flugdauer = $Flugdauer;
            $this->Sitzplaetze = $Sitzplaetze;
            $this->Einzelpreis = $Preis;
            $Status = "VorAbflug";
            $pdo = new PDO('mysql:host=localhost;dbname=flugterminal','root',''); 

            $statement = $pdo->prepare("INSERT into fluege(FlugID, Start, Ziel, Datum, Abflugzeit, Flugdauer, Sitzplaetze, Einzelpreis) values(?,?,?,?,?,?,?,?)");
            $statement->execute(array($this->FlugID, $this->StartStandort, $this->ZielStandort, $this->AbflugDatum, $this->AbflugZeit, $this->Flugdauer, $this->Sitzplaetze, $this->Einzelpreis));
        }

        public function Buchen(){

        }

        public function AbfrageBuchungen(){

        }

    }

?>
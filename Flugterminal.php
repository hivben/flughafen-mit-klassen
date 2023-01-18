<?php
    include "Flug.php";
    include "Flughafen.php";
    include "Buchung.php";
    include "datenbankverbindung.inc.php";


    echo "<br/><br/>";

    $Flughaefen=array("Berlin", "Paris", "London", "Madrid", "Rom");
    $fluege=array();
    $flugplan=array(array(1,2,3,4),array(0,2,3,4),array(0,1,3,4), array(0,1,2,4),array(0,1,2,3));

    
?>
    
    <select name="auswahl" id="auswahl">
        <?php
            for ($i=0; $i < 5 ; $i++) { 
                $fluege[$i] = new Flughafen($Flughaefen[$i]);
                echo "<option value='".$fluege[$i]->Name."'> ".$fluege[$i]->Name."</option>";
                

                for ($h=0; $h < 4 ; $h++) { 
                    $fluege[$i]->Flugerstellen($Flughaefen[$flugplan[$i][$h]], time());
                    
                }
            }
        ?>
    </select>
    

    <label for=""><br/> <br/> <br/></label>
    <input type="button" value="Flüge erstellen" onclick=""/>
    <label> <br/></label>
    <input type="button" value="OisLöschna" onclick="$fluege[0]->AlleFluegeLoeschen()" />
<?php
    
   


?>
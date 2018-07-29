<?php

class DbOperation
{
    //Database connection link
    private $con;

    //Class constructor
    function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DbConnect.php';

        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();

        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }



 /*
 * The read operation
 * When this method is called it is returning all the existing record of the database
 */
 function getPlayers(){
 $stmt = $this->con->prepare("SELECT * FROM players");
 $stmt->execute();
 $stmt->bind_result($id, $name, $age, $team, $pos, $gp, $CF, $CA, $CFpercent, $CFpercentRel, $FF, $FA, $FFpercent, $FFpercentRel, $oiSHpercent, $oiSVpercent, $PDO, $oZSpercent, $dZSpercent, $TOI60, $TOIEV, $TK, $GV, $Eplusminus, $Satt, $thrupercent);

 $players = array();

 while($stmt->fetch()){
 $player  = array();
 $player['id'] = $id;
 $player['name'] = $name;
 $player['age'] = $age;
 $player['team'] = $team;
 $player['pos'] = $pos;
 $player['gp'] = $gp;
 $player['CF'] = $CF;
 $player['CA'] = $CA;
 $player['CFpercent'] = $CFpercent;
 $player['CFpercentRel'] = $CFpercentRel;
 $player['FF'] = $FF;
 $player['FA'] = $FA;
 $player['FFpercent'] = $FFpercent;
 $player['FFpercentRel'] = $FFpercentRel;
 $player['oiSHpercent'] = $oiSHpercent;
 $player['oiSVpercent'] = $oiSVpercent;
 $player['PDO'] = $PDO;
 $player['oZSpercent'] = $oZSpercent;
 $player['dZSpercent'] = $dZSpercent;
 $player['TOI60'] = $TOI60;
 $player['TOIEV'] = $TOIEV;
 $player['TK'] = $TK;
 $player['GV'] = $GV;
 $player['Satt'] = $Satt;
 $player['$thrupercent'] = $thrupercent;


 array_push($players, $player);
 }

 return $heroes;
 }

}

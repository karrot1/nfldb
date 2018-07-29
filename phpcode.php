<?php
   $con=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","b7b177ae59ac76","558d3bc8","heroku_8f0dc4064126e98");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysql_query("SELECT * FROM players") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["players"] = array();

    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $player = array();
        $player["pid"] = $row["idplayers"];
        $player["name"] = $row["name"];
        $player["age"] = $row["age"];
        $player["team"] = $row["team"];
        $player["pos"] = $row["pos"];
        $player["gp"] = $row["gp"];
        $player["CF"] = $row["CF"];
        $player["CA"] = $row["CA"];
        $player["CFpercent"] = $row["CFpercent"];
        $player["CFpercentRel"] = $row["CFpercentRel"];
        $player["FF"] = $row["FF"];
        $player["FA"] = $row["FA"];
        $player["FFpercent"] = $row["FFpercent"];
        $player["FFpercentRel"] = $row["FFpercentRel"];
        $player["oiSHpercent"] = $row["oiSHpercent"];
        $player["TOI60"] = $row["TOI60"];
        $player["TOIEV"] = $row["TOIEV"];
        $player["TK"] = $row["TK"];
        $player["GV"] = $row["GV"];
        $player["Eplusminus"] = $row["Eplusminus"];
        $player["Satt"] = $row["Satt"];
        $player["Thrupercent"] = $row["Thrupercent"];





        // push single player into final response array
        array_push($response["products"], $player);
    }
    // success
    $response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
} else {
    // no players found
    $response["success"] = 0;
    $response["message"] = "No players found";

    // echo no users JSON
    echo json_encode($response);
  }
   mysqli_close($con);
?>

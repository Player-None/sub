<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitybackendtutorial";


//variables submited by user
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username = '" . $loginUser . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if($row["password"] == $loginPass){
        echo "L-01";
        //Get user's data here

        //Get player info.

        //Get Inventory

        //Modify player data.

        //Update invnetory
      }
      else{
        echo "L-03";
      }

    }
  } else {
    echo "L-02";
  }
  $conn->close();


?>
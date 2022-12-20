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

$sql = "SELECT username FROM users WHERE username = '" . $loginUser . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //Tell user that that name is already taken
    echo "R-02";
     

  } else {

    //Insert the user and password into the database
    
    $sql2 = "INSERT INTO users (username, password, level, coins) VALUES ('" . $loginUser . "','" . $loginPass . "', 1, 0)";
    if ($conn->query($sql2) === TRUE) {
        echo "R-01";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }



  }
  $conn->close();


?>
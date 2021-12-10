<?php
   // require("dbcredentials.php");

// Create connection
    //$conn = new mysqli(Server, Username, Password, Database);
    $conn = mysqli_connect( "localhost","root","", "greengro");
    // Check if connection is successful
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error."<br>");
      }
    else{  
      echo "Successful connection!<br>";
    }

?>
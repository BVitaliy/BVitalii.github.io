<?php
    $servername = "localhost";
    $database = "db_rev";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
//    mysql_select_db($database) or die("Не могу подключиться к базе.");

    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

 
?>
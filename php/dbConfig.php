<?php

    $servername = 'localhost:3306';
    $username = 'root';
    $password = '';
    $dbname = "bookmanagment1";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
      
    // Check connection
    if(!$connection){
        die('Database connection error : ' .mysql_error());
    }
    
?>
<?php   
    $servername = 'localhost';
    $username = 'ts_user';
    $password = 'pa55word';
    $dbname = 'tech_support';

//  create conntection to database
    $db = new mysqli($servername, $username, $password, $dbname);
//  check if connection is successful
    if(mysqli_connect_errno()){
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?> 
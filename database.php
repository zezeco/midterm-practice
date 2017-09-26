<?php  
    $servername = 'localhost';
    $username = 'mgs_user';
    $password = 'pa55word';
    $dbname = 'shopDB';

//  create conntection to database
    $db = new mysqli($servername, $username, $password, $dbname);
//  check if connection is successful
    if(mysqli_connect_errno()){
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?> 
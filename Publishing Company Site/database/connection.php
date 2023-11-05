<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';


    try{
        $conn = new PDO("mysql:host=$servername;dbname=pj_publishingcompany", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo("connected successfully");
    }
    catch(\Exception $e){
       
        $error_message = $e->getMessage();
    }

?>

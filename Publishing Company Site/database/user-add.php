<?php
    session_start();
   
    $table_name = $_SESSION['table'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypted = password_hash($password,PASSWORD_DEFAULT);



    $command = "INSERT INTO 
                            $table_name(first_name,last_name,email,password,created_at,updated_at)
                        values
                            ('".$first_name."', '".$last_name."','".$email."','".$password."',NOW(),NOW())";



    
  
    include('connection.php');
    $conn->exec($command);
    
   
    

header('location: homepage.php');
    

?>
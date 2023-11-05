<?php
    session_start();
   
    $table_name = $_SESSION['table'];
    $O_ID = $_POST['O_ID'];
    

    $command = " Delete from orders WHERE O_ID = '".$O_ID."' " ;
    



    
  
    include('connection.php');
    $conn->exec($command);
    
   
    

header('location: homepage-libdelete.php');
    

?>
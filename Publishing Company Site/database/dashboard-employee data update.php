<?php
    session_start();
   
    $table_name = $_SESSION['table'];
    $O_ID = $_POST['O_ID'];
    $O_STATUS = $_POST['O_STATUS'];
   



    $command = " UPDATE orders SET O_STATUS= '".$O_STATUS."' WHERE O_ID = '".$O_ID."' " ;
    



    
  
    include('connection.php');
    $conn->exec($command);
    
   
    

header('location: homepage-lib.php');
    

?>
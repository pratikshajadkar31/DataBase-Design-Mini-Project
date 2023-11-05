
<?php
    session_start();

    $table_name = $_SESSION['table'];
    $B_Name = $_POST['B_Name'];
    
    $B_Description = $_POST['B_Description'];
    
    // Prepare the INSERT statements
    $command = "INSERT INTO 
    books (B_Name,B_Description)
values
    ('".$B_Name."', '".$B_Description."')";
   
   

    include('connection.php');
    $conn->exec($command);
    
   

    header('location: homepage-book.php');
?>
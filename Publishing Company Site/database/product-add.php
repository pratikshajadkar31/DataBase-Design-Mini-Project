
<?php
    session_start();

    $table_name = $_SESSION['table'];
    
    $A_NAME = $_POST['A_NAME'];
    
    $A_EMAILID = $_POST['A_EMAILID'];
    $A_ContactNo = $_POST['A_ContactNo'];

    // Prepare the INSERT statements
    $command =  " INSERT INTO 
    authors (A_NAME,A_EMAILID,A_ContactNo)
values
    ('".$A_NAME."', '".$A_EMAILID."','".$A_ContactNo."')";
   

    include('connection.php');
    $conn->exec($command);
    
   
   

    header('location: homepage-product.php');
?>
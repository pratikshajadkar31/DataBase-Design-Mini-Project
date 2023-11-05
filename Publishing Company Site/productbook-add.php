<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'books';
    $_SESSION['table1'] = 'authors';
    $user = $_SESSION['user'];

?>

<! doctype html>
<html>
    <head>
	<title>Dashboard - Publishing Company</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">   
    </head>
    <body>

     <!--   <div id="dashboardMainContainer">
          // <?php include('partials/app-sidebar.php') ?>       
            <div class="dashboard_content_container" id="dashboard_content_container">
              //  <?php include('partials/app-topnav.php') ?>
                <div class="dashboard_content">               
                    <div class="dashboard_content_main">  -->
                         
<div>
<form action ="database/productbook-add.php" method = "POST" class="appForm">

<div class="appFormInputContainer1">
                                <label for="B_Name">Book Name</label>
                                <input type="text" class="appFormInput" id="B_Name" name="B_Name" required/>
                            </div>
                            <div class="appFormInputContainer1">
                                <label for="B_Description">Book Description</label>
                                <input type="text" class="appFormInput" id="B_Description" name="B_Description" required/>
                            </div>
                            <input type="hidden" name="table" value = "books" />
                             <button type="submit" class="appBtn"><i class="fa fa-plus"></i>Add Books</button>
                            
</form>
</div>

              <!--  </div>
            </div>
            </div>
        </div> -->           

   <!-- <script src="js/script.js"></script> -->

    </body>
</html>

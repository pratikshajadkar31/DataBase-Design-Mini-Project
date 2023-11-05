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
                         <div >
                         <form action ="database/product-add.php" method = "POST" class="appForm">
                            <div class="appFormInputContainer1">
                                <label for="A_NAME">Author Name</label>
                                <input type="text" class="appFormInput" id="A_NAME" name="A_NAME" required/>
                            </div>
                            
                            <div class="appFormInputContainer1">
                                <label for="A_EMAILID">Author Email</label>
                                <input type="text" class="appFormInput" id="A_EMAILID" name="A_EMAILID" required/>
                            </div>
                            <div class="appFormInputContainer1">
                                <label for="A_ContactNo">Contact No</label>
                                <input type="text" class="appFormInput" id="A_ContactNo" name="A_ContactNo" required/>
                            </div>
                             <input type="hidden" name="table" value = "authors" />
                             <button type="submit" class="app1Btn"><i class="fa fa-plus"></i>Add Author</button>
                            
                         </form>
                         </div>


              <!--  </div>
            </div>
            </div>
        </div> -->           

   <!-- <script src="js/script.js"></script> -->

    </body>
</html>

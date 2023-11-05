<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'books';
    $user = $_SESSION['user'];

?>

<! doctype html>
<html>
    <head>
	<title>Dashboard - Publishing Company</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">   
    </head>
    <body>

        <div id="dashboardMainContainer">
            <?php include('partials/app-sidebar.php') ?>           
            <div class="dashboard_content_container" id="dashboard_content_container">
                <?php include('partials/app-topnav.php') ?>
                <div class="dashboard_content">
                    <div class="dashboard_content_main">
                        <h1> <center> <u>Update / Delete Sales,Orders Data </u></center></h1>
                    <div >
                    <div id = "userAddFormContainer">
                        <form action ="database/dashboard-employee data update.php" method = "POST" class="appForm">
                            <div class="appFormInputContainer">
                                <label for="O_ID ">Order ID</label>
                                <input type="text" class="appFormInput" id="O_ID" name="O_ID" required/>
                            </div>
                            <div class="appFormInputContainer">
                                <label for="O_STATUS">Order Status</label>
                                <input type="text" class="appFormInput" id="O_STATUS" name="O_STATUS" required/>
                            </div>
                          
                            <input type="hidden" name="table" value = "orders" />
                            <button type="submit" class="appBtn"><i class="fa fa-plus"></i>Update Order Status</button>
                            <input type="hidden" name="table" value = "orders" />
                            <button type="submit" action ="database/dashboard-data delete.php" class="appBtn"><i class="fa fa-plus"></i>Delete Order Status</button>
                            
                        </form>
                    </div>
                        
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>

<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'users';
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
                        <div id = "userAddFormContainer">
                        <form action ="database/user-add.php" method = "POST" class="appForm">
                            <div class="appFormInputContainer">
                                <label for="first_name">First Name</label>
                                <input type="text" class="appFormInput" id="first_name" name="first_name" required/>
                            </div>
                            <div class="appFormInputContainer">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="appFormInput" id="last_name" name="last_name" required/>
                            </div>
                            <div class="appFormInputContainer">
                                <label for="email">Email</label>
                                <input type="text" class="appFormInput" id="email" name="email" required/>
                            </div>
                            <div class="appFormInputContainer">
                                <label for="password">Password</label>
                                <input type="password" class="appFormInput" id="password" name="password" required/>
                            </div>
                            <input type="hidden" name="table" value = "users" />
                            <button type="submit" class="appBtn"><i class="fa fa-plus"></i>Add User</button>
                            
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>

    <script src="js/script.js"></script>

    </body>
</html>

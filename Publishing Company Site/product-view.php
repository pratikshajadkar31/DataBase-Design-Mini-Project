<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'users';
    $user = $_SESSION['user'];
    $users = include('database/show-users.php');

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
                        <div class = "row">
                            <div class = "column column-12">
                                <h1 class = "section_header"><i class="fa fa-list"></i>AUTHORS AND BOOKS HUB</h1>
                                <div class = "section_content">
                                    <div class="users">
                                    <div class="loginButtonContainer">
<h3> CLICK : <button type="button" class="app1Btn" onclick="window.open('/Publishing Company/product-add.php')">Add Author Data</button></h3>
<h3> CLICK : <button type="button" class="app1Btn" onclick="window.open('/Publishing Company/productbook-add.php')">Add Book Data</button></h3>
</div>
<br>
                   <!-- <h1>AUTHORS <==> BOOKS </h1> -->
                    <table>
                        <thead>
                     <tr>
                     <!--<th>#</th> -->
                    <!--  <th>ID</th> -->
                        <th>Author ID</th>
                        <th>Author Name</th>
                        <th>Book Name</th>
                        <th>Author Email ID</th>
                        <th>Author Contact NO</th>
                    </tr>
                    <tbody>
                        <?php foreach($users as $index =>  $user){  ?>


                     
                    <tr>
                        <!-- <td><?= $index +1 ?></td> -->
                        <td><?= $user['A_ID'] ?></td>
                        <td><?= $user['A_Name'] ?></td>
                        <td><?= $user['B_Name'] ?></td>
                        <td><?= $user['A_EmailID'] ?></td>
                        <td><?= $user['A_ContactNo'] ?></td>
                        
                    </tr>
                    <?php } ?>
                        </tbody>
            </thead>
                    </table>
                    </div>
</div>
</div>
</div>

                </div>
            </div>
        </div>
    
<script src="js/script.js"></script>
    </body>
</html>

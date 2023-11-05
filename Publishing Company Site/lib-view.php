<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'users';
    $user = $_SESSION['user'];
    $users = include('database/show-lib.php');

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
                       <!-- <div class = "row">
                            <div class = "column column-12"> -->
                                <h1 class = "section_header"><i class="fa fa-list"></i>Library Data</h1>
                                <div class = "section_content">
                                    <div class="users">
                                    
<br>
                   <!-- <h1>AUTHORS <==> BOOKS </h1> -->
                    <table>
                        <thead>
                     <tr>
                     <!--<th>#</th> -->
                    <!--  <th>ID</th> -->
                        <th>Genere</th>
                        <th>Book Name</th>
                        <th>BookStore Name</th>
                        <th>Order Status</th>
                        <th>No of copies requested</th>
                        <th>Shipping Company</th>
                    </tr>
                    <tbody>
                        <?php foreach($users as $index =>  $user){  ?>


                     
                    <tr>
                        <!-- <td><?= $index +1 ?></td> -->
                        <td><?= $user['G_Name'] ?></td>
                        <td><?= $user['B_Name'] ?></td>
                        <td><?= $user['BS_Name'] ?></td>
                        <td><?= $user['O_STATUS'] ?></td>
                        <td><?= $user['NO_OF_COPIES'] ?></td>
                        <td><?= $user['S_Name'] ?></td>
                        
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
          <!--  </div>
        </div> -->
    
<script src="js/script.js"></script>
    </body>
</html>

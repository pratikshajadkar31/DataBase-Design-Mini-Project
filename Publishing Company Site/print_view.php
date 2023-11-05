<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location: login.php');
    $_SESSION['table'] = 'users';
    $user = $_SESSION['user'];
    $users = include('database/show-prints.php');

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
                        
                                <h1 class = "section_header"><i class="fa fa-list"></i>Orders and Shippers HUB</h1>
                                <div class = "section_content">
                                    <div class="users">
                                    
<br>
<br>
                   <!-- <h1>AUTHORS <==> BOOKS </h1> -->
                    <table>
                        <thead>
                     <tr>
                     <!--<th>#</th> -->
                    <!--  <th>ID</th> -->
                        <th>Order ID</th>
                        <th>Book Name</th>
                        <th>Edition Print count</th>
                        <th>Edition publishing date</th>
                        <th>Print house name</th>
                        <th>Print Price</th>
                        <th>Order Status</th>
                        <th>Shipper Name</th>
                        <th>Shipper EmailID</th>
                    </tr>
                    <tbody>
                        <?php foreach($users as $index =>  $user){  ?>


                     
                    <tr>
                        <!-- <td><?= $index +1 ?></td> -->
                        <td><?= $user['O_ID'] ?></td>
                        <td><?= $user['B_Name'] ?></td>
                        <td><?= $user['ET_PRINTS'] ?></td>
                        <td><?= $user['ET_PublishingDate'] ?></td>
                        <td><?= $user['PH_NAME'] ?></td>
                        <td><?= $user['ET_Price'] ?></td>
                        <td><?= $user['O_STATUS'] ?></td>
                        <td><?= $user['S_Name'] ?></td>
                        <td><?= $user['S_EmailID'] ?></td>
                        
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
            
    
<script src="js/script.js"></script>
    </body>
</html>

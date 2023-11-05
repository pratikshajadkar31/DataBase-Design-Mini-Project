<div class="dashboard_sidebar" id="dashboard_sidebar">
                <h3 class = "dashboard_logo" id="dashboard_logo">Welcome Pratiksha!</h3>

                <div class="dashboard_sidebar_user">
                    <div class="circle">
                    <img src ="images/PratikshaJadkar_Photo.jpg" alt="User image." id="userImage"/>
                    </div>
                    <span><? $user['first_name'] . ' ' . $user['last_name'] ?></span>
                </div>
            <div class="dashboard_content_menus">
                    <ul class="dashboard_menu_lists">
                        <li class="menuActive">
                            <a href="./dashboard.php" ><i class = "fa fa-dashboard"></i><span class="menutext">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="./lib-view.php"><i class = "fa fa-dashboard"></i><span class="menutext">Library data</span></a>
                        </li>
                        <li>
                            <a href="./product-view.php" ><i class = "fa fa-dashboard"></i><span class="menutext">Authors and Books HUB</span></a>
                        </li>
                        <li>
                            <a href="./users-add.php"><i class = "fa fa-dashboard"></i><span class="menutext">Directory</span></a>
                        </li>
                    </ul>
                </div>
            </div>
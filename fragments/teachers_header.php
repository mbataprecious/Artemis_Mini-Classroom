<div class="header">
        <header class="dash-header">
            <div class="dash-logo">
                <a href=""><img src="https://res.cloudinary.com/oluwamayowaf/image/upload/v1569396996/Artemis_wh3le6.svg"></a>
            </div>

            <div class="dash-profile">
                <span class="name">
                    <div id="username">
                        <p>Welcome</p>
                        <h1><?php echo $_SESSION["fullname"]; ?> </h1>
                    </div>
                </span>
                <span class="image-container">
                                                  <img src="https://res.cloudinary.com/oluwamayowaf/image/upload/v1568767225/Team%20Heroes%20Log%20In/Vector_x5kb7p.png" id="image">
                                                   <div class="drop-down">
                                                      <img src="https://res.cloudinary.com/oluwamayowaf/image/upload/v1569485655/team%20artemis/arrow_ltdhmt.png" id="arrow">
                                                      <ul id="nav-menu">
                                                        <li><a href="">Profile</a></li>
                                                        <li><a href="logout.php">Logout</a></li>
                                                      </ul>
                                                   </div>
                                                </span>
            </div>
        </header>

        <div class="extra-bg">
            <div class="topnav" id="myTopnav">
                <a href="teachers-dashboard.php">Dashboard</a>
                <a href="teacher_classes.php">My Classes</a>
                <!--<a href="logout.php">Logout</a>-->

                <a href="javascript:void(0);" class="icon" onclick="showMenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>




        </div>

    </div>
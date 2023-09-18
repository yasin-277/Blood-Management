<?php
session_start();
error_reporting(0);
?>
<header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-3 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-clock"></i>
                            24x7 Service
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-12">
                    <ul class="ulright">
                        <li>
                            <a href="#accounce" style="color: #FFF;">
                            <i class="fa fa-bullhorn "></i>
                            View Help Accouncment
                            <span>|</span>
                            </a>
                        </li>
                        <li>
                            <a href="#camps" style="color: #FFF;">
                            <i class="fas fa-hand-holding-heart"></i>
                            View Future Donation Camp
                            <span>|</span>
                            </a>
                        </li>
                        <?php if(!strlen($_SESSION['id']))
                        {   ?>
                        <li>
                            <a href="login.php" style="color: #FFF;"><i class="fas fa-user"></i>
                            Login
                            </a>
                        </li>
                        <?php } ?>
                        <li class="dropdown">
                        <?php if(strlen($_SESSION['id']))
                        {   ?>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff!important"> <?php echo htmlentities($_SESSION['username']);?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="home.php">Dashboard</a></li>
                            <li><a href="donateBlood.php">Donate Blood</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        <?php } ?>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-md-3 logo">
                    <img src="assets/images/logo.jpg" alt="">
                </div>
                <div class="col-md-9 nav-col">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="findBlood.php">Find Blood</a>
                                </li>
                                <?php if(!strlen($_SESSION['v_id']))
                                    {   ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="volunteerLogin.php">Become Volunteer</a>
                                </li>
                                <?php } ?>
                                <li class="dropdown">
                                <?php if(strlen($_SESSION['v_id']))
                                    {   ?>
                                    <a class=" nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo htmlentities($_SESSION['username']);?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <li><a href="volunteerhome.php">Dashboard</a></li>
                                    <li><a href="userDoationRequests.php">Collect Blood</a></li>
                                    <li><a href="vollogout.php">Log Out</a></li>
                                    </ul>
                                    <?php } ?>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

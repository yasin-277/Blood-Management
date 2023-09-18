<?php 
    include('conn.php'); 
    include('header.php');
    include('upper_menu.php');  
?>
<!-- ################# Slider Starts Here#######################--->

<div class="slider-detail">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/slider/slide-01.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class=" bounceInDown">Blood is a life, pass it on!</h5>
                    <div class=" vbh">

                        <div class="btn btn-success  bounceInUp"> Donote Blood Now </div>
                        <div class="btn btn-success  bounceInUp"> Contact US </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                <div class="carousel-caption vdg-cur d-none d-md-block">
                    <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                    <div class=" vbh">

                        <div class="btn btn-danger  bounceInUp"> Donote Blood Now </div>
                        <div class="btn btn-danger  bounceInUp"> Contact US </div>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--*************** About Us Starts Here ***************-->
<section id="about" class="contianer-fluid about-us" style="padding: 30px;">
       <div class="container">
           <div class="row session-title">
               <h2>About Us</h2>
               <p>There is a hope of life to someone in your blood donation.</p>
           </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About Blood Doners</h2>
                    <p></p>
                    <p> We are povide you a better way to save someones's life and make good dead at same time.Please donate Blood becuase A drop of blood can save a life! Don’t waste it and donate blood.</p>
                    <p>Blood donation at the right time can save millions of lifes all over the world every year.Plesae take look at our advance future donation camp details to be part of it and Donate blood and be the reason of smile to many faces.</p>
                    <p>Blood: Costs nothing to you and is priceless to someone else.</p>
                    <p>Your droplets of blood may create an ocean of happiness.</p>
                </div>
                <div class="col-md-6 image" align="center">
                    <img src="assets/images/about.jpg" alt="" height="300">
                </div>
            </div>
       </div>
</section>

   <!-- ################# Donation Process Start Here #######################--->
     
<section id="process" class="donation-care">
    <div class="container">
        <div class="row session-title">
            <h2>Our Donation Process</h2>
        </div>
        <div class="row">
                <div class="col-md-3 col-sm-6 vd">
                <div class="bkjiu">
                    <img src="assets/images/gallery/g1.jpg" alt="">
                    <h4><b>1 - </b>Online Registration</h4>
                    <p>You can fill online registartion form to be part of blood donation camp and take part in blood donation camp.</p>
                    <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                <div class="bkjiu">
                    <img src="assets/images/gallery/g2.jpg" alt="">
                    <h4><b>2 - </b>Able to check donation details.</h4>
                    <p>Doners can check donation camps and center details and reach out center also contact us for more details.</p>
                    <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                <div class="bkjiu">
                    <img src="assets/images/gallery/g3.jpg" alt="">
                    <h4><b>3 - </b>Donation</h4>
                    <p>Blood donation at the right time can save millions of lifes all over the world every year and pass it on!.</p>
                    <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                <div class="bkjiu">
                    <img src="assets/images/gallery/g4.jpg" alt="">
                    <h4><b>4 - </b>Save Life</h4>
                        <p>Plesae take look at our advance future donation camp details to be part of it and Donate blood and be the reason of smile to many faces.</p>
                        <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                </div> 
                </div>
        </div>   
    </div>
</section>
 <!--################### Our Camps Here #######################--->
 <div id="camps" class="blog-container contaienr-fluid">
    <div class="container">
        <div class="session-title row">
            <h2>Latest Camps</h2>
            <p>Your droplets of blood may create an ocean of happiness.</p>
        </div>
        <div class="row news-row">
            <?php
            $qry="select * from campaign";
            $result=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($result)){ ?>
            <div class="col-md-6">
                <div class="news-card">
                    <div class="image">
                        <img src="assets/images/blog/blog_04.jpg" alt="" style="height:200px!important;max-width:200px!important;;">
                    </div>
                    <div class="detail">
                        <h3><?php echo $row['cname'] ?></h3><br>
                        <p><?php echo $row['descp'] ?></p>
                        <p><b>Organizer Name: </b><?php echo $row['oname'] ?>  </p>
                        <p><b>Date: </b><?php echo $row['cdate'] ?>  </p>
                        <p><b>Contact Number: </b><?php echo $row['phn'] ?>  </p>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--################### Our accouncement Here #######################--->
<div id="camps" class="blog-container contaienr-fluid">
    <div class="container">
        <div class="session-title row">
            <h2>Latest Announcement</h2>
            <p>Your droplets of blood may create an ocean of happiness.</p>
        </div>
        <div class="row news-row">
            <?php
            $qry="select * from announce";
            $result=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($result)){ ?>
            <div class="col-md-6">
                <div class="news-card">
                    <div class="image">
                        <img src="assets/images/blog/blog_04.jpg" alt="" style="height:200px!important;max-width:200px!important;;">
                    </div>
                    <div class="detail">
                        <h3><?php echo $row['announcement'] ?></h3><br>
                        <p>Blood Type: <?php echo $row['bloodneed'] ?></p>
                        <p><b>Date of Accouncement: </b><?php echo $row['dat'] ?>  </p>
                        <p><b>Organizer Name: </b><?php echo $row['organizer'] ?>  </p>
                        <p><b>Requirements: </b><?php echo $row['requirements'] ?>  </p>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('footer.php');  ?>

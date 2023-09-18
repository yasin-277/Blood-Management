<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['id'])){
header('location:login.php');	
} 
include('conn.php'); 
include('includes/header.php');
include('includes/upper_menu.php');  
include('includes/sidemenu.php');  
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome : <?php echo htmlentities($_SESSION['username']);?></li>
                </ol>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Available Blood  <?php include 'counter/dashbloodcount.php';?> </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Future Blood Camps <?php include 'counter/dashboardcampaigncount.php';?></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Announcement <?php include 'counter/dashannouncecount.php';?></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">  
                <div class="row justify-content-center align-items-center ">
                    <div class="col-xl-12 col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Blood Campaign Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Campaign Name</th>
                                            <th>Organizer Name</th>
                                            <th>Phone Number</th>
                                            <th>Date of campaign</th>
                                            <th>Description</th>
                                            <th>Register for donation now</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $qry="select * from campaign";
                                        $result=mysqli_query($con,$qry);
                                        while($row=mysqli_fetch_array($result)){ ?>
                                        <tr>
                                            <td><?php echo $row['cname'] ?></td>
                                            <td><?php echo $row['oname'] ?></td>
                                            <td><?php echo $row['phn'] ?></td>
                                            <td><?php echo $row['cdate'] ?></td>
                                            <td><?php echo $row['descp'] ?></td>
                                            <td>
                                                <a href="donateBlood.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                                               
                                            </td>
                                        </tr>
                                        <?php  } ?> 
                                    </tbody>   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php include('includes/footer.php');  ?>

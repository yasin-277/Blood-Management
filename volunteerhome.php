<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['v_id'])){
header('location:volunteerLogin.php');	
} 
include('conn.php'); 
include('includes/header.php');
include('includes/volupper_menu.php');  
include('includes/volsidemenu.php');  
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome : <?php echo htmlentities($_SESSION['username']);?></li>
                </ol>
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">New Blood Donation Request 
                                <?php 
                                $sql = "SELECT * FROM blood_donation where status = '0' AND s_id = '".$_SESSION['v_id']."'";
                                $query = $con->query($sql);
                                echo "<h1>".$query->num_rows."</h1>";
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Future Blood Camps <?php include 'counter/dashboardcampaigncount.php';?></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">  
                <div class="row justify-content-center align-items-center ">
                    <div class="col-xl-12 col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Blood Donation Collection Request
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Blood Group</th>
                                            <th>Campaign Name</th>
                                            <th>Organizer Name</th>
                                            <th>Phone Number</th>
                                            <th>Date of campaign</th>
                                            <th>Donation Time</th>
                                            <th>Donation Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $qry="select blood_donation.*,donor.*,campaign.*,blood_donation.id AS did from blood_donation join donor on donor.id=blood_donation.u_id 
                                        join campaign on campaign.id=blood_donation.c_id where blood_donation.status ='0' AND blood_donation.s_id = '".$_SESSION['v_id']."' ";
                                        $result=mysqli_query($con,$qry);
                                        while($row=mysqli_fetch_array($result)){ ?>
                                        <tr>
                                            <td><span class="badge rounded-pill bg-info text-dark">New Request</span> <?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'] ?></td>
                                            <td><?php echo $row['bloodgroup'] ?></td>
                                            <td><?php echo $row['cname'] ?></td>
                                            <td><?php echo $row['oname'] ?></td>
                                            <td><?php echo $row['phn'] ?></td>
                                            <td><?php echo $row['cdate'] ?></td>
                                            <td><?php echo $row['donation_time'] ?></td>
                                            <td>
                                                <?php if($row['status'] == 0) {?>
												<span class="badge badge-warning">Pending Donation</span>
												<?php } elseif($row['status'] == 1) {?>
												<span class="badge badge-success">Collected Successfully</span>
												<?php } else {?>
												<span class="badge badge-dark">Not Avialable</span>
												<?php } ?>
                                            </td>
                                            <td>
                                                <a href="updateDonation.php?id=<?php echo $row['did'] ?>"><i class='fa fa-edit' style='color:green;margin:5px;'></i></a>
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

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
                <h1 class="mt-4">My Blood donation</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">My Blood donation</li>
                </ol>
            </div>
            <div class="container mt-5">  
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
                                            <th>Full Name</th>
                                            <th>Blood Group</th>
                                            <th>Campaign Name</th>
                                            <th>Organizer Name</th>
                                            <th>Phone Number</th>
                                            <th>Date of campaign</th>
                                            <th>Donation Time</th>
                                            <th>Donation Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $qry="select blood_donation.*,donor.*,campaign.* from blood_donation join donor on donor.id=blood_donation.u_id 
                                        join campaign on campaign.id=blood_donation.c_id where blood_donation.u_id ='".$_SESSION['id']."'";
                                        $result=mysqli_query($con,$qry);
                                        while($row=mysqli_fetch_array($result)){ ?>
                                        <tr>
                                            <td><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'] ?></td>
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


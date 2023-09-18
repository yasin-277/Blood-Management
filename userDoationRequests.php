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
                <h1 class="mt-4">Donation Requests</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Donation Requests</li>
                </ol>
            </div>
            <div class="container">  
                <div class="row justify-content-center align-items-center ">
                    <div class="col-xl-12 col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                New Donation Requests
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr> 
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Gender</th>
                                            <th>DOB</th>
                                            <th>Location details</th>
                                            <th>Address</th>
                                            <th>Blood Group</th>
                                            <th>Weight</th>
                                            <th>Other Detials</th>
                                            <th>Campaign Name</th>
                                            <th>Organizer Name</th>
                                            <th>Date of campaign</th>
                                            <th>Donation Time</th>
                                            <th>Status</th>
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
                                            <td><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['contact'] ?></td>
                                            <td><?php echo $row['gender'] ?></td>
                                            <td><?php echo $row['dob'] ?></td>
                                            <td><b>State: </b> <?php echo $row['state'] ?><br>
                                                <b>City: </b> <?php echo $row['city'] ?><br>
                                                <b>pincode: </b> <?php echo $row['pin_code'] ?>
                                            </td>
                                            <td><?php echo $row['address'] ?></td>
                                            <td><?php echo $row['bloodgroup'] ?></td>
                                            <td><?php echo $row['weight'] ?></td>
                                            <td><b>BP: </b><?php echo $row['bp_pro'] ?><br>
                                                <b>Sugar: </b><?php echo $row['sugar_pro'] ?><br>
                                                <b>HIV/AIDS: </b><?php echo $row['aids_pro'] ?></td> 
                                            <td><?php echo $row['cname'] ?></td>
                                            <td><?php echo $row['oname'] ?></td>
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
                                                <a href="deleteDonation.php?id=<?php echo $row['did'] ?>"><i class='fa fa-trash' style='color:red;margin:5px;'></i></a>
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

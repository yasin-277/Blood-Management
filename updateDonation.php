
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
                <h1 class="mt-4">Blood Group Type</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Blood Group Type</li>
                </ol>
            </div>
            <div class="container">
                <!-- /.row -->
                <div class="row gy-2 gx-3 justify-content-center align-items-center">
                    <div class="col-lg-6 border p-3">
                        <?php
                            $id=$_GET['id'];
                            $qry= "select blood_donation.*,donor.*,campaign.* from blood_donation join donor on donor.id=blood_donation.u_id 
                            join campaign on campaign.id=blood_donation.c_id where blood_donation.id ='$id'";
                            $result=mysqli_query($con,$qry);
                            while($row=mysqli_fetch_array($result)){
                        ?> 
                        <form role="form" action="updateDonationStatus.php" method="post">
                            <div class="form-group">
                                <label>Donor Fullname</label>
                                <input class="form-control" type="text" value='<?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?>' readonly>
                            </div>
                            <div class="form-group">
                                <label>Campaign Name</label>
                                <input class="form-control" name="cname" type="text" value='<?php echo $row['cname']; ?>' readonly>
                            </div>
                            <div class="form-group">
                                <label>Organizer Name</label>
                                <input class="form-control" type="text" value='<?php echo $row['oname']; ?>' readonly>
                            </div>
                            <div class="form-group">
                                <label>Campaign Date</label>
                                <input class="form-control" type="date"  value='<?php echo $row['cdate']; ?>' readonly>
                            </div>
                            <div class="form-group">
                                <label>Campaign Appointment Time</label>
                                <input class="form-control"  value='<?php echo $row['donation_time']; ?>' readonly>
                            </div>
                            <div class="form-group">
                                <label>Blood Quantity</label>
                                <input class="form-control" name="blood_quantity" required  placeholder="Enter Blood Quantity">
                            </div>
                            <div class="form-group">
                                <label>Update Collection Status</label>
                                <select class="form-control"  name="col_status" required>
                                    <option value="">Choose</option>
                                    <option value="0">Pending Donation</option>
                                    <option value="1">Collected Successfully</option>
                                    <option value="2">Not Avialable</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Blood Quantity</label>
                                <input class="form-control" type="date" name="collection" required  placeholder="Enter Collection Date">
                            </div>
                            <!-- id hidden grna input type ma "hidden" -->
                            <input type="hidden" name="id" value="<?php echo $id;?>">      

                            <button type="submit"  class="btn btn-success mt-3">Update Changes</button>
    
                        </form> 
                        <?php } ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </main>
    </div>
<?php include('includes/footer.php');  ?>

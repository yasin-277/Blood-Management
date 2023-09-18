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
                <h1 class="mt-4">My Profile</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">My Profile</li>
                </ol>
            </div>
            <div class="container m-5">
                <!-- /.row -->
                
                    <div class="col-lg-10">
                        <?php
                            $id = $_SESSION['id'];
                            $qry=("SELECT * FROM donor WHERE id= '".$_SESSION['id']."' ");
                            $result=mysqli_query($con,$qry);
                            while($row=mysqli_fetch_array($result)){
                            $Gender = $row['gender'];
                            $bloodGroup = $row['bloodgroup'];
                        ?> 
                        <form class="row g-3 p-3 border justify-content-center align-items-center" method="post" action="EditProfileDetails.php">
                            <input type="hidden" name="id" value="<?php echo $id;?>">   
                            <div class="col-md-4">
                                <label class="form-label">First Name</label>
                                <input class="form-control" name="first_name" type="text" value='<?php echo $row['first_name']; ?>' required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Middle Name</label>
                                <input class="form-control" type="text" name="middle_name" value='<?php echo $row['middle_name']; ?>' required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="last_name" value='<?php echo $row['last_name']; ?>' required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Id</label>
                                <input class="form-control" type="text"name="email"  value='<?php echo $row['email']; ?>' required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mobile Number</label>
                                <input class="form-control" type="text" name="mobile_no" value='<?php echo $row['contact']; ?>' required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option selected>Choose...</option>
                                    <option value="Male" <?php if( $Gender == 'Male'){ echo 'selected="selected"'; } ?>>Male</option>
                                    <option value="Female" <?php if( $Gender == 'Female'){ echo 'selected="selected"'; } ?>>Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Birth Date</label>
                                <input class="form-control" type="date"  name="birth_date" value='<?php echo $row['dob']; ?>' required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">State</label>
                                <input class="form-control" type="text"  name="state" value='<?php echo $row['state']; ?>' required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" name="city" value='<?php echo $row['city']; ?>' required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Pin code</label>
                                <input class="form-control" type="text" name="pin_code" value='<?php echo $row['pin_code']; ?>' required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" type="text" name="address"  required><?php echo $row['address']; ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Blood Group Type</label>
                                <select class="form-control" name="bloodgroup" required>
                                    <option selected>Choose...</option>
                                    <?php $query=mysqli_query($con,"select * from blood_group_category");
                                        while($rowData=mysqli_fetch_array($query))
                                        {?>
                                        <option value="<?php echo $rowData['blood_group_name'];?>"  <?php if( $rowData['blood_group_name'] == $bloodGroup){ echo 'selected="selected"'; } ?>><?php echo $rowData['blood_group_name'];?></option>
                                        <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Weight</label>
                                <input class="form-control" type="text" name="weight" value='<?php echo $row['weight']; ?>' required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Have Blood Pressure Problem?</label>
                                <select class="form-control" name="bp_pro" required>
                                    <option selected>Choose</option>
                                    <option value="Yes" <?php if( $row['bp_pro'] == 'Yes'){ echo 'selected="selected"'; } ?>>Yes</option>
                                    <option value="No" <?php if( $row['bp_pro'] == 'No'){ echo 'selected="selected"'; } ?>>No</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Have Sugar Problem?</label>
                                <select class="form-control" name="sugar_pro" required>
                                    <option selected>Choose</option>
                                    <option value="Yes" <?php if( $row['sugar_pro'] == 'Yes'){ echo 'selected="selected"'; } ?>>Yes</option>
                                    <option value="No" <?php if( $row['sugar_pro'] == 'No'){ echo 'selected="selected"'; } ?>>No</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Have HIV and AIDS Problem?</label>
                                <select class="form-control" name="aids_pro" required>
                                    <option selected>Choose</option>
                                    <option value="Yes" <?php if( $row['aids_pro'] == 'Yes'){ echo 'selected="selected"'; } ?>>Yes</option>
                                    <option value="No" <?php if( $row['aids_pro'] == 'No'){ echo 'selected="selected"'; } ?>>No</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="control-label text-success"><input type="checkbox" name="agreetoshowdetails" <?php if( $row['agree_show_det'] == 'Yes'){ echo 'checked'; } ?> id="c3" >&nbsp; I agree to the Term and Conditions and consent to have my contact and donor information published to the potential blood recipients.</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" name="submit" class="btn btn-success mt-3">Update Changes</button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                <!-- /.row -->
            </div>
        </main>
    </div> 

<?php include('includes/footer.php');  ?>

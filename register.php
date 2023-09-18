<?php
include 'conn.php';
include 'header.php';
include 'upper_menu.php';
?>
<section class="contianer-fluid" style="padding: 70px;">
       <div class="container">
           <div class="row justify-content-center align-items-center h-100">
                <div class="col col-sm-6 col-md-6 col-lg-12 col-xl-12 border p-5">
                    <form method="post" action="Donor_reg.php" autocomplete="off" role="form" enctype="multipart/form-data">
                    <h2 class="mb-5">Sign Up</h2>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPassword4">Middle Name</label>
                            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPassword4">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputCity">Gender</label>
                            <select class="form-control" name="gender">
                                <option selected>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Birth Date</label>
                                <div class="input-group date">
                                <input type="date" class="form-control pull-right" id="datepicker" name="birth_date" required="" >
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputZip">Mobile No</label>
                            <input type="number" class="form-control" name="mobile_no" placeholder="Mobile No">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputZip">State</label>
                                <input type="text" class="form-control" name="state" placeholder="State">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Pin code</label>
                                <input type="text" class="form-control" name="pin_code" placeholder="Pin code">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Address</label>
                            <textarea type="text" class="form-control" name="address" placeholder="Enter Address"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Blood Group Type</label>
                            <select class="form-control" name="blood_group">
                                <option selected>Choose...</option>
                                <?php $query=mysqli_query($con,"select * from blood_group_category");
                                while($row=mysqli_fetch_array($query))
                                {?>

                                <option value="<?php echo $row['blood_group_name'];?>"><?php echo $row['blood_group_name'];?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputZip">Weight</label>
                                <input type="text" class="form-control" name="weight" placeholder="Enter your Weight">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Have Blood Pressure Problem?</label>
                                <select class="form-control" name="bp_pro">
                                    <option selected>Choose</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Have Sugar Problem?</label>
                                <select class="form-control" name="sugar_pro">
                                    <option selected>Choose</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Have HIV and AIDS Problem?</label>
                                <select class="form-control" name="aids_pro">
                                    <option selected>Choose</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="control-label text-success" for="fileToUpload" >Upload Photo</label>
                                <input type="file" class="form-control" name="fileToUpload">
                            </div>
                        </div>
                        <div class="form-row">
							  <div class="form-group">
								<label class="control-label text-success"><input type="checkbox" name="Agreetoconditions" checked id="c2" >&nbsp; I have read the eligibility criteria and confirm that i am eligible to donate blood.</label> 
								<label class="control-label text-success"><input type="checkbox" name="agreetoshowdetails" checked id="c3" >&nbsp; I agree to the Term and Conditions and consent to have my contact and donor information published to the potential blood recipients.</label>
						  </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    <div class="d-flex justify-content-center">
						<a href="login.php" style="text-decoration:none;margin-top:25px;">Already have an account? Login in to your account.</a>
					</div>
                </div>
            </div>
        </div>
</section>
<?php include 'footer.php';?>
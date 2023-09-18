<?php
include 'conn.php';
include 'header.php';
include 'upper_menu.php';
?>
<section class="contianer-fluid" style="padding: 70px;">
       <div class="container">
           <div class="row justify-content-center align-items-center h-100">
                <div class="col col-sm-6 col-md-6 col-lg-12 col-xl-12 border p-5">
                    <form method="post" action="Vol_reg.php" autocomplete="off" role="form" enctype="multipart/form-data">
                    <h2 class="mb-5">Sign Up</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Mobile Number</label>
                            <input type="text" class="form-control" name="monile_num" placeholder="Mobile Number">
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
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Address</label>
                                <textarea type="text" class="form-control" name="address" placeholder="Address" rows="2"></textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    <div class="d-flex justify-content-center">
						<a href="volunteerLogin.php" style="text-decoration:none;margin-top:25px;">Already have an account? Login in to your account.</a>
					</div>
                </div>
            </div>
        </div>
</section>
<?php include 'footer.php';?>

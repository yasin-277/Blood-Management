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
<?php
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM donor where password='".md5($_POST['cpass'])."' && id='".$_SESSION['v_id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update donor set password='".md5($_POST['newpass'])."' where id='".$_SESSION['v_id']."'");
echo "<script>alert('Password Changed Successfully !!');</script>";
}
else
{
	echo "<script>alert('Current Password not match !!');</script>";
}
}

?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Change Password</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Change Password</li>
                </ol>
            </div>
            <div class="container">
                <!-- /.row -->
                <div class="row gy-2 gx-3 justify-content-center align-items-center">
                    <div class="col-lg-6 border p-3">
                        
                        <form role="form" method="post" name="chngpwd" onSubmit="return valid();">
								<div class="form-group">
									<label class="my-2">Current Password</label>
									<input class="form-control" type="password" id="cpass" name="cpass" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input class="form-control" type="password" id="newpass" name="newpass" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>New Confirm Password</label>
									<input class="form-control" type="password" id="cnfpass" name="cnfpass" placeholder="" required="">
								</div>     
                            <button type="submit" name="submit" class="btn btn-success mt-3">Update Profile</button>
                        </form> 
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </main>
    </div>
<?php include('includes/footer.php');  ?>

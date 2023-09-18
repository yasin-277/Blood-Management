
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
                <h1 class="mt-4">My Profile</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">My Profile</li>
                </ol>
            </div>
            <div class="container">
                <!-- /.row -->
                <div class="row gy-2 gx-3 justify-content-center align-items-center">
                    <div class="col-lg-6 border p-3">
                        <?php
                            $id = $_SESSION['v_id'];
                            $qry=("SELECT * FROM volunteer WHERE id = '".$_SESSION['v_id']."' ");
                            $result=mysqli_query($con,$qry);
                            while($row=mysqli_fetch_array($result)){
                        ?> 
                        <form role="form" action="updateVolProfile.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id;?>"> 
                            <div class="form-group">
                                <label>Fullname</label>
                                <input class="form-control" type="text" name="fullname" value='<?php echo $row['fullname']; ?>' required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" type="text" value='<?php echo $row['email']; ?>' required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" type="text" name="address" required><?php echo $row['address']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input class="form-control" type="number" name="mobile_num" value='<?php echo $row['mobile_num']; ?>' required>
                            </div>     

                            <button type="submit" name="submit" class="btn btn-success mt-3">Update Profile</button>
    
                        </form> 
                        <?php } ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </main>
    </div>
<?php include('includes/footer.php');  ?>

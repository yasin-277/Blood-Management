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
                <h1 class="mt-4">Donate Blood</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Donate Blood</li>
                </ol>
            </div>
            <div class="container">
                <!-- /.row -->
                <div class="row gy-2 gx-3 justify-content-center align-items-center">
                    <div class="col-lg-6 border p-3">
                        <form role="form" action="donationRequest.php" method="post">
                            <input type="hidden" name="u_id" value="<?php echo htmlentities($_SESSION['id']);?>">
                            <div class="form-group">
                                <label>Select Blood Campaign</label>
                                <select class="form-control" name="donationCamp" onChange="getDetails(this.value)"  required>
                                    <option selected>Choose...</option>
                                    <?php $query=mysqli_query($con,"select * from campaign");
                                    while($row=mysqli_fetch_array($query))
                                    {?>

                                    <option value="<?php echo $row['id'];?>"><?php echo $row['cname'];?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <div id="donationDate">
                            </div>
                            <div class="form-group">
                                <label>Approx Arriaval time for Donation</label>
                                <input class="form-control" type="time" name="donation_time" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success mt-3">Submit Request</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </main>
    </div>
<?php include('includes/footer.php');  ?>


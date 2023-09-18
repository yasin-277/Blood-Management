<?php
session_start();
error_reporting(0);
include'conn.php';

if(isset($_POST['submit'])) 
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $qry=mysqli_query($con,"SELECT * FROM donor WHERE email='$email' AND password='$password'");
    $num=mysqli_fetch_array($qry);
if($num>0)
{
$extra="home.php";//
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['first_name'].' '.$num['last_name'];
header("location:$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="login.php";

header("location:$extra");
exit();
}

}

 ?>
<?php 
    include('header.php');
    include('upper_menu.php');  
?>
<section class="contianer-fluid" style="padding: 70px;">
       <div class="container">
           <div class="row justify-content-center align-items-center h-100">
                <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 border p-5">
                    <form method="post" autocomplete="off">
                    <h2 class="mb-5">Sign In</h2>
                    <span style="color:red;" >
                        <?php
                        echo htmlentities($_SESSION['errmsg']);
                        ?>
                        <?php
                        echo htmlentities($_SESSION['errmsg']="");
                        ?>
                    </span>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" required="" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" required="" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="d-flex justify-content-center">
						<a href="register.php" style="text-decoration:none;margin-top:25px;">Don't have an account?</a>
					</div>
                </div>
            </div>
        </div>
</section>
<?php include('footer.php');  ?>
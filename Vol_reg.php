<?php include('conn.php'); ?>
<?php
if(isset($_POST["submit"]))
{


$password=md5($_POST['password']);

$sql="
INSERT INTO volunteer 
(fullname,email, password, address, mobile_num)
 VALUES 
 ('{$_POST["full_name"]}', '{$_POST["email"]}', '{$password}', '{$_POST["address"]}','{$_POST["monile_num"]}');";
    if($con->query($sql))
        {
            echo '
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Thank you for adding you as donor.
            </div>
            ';
            header('location:volunteerLogin.php');
        }
    else{
        echo 'else';

    }
}
?>

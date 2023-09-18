
<?php

include 'conn.php';
if(isset($_POST['submit'])) 
{
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $mobile_num=$_POST['mobile_num'];
    $id=$_POST['id'];
    //update query
    $qry = "update volunteer set fullname='$fullname',email='$email',address='$address',mobile_num='$mobile_num' where id='$id'";
    //print_r($qry);die;
    $result = mysqli_query($con,$qry); //query executes
    if(!$result){
        echo"ERROR". mysqli_error();
    }else {
        echo"Donation updated";
        header('Location:volunteerhome.php');
    }
}
?>

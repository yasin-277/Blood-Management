
<?php

include 'conn.php';
$bloodqty = $_POST["blood_quantity"];
$status = $_POST["col_status"];
$collection = $_POST["collection"];
$id=$_POST['id'];
//update query
$qry = "update blood_donation set bloodqty='$bloodqty',status='$status',collection='$collection' where id='$id'";
$result = mysqli_query($con,$qry); //query executes
if(!$result){
    echo"ERROR". mysqli_error();
}else {
    echo"Donation updated";
    header('Location:userDoationRequests.php');
}
?>

<?php 

if(isset($_POST['submit'])){

$u_id = $_POST["u_id"];    
$c_id = $_POST["donationCamp"];
$donation_time = $_POST["donation_time"];

include 'conn.php';
//code after connection is successfull
$qry = "insert into blood_donation(u_id,c_id,donation_time) values ('$u_id','$c_id','$donation_time')";
$result = mysqli_query($con,$qry); //query executes

if($u_id){
    $userdata=mysqli_query($con,"SELECT * FROM donor WHERE id=$u_id");
    while($row=mysqli_fetch_array($query))
    {
        $donoStatus = $row['donor_status'];
    }
    if($donoStatus == 0){
        $qry = "update donor set donor_status='1' where id='$u_id'";
        $result = mysqli_query($con,$qry); //query executes
    }
}


if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
    header('Location:home.php');
}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}


?>
 

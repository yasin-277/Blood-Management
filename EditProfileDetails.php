<?php

include 'conn.php';
if(isset($_POST['submit'])) 
{
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $birth_date = $_POST["birth_date"];
    $mobile_no=$_POST['mobile_no'];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $pin_code = $_POST["pin_code"];
    $address = $_POST["address"];
    $bloodgroup = $_POST["bloodgroup"];
    $weight = $_POST["weight"];
    $bp_pro = $_POST["bp_pro"];
    $sugar_pro = $_POST["sugar_pro"];
    $aids_pro = $_POST["aids_pro"];
    //$agree_show_det = $_POST["agree_show_det"];
    $id=$_POST['id'];
    //update query
    $qry = "update donor set first_name='$first_name',middle_name='$middle_name',last_name='$last_name',
    email='$email',gender='$gender',dob='$birth_date',
    contact='$mobile_no',state='$state',city='$city',pin_code='$pin_code',
    address='$address',bloodgroup='$bloodgroup',weight='$weight',bp_pro='$bp_pro',
    sugar_pro='$sugar_pro',aids_pro='$aids_pro'
     where id='$id'";
    // print_r($qry);die;
    $result = mysqli_query($con,$qry); //query executes
    if(!$result){
        echo"ERROR". mysqli_error();
    }else {
        echo"Profile updated";
        header('Location:home.php');
    }
}
?>


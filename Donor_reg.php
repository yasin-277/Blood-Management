<?php include('conn.php'); ?>
<?php
if(isset($_POST["submit"]))
{
						
										
$target_dir = "donor_image/";
$img="donor_image/noimage.jpg";
$target_file = $target_dir.rand(100,999). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
      //  echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $img=$target_file;
    } else {
     //   echo "Sorry, there was an error uploading your file.";
    }
}

$password=md5($_POST['password']);

$sql="
INSERT INTO donor 
(first_name, middle_name,last_name, email, password, gender, dob, contact, state, city, pin_code, address, bloodgroup, weight, bp_pro, sugar_pro, aids_pro, fileToUpload, agree_show_det)
 VALUES 
 ('{$_POST["first_name"]}', '{$_POST["middle_name"]}', '{$_POST["last_name"]}', '{$_POST["email"]}', '{$password}', 
 '{$_POST["gender"]}', '{$_POST["birth_date"]}', '{$_POST["mobile_no"]}', '{$_POST["state"]}','{$_POST["city"]}','{$_POST["pin_code"]}',
  '{$_POST["address"]}', '{$_POST["bloodgroup"]}', '{$_POST["weight"]}', '{$_POST["bp_pro"]}','{$_POST["sugar_pro"]}','{$_POST["aids_pro"]}', '{$img}','{$_POST["agree_show_det"]}');";
    if($con->query($sql))
        {
            echo '
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Thank you for adding you as donor.
            </div>
            ';
            header('location:login.php');
        }
    else{
        echo 'else';

    }
}
?>

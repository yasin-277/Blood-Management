<?php
include('conn.php');
if(!empty($_POST["d_id"])) 
{
 $id=intval($_POST['d_id']);
$query=mysqli_query($con,"SELECT * FROM campaign WHERE id=$id");

 while($row=mysqli_fetch_array($query))
 {
  ?>
  <div class="form-group">
        <label>Organizer Name</label>
        <input class="form-control" type="text" value="<?php echo htmlentities($row['oname']); ?>" readonly>
    </div>

    <div class="form-group">
        <label>Contact Number</label>
        <input class="form-control" value="<?php echo htmlentities($row['phn']); ?>" readonly>
    </div>

    <div class="form-group" id="donationDate">
        <label>Campaign Date</label>
        <input class="form-control" type="date" value="<?php echo htmlentities($row['cdate']); ?>" readonly>
    </div>
  <?php
 }
}
?>

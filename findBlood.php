<?php
session_start();
error_reporting(0);
include'conn.php';

?>
<?php 
    include('header.php');
    include('upper_menu.php');  
?>
<section class="contianer-fluid" style="padding: 70px;">
       <div class="container">
           <div class="row justify-content-center align-items-center h-100">
                <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 border p-5">
                    <form name="frm" id="frm">
                    <h2 class="mb-5">Search Blood</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Required Blood Group</label>
                        <select class="form-control" name="blood_group">
                                <option selected>Choose...</option>
                                <?php $query=mysqli_query($con,"select * from blood_group_category");
                                while($row=mysqli_fetch_array($query))
                                {?>

                                <option value="<?php echo $row['blood_group_name'];?>"><?php echo $row['blood_group_name'];?></option>
                                <?php } ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter City Name</label>
                        <input type="text" class="form-control"  name="str" id="str" required placeholder="Type Here">
                    </div>
                    <button class="btn btn-primary" name="submit" type="button" id="submit"><i class='fa fa-search'></i> Search Donor</button>
                    </form>
                    <div class="d-flex justify-content-center mt-2">
                    <p>Please fill the correct details and search your nearest donor.For more queries contact our admin.</p>
					</div>
                </div>
            </div>
            <div class="row mt-5"></div>
                <div class="col-lg-12 col-md-12 col-lg-6" id="feedback">
                
                </div>
            </div>
        </div>
</section>
    
</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
	$(document).on('click','#submit',function(){
		
		$.ajax({
					url:"search_don.php",
					method:"POST",
					data:$("#frm").serialize(),
					success:function(data)
					{
						$("#feedback").html(data);
						
					}
				});
		
	});
 </script>
</html>

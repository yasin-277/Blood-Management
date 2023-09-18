<?php 
			include 'conn.php';
			if(!empty($_POST["str"]))
			{
				$result=mysqli_query($con,"SELECT * FROM donor WHERE city LIKE '%{$_POST["str"]}%'  AND 	bloodgroup='{$_POST["blood_group"]}' AND donor_status = 1");;
				// $result=$con->query($sql);
                // $result=mysqli_query($con,$sql);

                //print_r($sql);die;
                if(!$result){
                    echo "<div class='alert alert-danger'><i class='fa fa-users'></i> No Donors Found</div>";
                }
               else
				{
					$i=0;
					echo "<div class='table-responsive'><table class='table table-striped table-bordered'>
								<tr class='text-primary'>	
									<th>Sno</th>
									<th>Picture</th>
                                    <th>Fist Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Blood Group</th>
                                    <th>Mobile No</th>
                                    <th>Email</th>
									<th>City</th>
									<th>State</th>
									<th>Pincode</th>
                                    <th>Address</th>
								</tr>
							";
						
                        while($row=mysqli_fetch_array($result)){
				
						
							$i++;
							echo"<tr>";
							echo"<td>$i</td>";
							echo"<td><img src='{$row["fileToUpload"]}' class='don_img' height='150px' width='150px'></td>";
							echo"<td>{$row["first_name"]}</td>";
							echo"<td>{$row["middle_name"]}</td>";
							echo"<td>{$row["last_name"]}</td>";
							echo"<td>{$row["bloodgroup"]}</td>";
                            echo"<td>{$row["contact"]}</td>";
							echo"<td>{$row["email"]}</td>";
							echo"<td>{$row["city"]}</td>";
							echo"<td>{$row["state"]}</td>";
							echo"<td>{$row["pin_code"]}</td>";
                            echo"<td>{$row["address"]}</td>";
							echo"</tr>";
						// }
						
					}
					echo "</table></div>";
					
				}
			}
			else
			{
				echo "<script>alert('Please Type Search Text..');</script>";
			}
			

?>


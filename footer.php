<!--*************** Footer  Starts Here *************** -->
<footer id="contact" class="container-fluid">
        <div class="container">

            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>Kosamba-Mahuvej Road, Behind Old Mariyam Bai Hospital, Kosamba- 394 120, Dist- Surat, Gujarat.</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>donateblood@gmail.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 8469975370</p>
                            <p>+91 7622090628</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                   <div class="row no-margin mt-2">
                    <h2>Quick Links</h2>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Contacts</li>
                        <li>Login</li>
                        <li>Register</li>
                        <li>Become donor</li>

                    </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <img scr="assets/images/about.jpg">
                </div>
            </div>
            <div class="footer-copy" align="center">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <p>Copyright © <a href="https://www.smarteyeapps.com"></a> | All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


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

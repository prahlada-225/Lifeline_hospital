<?php
	include('includes/header.php');
?>
	<div class="container-fluid inner_page">
		<div class="inner_heading">
			<p><a href="index.php">Home</a>&nbsp; / &nbsp; <a href="#">Contact Us</a></p>
		</div>
		
		
        <div class="row about_inner container">
            
            <?php if(isset($_GET['msg'])){ ?>
                    <div class="col-sm-12 col-md-12 success_msg" ><?php echo "Thank You. We will get back to you soon."; ?></div>
                    <?php } ?>
    		<div class="col-sm-12 col-md-6">
    		    
    			<div class="about_info">
    				<h3 class="head-info">Lifeline</h3>
                    <h2><b>MEDICURE HOSPITALS</b></h2>
    				<br>
    				<ul class="contact_info">
    				    <li class="row">
    				        <span class="contact_svg"><i class="fa fa-map-marker-alt"></i></span>
    				        <span class="contact_txt">1-13-21, Lothkunta Signal, <br>
Opp: Nartaki Tiffins, Lothkunta, <br>
Alwal,Secunderabad - 500010, Telangana.</span>
    				    </li>
    				    <li class="row">
    				        <a href="tel:+91 040-2797 7449 "><i class="fa fa-phone"></i>040-2797 7449 </a>
    				    </li>
    				    <li class="row">
    				        <a href="mailto:info@medicurehospital.com"><i class="fa fa-envelope"></i>info@medicurehospital.com</a>
    				    </li>
    				</ul>
    				<h5><b><i>We would love to hear from you!</i></b></h5>
    				<form action="submit.php" method="post">
    				    <div class="form-group">
                          <input type="name" class="form-control" id="txtName" placeholder="Name*" name="name" required>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" id="txtEmail" placeholder="email*" name="email" required>
                        </div>
                        <div class="form-group">
                          <input type="tel" class="form-control" id="txtPhone" placeholder="Phone Number*" name="phone" minlength="10" maxlength="10" required>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="message" placeholder="Message" rows="4" id="txtMessage"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      <div class="error-msg"> </div>
                      
    			</div>
    		</div>
    		<div class="col-sm-12 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d647.2748046462679!2d78.51198742008955!3d17.493736537931788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9ae68182abbb%3A0xae8f98d5cd5ae6ae!2sNew%20Lifeline%20Medicure%20Hospitals!5e0!3m2!1sen!2sin!4v1577951129636!5m2!1sen!2sin" width="600" height="550" frameborder="0" style="border:1px solid #ccc; border-radius: 10px;" allowfullscreen=""></iframe>
    		</div>
		</div>
	</div>
    <!-- Footer -->
<?php
	include('includes/footer.php');
?>
<!--end Footer -->
</body>
</html>

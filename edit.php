<?php
    if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
		$rs=mysqli_query($conn,"select * from details where email='$email'");
		if($r=mysqli_fetch_array($rs)){
?>			
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?=$r["fname"]." ",$r["lname"]?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php
     include("navbar.php");
?>	 
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : 254870</h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?=$r["code"]?>.jpg">
							<img src="profile/<?=$r["code"]?>.jpg" />
						</li><br>
						
					 </ul>
				  </div>
				  <label>Change Image : </label>
				        <form method="post" action="update_image.php" enctype="multipart/form-data">
						    <input type="file" name="photo" class="form-control"><br>
							<input type="submit" value="Update" class="btn btn-danger">
						</form>	
			</div>
			<div class="col-sm-8 row_1">
			    <?php 
				    if(isset($_GET["success"])){
						?>
						    <div class="alert alert-success">Record Updated</div>
						<?php
					    }
						if(isset($_GET["img_success"])){
						?>
						    <div class="alert alert-success">Image Updated</div>
						<?php
						}
						if(isset($_GET["img_err"])){
						?>
						    <div class="alert alert-success">Image not updated...try again</div>
						<?php
						}
                        if(isset($_GET["empty"])){
                        ?>
                            <div class="alert alert-danger">All Field Required</div>
                        <?php
                        }
                    ?>	
                <form method="post" action="update.php">					
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">First Name :</td>
							<td class="day_value"><input type="text" name="fname" value="<?=$r["fname"]?>" class="form-control" required></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Name :</td>
							<td class="day_value"><input type="text" name="lname" value="<?=$r["lname"]?>" class="form-control" required></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Gender :</td>
							<td class="day_value"><select name="gender" class="form-control" required>
						                  <option value="<?=$r["gender"]?>"><?=$r["gender"]?></option>
										  <option value="Male">Male</option>
										  <option value="Female">Female</option>
										  </select></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Caste :</td>
							<td class="day_value"><input type="text" name="caste" value="<?=$r["caste"]?>" class="form-control" required></td>
					    </tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><select name="religion" class="form-control" required>
						                    <option value="<?=$r["religion"]?>"><?=$r["religion"]?></option>
											<option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
											<option value="Agnostic">Agnostic</option>
											<option value="Atheist">Atheist</option>
											<option value="Baha'i">Baha'i</option>
											<option value="Buddhism">Buddhism</option>
											<option value="Cao Dai">Cao Dai</option>
											<option value="Chinese traditional religion">Chinese traditional religion</option>
											<option value="Christianity">Christianity</option>
											<option value="Hinduism">Hinduism</option>
											<option value="Islam">Islam</option>
											<option value="Jainism">Jainism</option>
											<option value="Juche">Juche</option>
											<option value="Judaism">Judaism</option>
											<option value="Neo-Paganism">Neo-Paganism</option>
											<option value="Nonreligious">Nonreligious</option>
											<option value="Rastafarianism">Rastafarianism</option>
											<option value="Secular">Secular</option>
											<option value="Shinto">Shinto</option>
											<option value="Sikhism">Sikhism</option>
											<option value="Spiritism">Spiritism</option>
											<option value="Tenrikyo">Tenrikyo</option>
											<option value="Unitarian-Universalism">Unitarian-Universalism</option>
											<option value="Zoroastrianism">Zoroastrianism</option>
											<option value="primal-indigenous">primal-indigenous</option>
											<option value="Other">Other</option>
											</select></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">DOB :</td>
							<td class="day_value"><input type="date" name="dob" value="<?=$r["birth"]?>" class="form-control" required></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Occupation :</td>
							<td class="day_value"><select name="occupation" class="form-control" required>
						                    <option value="<?=$r["occupation"]?>"><?=$r["occupation"]?></option>
										   <option value="Engineer">Engineer</option>
										   <option value="Doctor">Doctor</option>
										   <option value="IAS">IAS</option>
										   <option value="Bank Employe">Bank Employee</option>
										   </select></td>
						</tr>
					    <tr><td colspan=2><br><input type="submit" value="Update" class="btn btn-dander" style="float:right"></td></tr> 
				    </tbody>
				</table>
				</form>
				
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
				    	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor</p>
				    </div>
				    <div class="basic_1">
				    	<h3>Basics & Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value">Lorem</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">Single</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value">Average</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">Single</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Height :</td>
									<td class="day_value">28, 5ft 5in / 163cm</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span>Not Specified</span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Profile Created by :</td>
									<td class="day_value closed"><span>Self</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value closed"><span>No</span></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value">28 Yrs</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value">Hindi</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value">Fair</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value">45</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value">B+</td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span>Non-Veg</span></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span>No</span></td>
								</tr>
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Time of Birth :</td>
									<td class="day_value">Not Specified</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value">Not Specified</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value closed"><span>01-05-1988</span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Place of Birth :</td>
									<td class="day_value closed"><span>Not Specified</span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value">Hindu</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Sub Caste :</td>
									<td class="day_value">Not Specified</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Raasi :</td>
									<td class="day_value">Kanya</td>
								</tr>
							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Education   :</td>
									<td class="day_value">Engineering</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Education Detail :</td>
									<td class="day_value">Software Engineer</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span>There are many variations of passages of Lorem Ipsum available</span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span>Rs.5,00,000 - 6,00,000</span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Father's Occupation :</td>
									<td class="day_value">Not Specified</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<td class="day_value">Not Specified</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span>Not Specified</span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span>Not Specified</span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value">28 to 35</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">Single</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height 5ft 9 in / 175cm :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Kujadosham / Manglik :</td>
									<td class="day_value closed"><span>No</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">State :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Residency Status :</td>
									<td class="day_value closed"><span>Doesn't matter</span></td>
								</tr>
							 </tbody>
				          </table>
				        </div>
				     </div>
				 </div>
		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div>
        <div class="view_profile">
        	<h3>View Similar Profiles</h3>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p5.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p6.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p7.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p8.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
       </div>
       <div class="view_profile view_profile1">
        	<h3>Members who viewed this profile also viewed</h3>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p9.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p10.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p11.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p12.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
         </div>
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
</div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	

<?php
        }
		else{
			    header("location:logout.php");
		}
    }
    else{
        header("location:index.php");
    }
?>	
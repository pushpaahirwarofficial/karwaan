<!DOCTYPE html>

<?php
$pageid="index";
 $msg=1;

?>

<!--This is the header part-->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src="http://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

 <style>
	.ab-bottom-grid-icon img{
		width:55px;
		height:60px;
	}
 </style>
<!-- Popup Start -->

	<div id="myModal" class="modal">
		  <!-- Modal content -->
		  <div class="modal-content" style="background-color:black;">
		  <?php
		  if($msg==1){
		  ?>
			<div class="modal-image">
			  <span class="close">&times;</span>
				<p id="img_center"><img src="assest/user/images/logo/logo.jpg" id="imageanimation" alt="logo"></p>
			  
		 
			  
			</div>
			<?php
		  }
			?>
			
		  </div>
	</div>
  
  <!-- Popup END -->
  
  
	<!-- choose-us -->
	<div class="ab_content" id="about">
		<div class="container">
			
			<h3 class="tittle_w3ls">Theatrical Events</h3>
			 <div class="inner_sec_info_agile-w3ls">
				<div class="col-md-4 ab-bottom-grid">
					<div class="ab-bottom-text-info">
						<div class="ab-bottom-grid-icon">
							<!--<i class="fas fa-music"></i>-->
							<img src="assest/user/images/FeatureIcon/mythological.png"   alt="Mythological">
						</div>
						<div class="ab-bottom-grid-text">
							<h4>Mythological </h4>
							<p>MatsyaGandha Play - On Mahabharat.<br>
							   <small>Story of Devvrat to become Bhishm</small>
								</p>
						</div>
					</div>
					<div class="ab-bottom-text-info">
						<div class="ab-bottom-grid-icon">
							<!--<i class="fas fa-microphone"></i> -->
							<img src="assest/user/images/FeatureIcon/traditional.png"   alt="Traditional">
						</div>
						<div class="ab-bottom-grid-text">
							<h4>Traditional </h4>
							<p>Ashadh ka Ek Din - Its Based on Meghdoot.<br>
							   <small>Story of Kalidas</small>
								</p> 
						</div>
					</div>
					<div class="ab-bottom-text-info">
						<div class="ab-bottom-grid-icon">
							<!--<i class="far fa-file-alt"></i>-->
							<img src="assest/user/images/FeatureIcon/patriotic.png"   alt="Patriotic">							
						</div>
						<div class="ab-bottom-grid-text">
							<h4>Patriotic </h4>
							<p>Rang De Basanti Chola - On Jallianwala Bagh <br>
							   <small>Tragedy Freedom Fight by General Public</small>
								</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ab-bottom-grid img">
					<img src="<?php echo base_url('assest/user/images/why.jpg');?>" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-4 ab-bottom-grid second">
					<div class="ab-bottom-text-info">
						<div class="ab-bottom-grid-icon">
							<!--<i class="fas fa-gift"></i>-->
							<img src="assest/user/images/FeatureIcon/historical.png"   alt="Historical">
						</div>
						<div class="ab-bottom-grid-text">
							<h4>Historical </h4>
							<p>Aziz-un-Nisa Play - On Love Story at the time of 1857 Freedomfight.<br>
							   <!--<small>Aziz-un-Nisa Converts her Lover into Freedomfighter </small>-->
								</p>
						</div>
					</div>
					<div class="ab-bottom-text-info">
						<div class="ab-bottom-grid-icon">
							<!--<i class="far fa-money-bill-alt"></i> -->
							 <img src="assest/user/images/FeatureIcon/poetic.png"   alt="Poetic">
						</div>
						<div class="ab-bottom-grid-text">
							<h4>Poetic </h4>
							<p>Hum Zinda Hain - on Poetries of Gajanan Madhav Muktibodh.
							   <small>Collage of Poetry</small>
								</p>
						</div>
					</div>
					<div class="ab-bottom-text-info">
						<div class="ab-bottom-grid-icon">
							<!--<i class="far fa-file-alt"></i>-->
							
							<img src="assest/user/images/FeatureIcon/comedy.png"   alt="Comedy">
						</div>
						<div class="ab-bottom-grid-text">
							<h4>Comedy </h4>
							<p>Saanp  -   Period of Transformation.<br>
							   <small>Based on Muslim Traditional Love Story</small>
								</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //choose-us -->

	<div class="banner_bottom_content">
		<div class="bottom-inn">
			
			<div class="container">
				 <h3 class="tittle_w3ls cen">What we Provide</h3>
				<div class="inner_sec_info_agile-w3ls">

					<div class="col-md-4 ser-first-grid text-center">
						<span class="fas fa-music" aria-hidden="true"></span>
						<h3>Custom Player</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Mauris ac tristique arcu..</p>
					</div>
					<div class="col-md-4 ser-first-grid text-center">
						<span class="fas fa-headphones" aria-hidden="true"></span>
						<h3>Discography</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Mauris ac tristique arcu.</p>
					</div>
					<div class="col-md-4 ser-first-grid text-center">
						<span class="fas fa-microphone" aria-hidden="true"></span>
						<h3>Tour Dates</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Mauris ac tristique arcu.</p>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	
		
	<!--//artist-->
	<!--/news-->
	<div class="ab_content">
		<div class="container">
			<h3 class="tittle_w3ls">Latest News</h3>
			<div class="about-top">
				<!--<h3 class="subheading">Rock'n'roll live!</h3>-->
				<p class="paragraph"></p>
			</div>
			<?php 
			$count=0;
			foreach($users as $row){
				$count++;
				if($count%2==0){
			
			?>
			
			
			<div class="about-main">
				<div class="col-md-6 about-left" style="background-image:url('<?php echo base_url('assest/user/images/event/').$row['n_img']; ?>')">
				<p></p>
				
				</div>

				<div class="col-md-6 about-right">
					<h3><?php echo $row['n_title'];?></h3>
					<p class="paragraph"><?php echo $row['n_desc'];?></p>
					<div class="event-bottom">
						<p class="comment">
							<span class="far fa-calendar-alt"></span> <?php echo $row['n_date'];?></p>
						<ul>
							<li>
								<a href="#">
									<span class="far fa-thumbs-up"></span> 15</a>
							</li>
							<li>
								<a href="#">
									<span class="far fa-comments"></span> 15</a>

							</li>
							<li>
								<a href="<?php echo $row['n_fb'];?>">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li>
								<a href="<?php echo $row['n_twitter'];?>">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
			<?php
			}#if
			
			 else{
				 
			?>
			
			
			<div class="about-main sec">

				<div class="col-md-6 about-right two">
					<h3><?php echo $row['n_title'];?></h3>
					<p class="paragraph"><?php echo $row['n_desc'];?>.</p>
					<div class="event-bottom">
						<p class="comment">
							<span class="far fa-calendar-alt"></span> <?php echo $row['n_date'];?></p>
						<ul>
							<li>
								<a href="#">
									<span class="far fa-thumbs-up"></span> 15</a>
							</li>
							<li>
								<a href="#">
									<span class="far fa-comments"></span> 15</a>

							</li>
							<li>
								<a href="<?php echo $row['n_fb'];?>">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li>
								<a href="<?php echo $row['n_twitter'];?>">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 about-left two" style="background-image:url('<?php echo base_url('assest/user/images/event/').$row['n_img']; ?>')">
				
				<p></p>
				</div>

				<div class="clearfix"> </div>
			</div>
			<?php
			 }# else
				 }#foreach 
			?>
			
		</div>
	</div>
	<!--//news-->
	
	<!--/album-->
	<!--
	<div class="works" id="album">
		<div class="container">
			<h3 class="tittle_w3ls cen">Latest Songs</h3>
			<div class="inner_sec_info_agile-w3ls">
				<div class="column add-bottom">
					<div id="mainwrap">
						 
						</div>
						<div id="plwrap">
							<ul id="plList" style="">
							
							<?php
							
							#foreach($rows as $row){
							#if($row['a_audio']){
							?>
							<div class="col-md-12" style="margin-top:15px">
							<div class=" col-md-5">
							<label style="color:#eeeeee"><?php #echo $row['a_name']; ?></label>
							</div>
							<div class="col-md-7">
							<audio  controls=""> 
		                      <source src="<?php #echo base_url('assest/user/images/audio/').$row['a_audio']; ?>" type="audio/ogg"></source> 
		                      
	                       </audio> 
						   </div>
						   							</div>

							<?php
							
							#}}
							?>
							</ul>
						</div>
					</div>
				</div>

			</div>

		</div>
	<!--/album-->
	
	
	
	
	<!--/coming-->
	<div class="events-coming" id="coming">
		<h3 class="tittle_w3ls cen">Get ready for <q>Silver Jubilee Celebration</q>
		</h3>
		<div class="inner_sec_info_agile-w3ls">
			<div class="content">
				<div class="simply-countdown-custom" id="simply-countdown-custom"></div>
			</div>

		</div>
	</div>
	<!--//coming-->
	<!-- /portfolio-->
	<!-- This is the gallleery part of this website--->
	        
	 
	
	<!-- End of the gallery-->
	
	<!-- /newsletter_w3ls_agile -->
	<div class="newsletter_w3ls_agile">
		<div class="newsleft_w3_agileinfo-inner">
			<div class="newsleft_w3_agileinfo">
				<h3>Stay in Touch</h3>

				<p>Sign up for newsletter!</p>
			</div>
			<div class="newsright_agileits_wthree">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Get Started">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div><!-- //newsletter_w3ls_agile -->
	

	<!---------------------testimonial------------------------->
	
	<div class="reviews_sec works" id="testimonials">
		<div class="carousel-reviews broun-block">
			<div class="reviews_main">
				<h3 class="tittle_w3ls cen">Top Reviews</h3>
				<div class="inner_sec_info_agile-w3ls">
					<div id="carousel-reviews" class="carousel slide reviews" data-ride="carousel">

					
					
						<div class="carousel-inner">
							
							
							
							<div class="item active">
							
							<!-----------first review--------------->
							<?php
			                 
							
								$count=0;
								  foreach($users1 as $row)
								  {
									 //print_r($row);
									 $count++;
							 
			                      
			             ?>
							
								<div class="col-md-4 col-sm-6">
								<div class="person-text rel">
										<img src="<?php echo base_url('assest/user/images/testimonial/').$row['te_img']; ?>" class="img-responsive" alt=" " style="height:100px;width:100px; margin-top:50px">
										
										
									</div>
									<div style="background-color:white; height:230px; padding-left:10px; padding-top:50px; margin-top:-50px; border-radius:5px">
									<p><b style="font-size:20px; text-shadow:1px 1px 3px darkgrey;color:steelblue"><?php echo $row['te_name'];?></b></p>
									
									    <b><i><?php echo $row['te_title'];?></i></b><br>
										<i><?php echo $row['te_designation'];?></i><br>
										<div class="mark">My rating:
										<?php
										$inc=$row['te_rating'];
										for($i=$inc;$i!=0;$i--){
											
										
										?>
									
											<a href="#">
												<span class="fas fa-star" style="color:maroon"></span>
											</a>
										<?php
										
										}
										?>	

										</div>
										<p><?php echo $row['te_discrip'];?></p>
										
									</div>
									
						
								</div>

								<?php
									if($count==3)
									{break;}
								  }#foreach ends
								  ?>
								<!-----------first review ends--------------->
								
								
							</div>
							
							<!-----active item ends-------------->

						<?php
						
						/*foreach($users1 as $row)
								  {	
								  
								  $count++;
								 */ 
								  ?>
								
							<div class="item">
							<?php
							
								$count=0;
								$number=0;
								
								  foreach($users1 as $row)
								  {  
								  $count++;
								  
								  if($count>3)
								  {
									
										$number++;
									  
								?>
								
								
								<div class="col-md-4 col-sm-6">
								<div class="person-text rel">
										<img src="<?php echo base_url('assest/user/images/testimonial/').$row['te_img']; ?>" class="img-responsive" alt=" " style="height:100px;width:100px; margin-top:50px">
										
										
									</div>
									<div style="background-color:white; height:230px; padding-left:10px; padding-top:50px; margin-top:-50px; border-radius:5px">
									<p><b style="font-size:20px; text-shadow:1px 1px 3px darkgrey;color:steelblue"><?php echo $row['te_name'];?></b></p>
									
									    <b><i><?php echo $row['te_title'];?></i></b><br>
										<i><?php echo $row['te_designation'];?></i><br>
										<div class="mark">My rating:
										<?php
										$inc=$row['te_rating'];
										for($i=$inc;$i!=0;$i--){
											
										
										?>
									
											<a href="#">
												<span class="fas fa-star" style="color:maroon"></span>
											</a>
										<?php
										
										}
										?>	

										</div>
										<p><?php echo $row['te_discrip'];?></p>
										
									</div>
									
						
								</div>

								<?php
								  if($number==3)
									  
								  {break;}
								  
								  }
								  
								  }
								  
								?>
							
								
							</div>
							<?php
								  //}
								?>
						</div>
						
					
						
						<a class="left carousel-control" href="#carousel-reviews" href=""role="button" data-slide="prev" >
							<span class="far fa-arrow-alt-circle-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
							<span class="far fa-arrow-alt-circle-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!---------------------testimonial ends------------------------->
	

	<!---- Coontact--->
	<!-- /footer -->
	<?php //include("commonpages/footer.php");?>
	
	<!-- js -->
	<script src="<?php echo base_url('assest/user/js/jquery-2.2.3.min.js');?>"></script>
	<!-- //js -->
	<script type="text/javascript" src="<?php echo base_url('assest/user/js/all.js');?>"></script>

	<!--search jQuery-->
	<script src="<?php echo base_url('assest/user/js/search.js');?>"></script>
	<!--search jQuery-->
	<!-- Scrolling Nav JavaScript -->
	<script src="<?php echo base_url('assest/user/js/scroll_menu.js');?>"></script>
	<!-- //fixed-scroll-nav-js -->

	<script>
		$(".hover").mouseleave(
			function () {
				$(this).removeClass("hover");
			}
		);
	</script>
	<!--//scripts-->
	<!-- js for portfolio lightbox -->
	<script src="<?php echo base_url('assest/user/js/jquery.chocolat.js');?>"></script>
	<link rel="stylesheet " href="<?php echo base_url('assest/user/css/chocolat.css');?>" type="text/css " media="screen ">
	<!--light-box-files -->
	<script type="text/javascript ">
		$(function () {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
	<!-- /js for portfolio lightbox -->

	<!-- start-smooth-scrolling -->
	<script src="<?php echo base_url('assest/user/js/move-top.js');?>"></script>
	<script src="<?php echo base_url('assest/user/js/easing.js');?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- Time -->
	<link href="<?php echo base_url('assest/user/css/wickedpicker.css');?>" rel="stylesheet" type='text/css' media="all" />

	<script type="text/javascript" src="<?php echo base_url('assest/user/js/wickedpicker.js');?>"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!-- //Time -->
	<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo base_url('assest/user/css/jquery-ui.css');?>" />
	<script src="<?php echo base_url('assest/user/js/jquery-ui.js');?>"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url('assest/user/js/simplyCountdown.js');?>"></script>
	<link href="<?php echo base_url('assest/user/css/simplyCountdown.css');?>" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--js-->
	<!-- player -->
	<link rel="stylesheet" href="../../assest/user/css/plyr.css" />
	<script src="../../assest/user/js/html5media.min.js"></script>
	<script src="../../assest/user/js/plyr.js"></script>
	<script src="../../assest/user/js/index-player.js"></script>
	<!--// player -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			  
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	
	
	<!-- //smooth-scrolling-of-move-up -->
	<script src="<?php echo  base_url('assest/user/js/bootstrap.js');?>"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<script type="text/javascript">
			$(window).on('load',function(){	
				$('#myModal').modal('show');
			});
		</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');
 

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
/*
btn.onclick = function() {
    modal.style.display = "block";
}
*/

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	
    modal.style.display = "none";
	 
	
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {		 
        model.style.display = "none";
		 
    }
}
</script> 
<script type="text/javascript">
			$('.close').on('click',function(){	
				$('#myModal').modal('hide');
			});
</script>
</body>


</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
div.desc {
    
    text-align: center;
}


</style>


	<title>Karwaan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Medley Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="<?php echo base_url('assest/user/css/bootstrap.css');?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo base_url('assest/user/css/style.css');?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo base_url('assest/user/css/fontawesome-all.css');?>" rel="stylesheet">

	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- web-fonts -->

	<link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>
<!--This is the header part-->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php include('commonpages/header.php'); ?>
<div class="banner" style="height: 112px;width:100%; position:relative; background-color:#867CE1"></div>
<?php $validation = \Config\Services::validation(); ?>   

<!-- contact -->
	<div class="ab_content contact" id="contact" style="background-color:black;color:white;" >
	<!--<div class="col-md-4">-->
	
		<div class="container" >
		
		<div class="container col-sm-12">
			<div class="col-md-4 col-sm-12 ">
			<br>
		
			<label style="font-size:18px;">Registration Number -</label>
			366/90
			<br>
			<br>
			<label style="font-size:18px;">Address -</label>
			UID NGO Darpan MP/2017/0117084
			Gulshan 73 Lala Lajpat Rai colony Bagh Dilkusha Raisen Road Bhopal.
			<b>Pincode:</b> 462023
			<br>
			<br>
			<label style="font-size:18px;">Email -</label>
			karwaanbhopal@gmail.com
			nazirqureshi@rediffmail.com
			<br>
			<br>
			<label style="font-size:18px;">Contact Number -</label>
			9425013468
			<br>
			<br>
			<br>
			<br>
			<div class="col-md-12 well">
			<form action="/contact/sendmsg" method="post" >
				
				<!--<div class="col-md-8" style="margin-bottom:20px;margin-left:200px">-->
				<!--<div class="col-md-4" >-->
					<div class="form-group">
						<div class="col-md-12">
							<div class="col-md-12">
								<label class="head">Name
								<span class="star"> * </span>
								</label>
								<?php if($validation->getError('Username')) { ?>
								<label style="color:red;">
								<?= $error = $validation->getError('Username'); ?>
								</label>
								<?php } ?>
								<input type="text" name="Username" class="form-control" placeholder="" style="box-shadow:1px 1px 3px grey">
							</div>
							<div class="col-md-12">
								<label class="head">Email
								<span class="star"> * </span>
								</label>
								<?php if($validation->getError('Useremail')) { ?>
								<label style="color:red;">
								<?= $error = $validation->getError('Useremail'); ?>
								</label>
								<?php } ?>
								<input type="email" name="Useremail" placeholder="" class="form-control"  style="box-shadow:1px 1px 3px grey">
							</div>
						</div>
						<div class="col-md-12">
						
							<div class=" col-md-12">
								<label class="head">Phone
									<span class="star"> * </span>
								</label>
								<?php if($validation->getError('Userphone')) { ?>
								<label style="color:red;">
								<?= $error = $validation->getError('Userphone'); ?>
								</label>
								<?php } ?>
								<input type="text" name="Userphone" placeholder="" class="form-control"  style="box-shadow:1px 1px 3px grey">
							</div>
							<div class="col-md-12">
								<label class="head">Subject
									<span class="star"> * </span>
								</label>
								<?php if($validation->getError('Usersubject')) { ?>
								<label style="color:red;">
								<?= $error = $validation->getError('Usersubject'); ?>
								</label>
								<?php } ?>
								<input type="text" name="Usersubject" placeholder="" class="form-control"  style="box-shadow:1px 1px 3px grey">
							</div>
							
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
								<label class="head">Your Message
									<span class="star"> * </span>
								</label>
								<?php if($validation->getError('Usermessage')) { ?>
								<label style="color:red;">
								<?= $error = $validation->getError('Usermessage'); ?>
								</label>
								<?php } ?>
								<textarea placeholder="" name="Usermessage" rows="4"  class="form-control"  style="resize:vertical; box-shadow:1px 1px 3px grey"></textarea>
							</div>
						</div>
						<div class="col-md-12" style="margin:20px;">
							<!--<input type="submit" value="Submit" name="submit" style="color:white; background-color:black; width:100px; height:50px; border-color:black; box-shadow:1px 1px 4px maroon;">-->
							<input type="submit" value="Submit" name="submit" onclick="sendMail()" class="btn btn-primary">
						</div>
					</div>
				<!--</div>-->
			</form>
			</div>
			
			</div>
			
			<div class="container col-md-6 col-sm-12" style="margin-top:150px;margin-left:100px;">
			
	<div class="banner_top_wthree_agileinfo" class="container col-md-6 col-sm-12">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" class="container col-md-6 col-sm-12">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			
			</ol>
			<div class="carousel-inner" role="listbox">
			 <!-- Here Fetch only single image whose priority is 1 --->
			 
			 
				<div class="item active" style="background-image:url('<?php echo base_url('assest/user/images/contactImage/1.jpg')?>" >
					<div class="container">
						<div class="carousel-caption">
							
						</div>
					</div>
				</div>
				
				<!-- End the Active image--->
				
				
				<div class="item" style="background-image:url('<?php echo base_url('assest/user/images/contactImage/2.jpg')?>" >
					<div class="container">
						<div class="carousel-caption">
							
						</div>
					</div>
				</div>
				
				<div class="item " style="background-image:url('<?php echo base_url('assest/user/images/contactImage/3.jpg')?>" >
					<div class="container">
						<div class="carousel-caption">
							
						</div>
					</div>
				</div>
				
				<!-- End the Active image--->
				
				
				<div class="item" style="background-image:url('<?php echo base_url('assest/user/images/contactImage/4.jpg')?>" >
					<div class="container">
						<div class="carousel-caption">
							
						</div>
					</div>
				</div>
						

				<div class="item " style="background-image:url('<?php echo base_url('assest/user/images/contactImage/5.jpg')?>" >
					<div class="container">
						<div class="carousel-caption">
							
						</div>
					</div>
				</div>
				
				<!-- End the Active image--->
				
				
				<div class="item" style="background-image:url('<?php echo base_url('assest/user/images/contactImage/6.jpg')?>" >
					<div class="container">
						<div class="carousel-caption">
							
						</div>
					</div>
				</div>						
				<!-- End greater than 1 image wali priority--->
				
			</div>
			<a class="left carousel-control center" href="#myCarousel" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control center" href="#myCarousel" role="button" data-slide="next">
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!-- The Modal -->
		</div>
	</div>
			
			</div>

		</div>
		
		
			<!--<h3 class="tittle_w3ls" style="text-align:center">Send me a message</h3>-->
			<!--<div class="inner_sec_info_agile-w3ls" style="border:1px solid black;">-->
			<!--<div class="inner_sec_info_agile-w3ls">-->
				<!--<h6 style="text-align:center">Please fill this form to contact with us.</h6>-->
				
					<!--</div>-->
		
			</div>

	</div>
	<?php include('commonpages/footer.php'); ?>

	<!-- contact end//------->
	<script src="<?php echo base_url('./email.js');?>"></script>

    <script src="<?php echo base_url('https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js');?>">
	</script>
	<script type="text/javascript">
	(function(){
		console.log('ddddd'); 
		emailjs.init("DrSXdXajjZCrCWgMB"); //YOUR_PUBLIC_KEY
	})();
	</script>	
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
	<link rel="stylesheet" href="css/plyr.css" />
	<script src="js/html5media.min.js"></script>
	<script src="js/plyr.js"></script>
	<script src="js/index-player.js"></script>
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
			/*
			var defaults = {
			    containerID: 'toTop', // fading element id
			    containerHoverID: 'toTopHover', // fading element hover id
			    scrollSpeed: 1200,
			    easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	<!-- //smooth-scrolling-of-move-up -->
	
	<script src="<?php echo base_url('assest/user/js/bootstrap.js');?>"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>
</html>
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



<!--/news-->
	<div class="ab_content">
		<div class="container">
			<h3 class="tittle_w3ls">Latest Event</h3>
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
				<?php if(empty($row['n_img'])) { ?>
					  <div class="col-md-6 about-left" style="background-image:url('<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>')">
                  <?php } else { ?>
					<div class="col-md-6 about-left" style="background-image:url('<?php echo base_url('assest/user/images/event/').$row['n_img']; ?>')">
                  <?php } ?>
				<p></p>
				
				</div>

				<div class="col-md-6 about-right">
					<h3><?= $row['n_title'];?></h3>
					<p class="paragraph"><?= $row['n_desc'];?></p>
					<div class="event-bottom">
						<p class="comment">
							<span class="far fa-calendar-alt"></span> <?= $row['n_date'];?></p>
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
								<a href="<?= $row['n_fb'];?>">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li>
								<a href="<?= $row['n_twitter'];?>">
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
					<h3><?= $row['n_title'];?></h3>
					<p class="paragraph"><?= $row['n_desc'];?>.</p>
					<div class="event-bottom">
						<p class="comment">
							<span class="far fa-calendar-alt"></span> <?= $row['n_date'];?></p>
						<ul>
							<li>
								<a href="#">
									<span class="far fa-thumbs-up"></span> 85</a>
							</li>
							<li>
								<a href="#">
									<span class="far fa-comments"></span> 43</a>

							</li>
							<li>
								<a href="<?= $row['n_fb'];?>">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li>
								<a href="<?= $row['n_twitter'];?>">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<?php if(empty($row['n_img'])) { ?>
					  <div class="col-md-6 about-left two" style="background-image:url('<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>')">
                  <?php } else { ?>
					<div class="col-md-6 about-left two" style="background-image:url('<?php echo base_url('assest/user/images/event/').$row['n_img']; ?>')">
                  <?php } ?>
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
	<div class="text-center" style="">
			<?= $pager->links() ?>
			</div>
	<!--//news-->
	<?php include('commonpages/footer.php'); ?>
	
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

	
	<script src="<?php echo base_url('assest/user/js/bootstrap.js');?>"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>

</html>
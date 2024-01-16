<!DOCTYPE html>
<html lang="zxx">
<head>
<style>
div.desc {
    
    text-align: center;
}


</style>

<?php 
include('commonpages/header.php');
?>
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

<div class="banner" style="height: 112px;width:100%; position:relative; background-color:#867CE1"></div>

			<!-- //newsletter_w3ls_agile -->
	<div class="reviews_sec works" id="testimonials" >
		<div class="carousel-reviews broun-block">
			<div class="reviews_main" style="margin-top:25px">
				<h3 class="tittle_w3ls cen">Testimonials</h3>
				<div class="inner_sec_info_agile-w3ls">
					<div class="carousel-inner">
						<div class="item active">
							<?php
								foreach($users as $row){
							 ?>
							<div class="col-md-4 col-sm-6">
								<div class="person-text rel">
								<?php if(!empty($row['te_img'])) { ?>
								<img src="<?php echo base_url('assest/user/images/testimonial/').$row['te_img']; ?>" class="img-responsive"  style="height:100px;width:100px; margin-top:50px">
								<?php } else { ?>
								<img src="http://ui-avatars.com/api/?length=1&bold=true&color=FBFBFB&background=3B71CA&rounded=true&name=<?= $row['te_name'] ; ?>" class="img-fluid"  alt="" style="width: 100px; height: 100px; margin-top:50px;" />
								<?php } ?>
									
								</div>
								<div style="background-color:white; height:230px; padding-left:10px; padding-top:50px; margin-top:-50px; border-radius:5px; box-shadow:2px 2px 4px white">
									<p>
										<b style="font-size:20px; text-shadow:1px 1px 3px darkgrey;color:steelblue">
										<?= $row['te_name'];?>
										</b>
									</p>
									<b><i><?= $row['te_title'];?></i></b> 
									<i><?= $row['te_designation'];?></i><br>
									<div class="mark">My rating:
										<?php
											$inc=$row['te_rating'];
											for($i=$inc;$i!=0;$i--){										 
										?>
											<a href="#"><span class="fas fa-star" style="color:maroon"></span></a>
										<?php   }  ?>	
									</div>
									<p><?= $row['te_discrip'];?></p>
								</div>
							</div>
							<?php }#foreach end ?>
						</div>
					</div>
					<div class="" style="padding-left:40%;">
					<?php if(count($users)>15) {
					?>
					<?= $pager->links() ?>
					<?php } ?>
        			</div>        
				</div>
	        </div>
	    </div>
	</div>
<!-----///Tesimonials------->
<?php include('commonpages/footer.php'); ?>
	
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

	<script src="<?php echo base_url('assest/user_user/js/bootstrap.js');?>"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>

</html>	
	
	
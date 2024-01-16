<?php
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
div.desc {
    
    text-align: center;
	position:relative;
	width:100%;
	height:70px;
}
 #image:hover{
	 opacity:0.2;
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

<div class="banner" style="height: 112px;width:100%; position:relative; background-color:#867CE1">

</div>



	<!-- banner -->
	<!--Here main containt start--> 
	<div class="jumbotron text-center" style="background-color:white">
	
        <font face=""><h1 style="color:black;">Video Gallery</h1></font>
		  
   </div>
	<div class="container">
	
	   <div class="row">
	     <?php
		 	if(isset($video)){
			foreach ($video->getResult() as $value) {
			
	     ?>
		 
		<div class="col-md-8" style="margin-left:200px;margin-bottom:80px"> 
	   		<iframe style="padding-top:20px" width="100%" height="290px"  src="//www.youtube.com/embed/<?php echo $value->code; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
	    	<h4 style="text-align:center"><?php echo $value->title; ?></h4>
	    </div>
	   
	   <br>
	   <br>
		<?php
		} ?>

<div class="col-md-12">
       <?php		  
		
			foreach($videos->getResult() as $row){
		?>
	    
	    <div class="col-md-4">
		
		    <a href="../getvideo/<?php echo $row->code;?>">
			   <p style="text-align:center" style="padding-top:20px" id="image">
			   <?php if(empty($row->image)) { ?>
                      <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" width="100%" height="190px"  >
                  <?php } else { ?>
                    <img src="<?php echo base_url('assest/user/images/youtube/').$row->image; ?>" width="100%" height="190px" >
                  <?php } ?>
			   </p>
			</a>
			<a href="./getvideo/<?php echo $row->code;?>"><div class="desc"><font face="MS Sans Serif"><h4 style="color:#bdb7b7;"><?php echo  $row->title;?></font></h4></div></a>
			 
		</div>
		
		<?php
			}
		?>

		<?php } elseif(!isset($video)) {
		?>


		  <div class="col-md-12">
       <?php		  
		
			foreach($videos->getResult() as $row){
		?>
	    
	    <div class="col-md-4">
		
		       <a href="./getvideo/<?php echo $row->code;?>"><p style="text-align:center" style="padding-top:20px" id="image">
			   <?php if(empty($row->image)) { ?>
                      <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" width="100%" height="190px"  >
                  <?php } else { ?>
                    <img src="<?php echo base_url('assest/user/images/youtube/').$row->image; ?>" width="100%" height="190px" >
                  <?php } ?>
			</p>
		</a>
			 <a href="./getvideo/<?php echo $row->code;?>"><div class="desc"><font face="MS Sans Serif"><h4 style="color:#bdb7b7;"><?php echo  $row->title;?></font></h4></div></a>
			 
		</div>
		
		<?php
			}
		}	
		?>
		
		
		<div class="blog-pagination" style="padding-left:40%;">
        </div>
		
		
		
		</div>
	  </div>
	  
	</div>
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
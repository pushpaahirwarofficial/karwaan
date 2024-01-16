<!DOCTYPE html>
<?php
$msg=0;
if(isset($users)){
	
	$msg=1;
	
}

?>

<html lang="zxx">

<head>
<style>
div.desc {
    
    text-align: center;
}


<!-- Pop up -->



body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    <?php
   if($msg==1)
   {
       ?>
   display: block;  
  <?php
   }
   else{
       ?>
       display: none; /* Hidden by default */
       <?php
   }
   ?>
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 20px; /* Location of the box */
    left:0;
    top: 100px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    
    margin: auto;
    padding: 0px;
    border: 1px solid #888;
    width: 95%;
	height:auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
#img_center{
	text-align:center;
}
#imageanimation{
	
	background-position:center;
	width:100%;
	height:595px;
	animation-name:imagesize;
	animation-duration:5s;
	animation-timig-function:linear;
}
@keyframes imagesize{
	
	from{
		margin-top:230px;
		width:100px;
	height:100px;
	}
	to{
		margin-top:0px;
		width:100%;
		height:595px;
	}
	
}
/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
	padding-right: 10px;
	padding-top: 10px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-image {
    padding: 2px 16px;

    color:#ffffff;
}

.modal-body {padding: 10px;
text-align:center;}

#name{
	color:black;
}


<!-- //Popup -->



</style>


	<title>Karwaan :: Albums</title>
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
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assest/user/images/logo.jpeg');?>">
	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- web-fonts -->

	<link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
	<!-- //web-fonts -->
</head>
<!--This is the header part-->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>

<br>
<br>


<div class="banner" style="height:150px;width:100%;margin-top:-50px;position:relative; background-color:#867CE1">

	</div>

<?php
  if($msg==1){
  ?>
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" >
  
  
      <span class="close" style="color:white;">&times;</span>
	    <div class="modal-image col-md-12">
		
		<?php
		 foreach($row2->getResult() as $row){
		?>
		<?php if(empty($row->gl_img)) { ?>
			<img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" class="img-responsive" alt=" " style="height:550px; width:950px; margin-left:13%"/>
              <?php } else { ?>
				<img src="<?php echo base_url('assest/user/images/gallery/').$row->gl_img; ?>" class="img-responsive" alt=" " style="height:550px; width:950px; margin-left:13%"/>
            <?php } ?>					
		<?php
		 }
		 ?>
    
  </div>

</div>
</div>
	<?php
  }
	?>

<div class="portfolio-project ab_content" id="gallery">
		<div class="container">
			<h3 class="tittle_w3ls">Albums</h3>
			
			<div class="col-md-12">
				<h3 style="color:black; text-align:center; margin-bottom:10px">Browsers</h3>
			<?php
				foreach($row1->getResult() as $info){
				if($info->gl_type==2){
			?>
			
			<div class="col-md-3">
			<form method="post" action="./viewImage/<?php echo $info->gl_id; ?>">
				<button type="submit"><img src="<?php echo base_url('assest/user/images/gallery/').$info->gl_img; ?>" class="img-responsive" alt=" " style="height:250px;width:280px"/></button>
				<input type="hidden" value="<?php echo $info->gl_alt; ?>" name="gl_alt">
				<input type="hidden" value="<?php echo $info->gl_id; ?>" name="gl_id">
				<p style="text-align:center"><?php echo $info->gl_name; ?></p>
							
			</form>		
			</div>
			
				<?php
				}}
				
				?>
		</div>
		
		<div class="col-md-12">
		
		<h3 style="color:black; text-align:center; margin-bottom:10px">Images</h3>
			<?php
				foreach($row1->getResult() as $info){
				if($info->gl_type==1){
			?>
			
			<div class="col-md-3">
			
			<form method="post" action="./viewImage/<?php echo $info->gl_id; ?>">
				<button type="submit"><img src="<?php echo base_url('assest/user/images/gallery/').$info->gl_img; ?>" class="img-responsive" alt=" " style="height:250px;width:280px"/></button>
				<input type="hidden" value="<?php echo $info->gl_alt; ?>" name="gl_alt">
				<input type="hidden" value="<?php echo $info->gl_id; ?>" name="gl_id">
				<p style="text-align:center"><?php echo $info->gl_name; ?></p>

			</form>		
							
			</div>
			
				<?php
				}}
				
				?>
		
    </div>
			
		</div>
	</div>
				
	
	
	<!-- End of the gallery-->
	
	
	<!-- /footer -->
	
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
var span = document.getElementsByClassName("close")[0];

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
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript">
			$('.close').on('click',function(){	
				$('#myModal').modal('hide');
			});
		</script>	
	
	<!-- //smooth-scrolling-of-move-up -->
	<!--<script src="<?php // echo base_url('assest/user/js/bootstrap.js');?>"></script>-->
	<script src="<?php echo base_url('assest/user/js/bootstrap.js');?>"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>


</html>
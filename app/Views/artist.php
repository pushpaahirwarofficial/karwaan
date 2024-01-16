<?php
$pageid="Artist";
  $msg=0;
  //echo"<pre>";
  
if(isset($row1))
{
     $msg=1; 
	//var_dump($row1);   
	//echo $row1->ar_name;
}

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
@media only screen and (max-width:400px)
{
.p
{
	margin-left:-30px ;
}

}
div.desc {
    
    text-align: center;
}

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
    padding-top: 100px; /* Location of the box */
    left:0;
    top: 100px;
    width: 100%; /* Full width */
    height: auto; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0px;
    border: 1px solid #888;
    max-width:85%;
	height:auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
	background-image:url(<?php echo base_url('assest/user/images/logo/5.jpeg')?>);
	background-repeat:no-repeat;
	background-size:cover;
	
}
.modal-header {
    padding: 2px 16px;
	<?php if($msg==1){ ?>
    background-color: #867ce1;
    color:black;
	<?php
	}
	?>
}

.modal-body {

height:auto;}

.modal-footer {
    padding: 2px 16px;
    background-color: #e4373be6;
    color: white;
}
#facebook:hover{
	color:#3b5998;
}
#linkedin:hover{
	color:#0077b5;
}
#gmail:hover{
	color:#3e65cf;
}
#instagram:hover{
	color:#c32aa3;
}
#twitter:hover{
	color:rgb(85,172,238);
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
 
<body >

<br>
<br>




<div class="banner" style="height:110px;width:100%;margin-top:-50px;position:relative; background-color:#867CE1">

</div>
	<?php
  if($msg==1){
  ?>
	<div id="myModal" class="modal" style="height:auto">
<div class="modal-content">
  
    <div class="modal-header" >
      <span class="close"><a href="http://localhost:8080/artist/getArtist">&times;<a></span>

      <h2 style="color:white;text-align:center">Artist Detail</h2>
    </div>
    <div class="modal-body" style="height:auto;float:left; background-color:white; width:100%">      
	 

        			
					  <div class="col-md-12">
					 
					  <div class="col-md-4">
						<img src="<?php echo base_url('assest/user/images/artist/').$row1->ar_img; ?>" style="height:425px;width:300px" class="p" >
			            </div>
						<div class="col-md-7">
						<h1><?php echo $row1->ar_name;?></h1>
					     <h3><?php echo $row1->ar_designation;?></h3>
						 <ul class="social_list_icons" style="border-bottom:1px solid black">
							<li>
								<a href="<?php echo $row1->ar_fb;?>">
									<i id="facebook" class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $row1->ar_twitter;?>">
									<i id="twitter" class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $row1->ar_insta;?>">
									<i id="instagram" class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $row1->ar_linkedin; ?>">
									<i id="linkedin" class="fab fa-linkedin-in"></i>
								</a>
							</li>
							<li>
								<a href="mailto:<?php echo $row1->ar_email; ?>">
									<i id="email" class="fas fa-envelope"></i>
								</a>
							</li>
						</ul>
						<p style="text-align:justify"><?php echo $row1->ar_about;?></p>
						<br>
						
						</div>
						</div>
						<div>
						<br>
						<br>
						<p style="text-align:center; color:black"><?php echo $row1->ar_discription;?></p>
						</div>
						<br>
						<div class="col-md-12">
						<?php
						 if(isset($data)){
						 	if($data->type==1){
						 ?>
						 <div class="col-md-4"><img src="<?php echo base_url('assest/user/images/artist/').$data->image_video; ?>" style="height:150px; width:200px; margin-bottom:10px">
						 </div>
					
						<?php
					 	}
					 	
					}
						?>
						<div class="clearfix"> </div>
						</div>
						
						<div class="col-md-12">
						<?php
						if(isset($videos)){
							if($videos->type==2){
						?>
						<div class="col-md-4"><iframe style="padding-top:20px"   src="//www.youtube.com/embed/<?php echo $videos->image_video;?>?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<?php
					 	}
					 	}
						?>
						</div> 
				
						
						
                     
					
				
	  <?php
  }
 
	?>
    </div>
	
  
  </div>
  </div>
    	  <?php
  //}
 
	?>
	<div class="ab_content artist" id="team">
		<div class="container">
			<h3 class="tittle_w3ls cen">Our Artists</h3>
			<div class="inner_sec_info_agile-w3ls">
			
			<?php 
			       
			       $count=0;
			       foreach($users->getResult() as $row)
				   {

						$count++;
					    if($count%2==0)
						{
					
			?>
			<div class="col-md-6 team-grid" style="height:300px; margin-top:20px">
					<div class="col-md-6 team-img1" style="height:300px; background-color:white;">
						
						<?php if(!empty($row->ar_img)) {   ?>
							<img src="<?php echo base_url('assest/user/images/artist/').$row->ar_img; ?>" style="height:300px">
						<?php } else { ?>
							<img src="http://ui-avatars.com/api/?length=1&bold=true&color=ffffff&background=3B71CA&rounded=true&name=<?= $row->ar_name; ?>" class="img-fluid"  alt="" style="height: 250px; padding-top:20%;" />
						<?php }  ?>
						
					</div>
					<div class="col-md-6 team-info" style="height:300px">
						<h4><?= $row->ar_name;?></h4>
						
				
						
						<ul class="social_list_icons">
							<li>
								<a href="<?= $row->ar_fb;?>">
									<i id="facebook" class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="<?= $row->ar_twitter;?>">
									<i id="twitter" class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="<?= $row->ar_insta;?>">
									<i id="instagram" class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="<?= $row->ar_linkedin; ?>">
									<i id="linkedin" class="fab fa-linkedin-in"></i>
								</a>
							</li>
							<li>
								<a href="mailto:<?= $row->ar_email; ?>">
									<i id="email" class="fas fa-envelope"></i>
								</a>
							</li>
						</ul>
						<form action="./getDetail/<?= $row->ar_id;?>" method="post" style="margin-top:20px">
						<input type="hidden" value="<?= $row->ar_id;?>" name="id">
						<input type="submit" value="View" name="view" class="btn btn-primary">
						</form>
						
					</div>
					<div class="clearfix"></div>
				</div>
				<?php
				    } #if
					else{
					
				?>
				      
				<div class="col-md-6 team-grid" style="height:300px; margin-top:20px">
					<div class="col-md-6 team-info" style="height:300px">
						<h4><?= $row->ar_name;?></h4>
					
						<ul class="social_list_icons">
							<li>
								<a href="<?= $row->ar_fb;?>">
									<i id="facebook" class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="<?= $row->ar_twitter;?>">
									<i id="twitter" class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="<?= $row->ar_insta;?>">
									<i id="instagram" class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="<?= $row->ar_linkedin; ?>">
									<i id="linkedin" class="fab fa-linkedin-in"></i>
								</a>
							</li>
							<li>
								<a href="mailto:<?= $row->ar_email; ?>">
									<i id="email" class="fas fa-envelope"></i>
								</a>
							</li>
						</ul>
						<div>
						<form action="./getDetail/<?= $row->ar_id;?>" method="post" style="margin-top:20px">
						<input type="hidden" value="<?= $row->ar_id;?>" name="id">
						<input type="submit" value="View" name="view" class="btn btn-primary">
						</form>
						</div>
					</div>
					<div class="col-md-6 team-img1" style="background-color:white;" >
						
					<?php if(!empty($row->ar_img)) {   ?>
							<img src="<?php echo base_url('assest/user/images/artist/').$row->ar_img; ?>" style="height:300px">
						<?php } else { ?>
							<img src="http://ui-avatars.com/api/?length=1&bold=true&color=ffffff&background=3B71CA&rounded=true&name=<?= $row->ar_name; ?>" class="img-fluid"  alt="" style="height: 250px; padding-top:20%;" />
						<?php }  ?>
						
						
					</div>

					<div class="clearfix"></div>
				</div>
				
				<?php
					} # else
						
				} #for
			?>
			
		</div>
			
		</div>
	</div>		
	<!-- end the main containent--->
	
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
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','www.google-analytics.com/analytics.html','ga');

  ga('create', 'UA-49425562-7', 'auto');
  ga('send', 'pageview');

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


	<script src="<?php echo base_url('assest/user/js/bootstrap.js');?>"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>


</html>
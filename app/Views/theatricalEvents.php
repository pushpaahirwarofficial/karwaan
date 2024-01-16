<?php
            //include('commonpages/topheader.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    
	<title>Karwaan :: Theatrical Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Medley Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
 
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
    	 
    	
    <div class="banner" style="height:110px;width:100%;margin-top:-11px;position:relative; background-color:#867CE1"></div>

	<div class="ab_content artist" id="team">
		<div class="container">
			<h3 class="tittle_w3ls cen">Theatrical Events </h3>
		</div>
	</div>		
 
 
     <div class="inner_sec_info_agile-w3ls col-md-12">
          <?php  foreach($teventtype->getResult() as $type){
    		       
    		        ?>
    	<div class="col-md-6 col-xs-12" style=" margin  :23px 0px;   ">
    	     
    		<a href="http://localhost:8080/Tevents/event/<?=$type->type?>">
    		    <div class="col-md-10  col-xs-6 team-info"  >
        		    <div style="width:70%; float:left;">
            		    <h4><?=$type->type?></h4>
            		    <ol>
                		 <?php
                		    foreach($tevents->getResult() as $tevent){
                		      if($type->type==$tevent->type){ 
                		 ?>
                		    <li><?=$tevent->title?></li>
                		 <?php
                		      }}
                		 ?>
                		 </ol>
            		 </div>
        		  
        	   	  <div style="width:25%; float:right;">
        		    <img src='<?php echo base_url("assest/user/images/FeatureIcon/".$type->type.".png");?>' alt="<?=$type->type?>" width="100%" height="100px">
        		  </div>
        		  
        		  </div>      	   	
    	   	
    	   	</a>
    	     		 
    	</div>
    	 <?php } ?>
      	
	 </div>
 
	<?php 	include('commonpages/footer.php'); ?>
	
	<script src="<?php echo base_url('assest/user/js/jquery-2.2.3.min.js');?>"></script>
	<!-- //js -->
	<script type="text/javascript" src="<?php echo base_url('assest/user/js/all.js');?>"></script>

	<!--search jQuery-->
	<script src="<?php echo base_url('assest/user/js/search.js');?>"></script>
	<!--search jQuery-->
	<!-- Scrolling Nav JavaScript -->
	<script src="<?php echo base_url('assest/user/js/scroll_menu.js');?>"></script>
	<!-- //fixed-scroll-nav-js -->
 
   
	<script src="<?php echo base_url('assest/user/js/bootstrap.js');?>"></script>
	
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>


</html>
<html >

<head>
    
	<title>Karwaan :: Theatrical Event</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content=" " />
 
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
	
	 
  <style>
      table,th,td{
           border:none;
       }
      ol,li{
          list-style-type:none;
          padding:3px;
      }
  </style>	
	
</head>
<!--This is the header part-->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    	 
    	
    <div class="banner" style="height:110px;width:100%;margin-top:-11px;position:relative; background-color:#867CE1"></div>

	<div class="ab_content artist" id="team">
		<div class="container">
		    <?php  
		        foreach($tevents->getResult() as $tevent)
    		    {
    	}	?>
			<h3 class="tittle_w3ls cen"><?=$tevent->type; ?> </h3>
		</div>
	</div>		
 
 
     <div class="inner_sec_info_agile-w3ls col-md-12">
           
           <?php
                		    foreach($tevents->getResult() as $tevent){
                		      
                		 ?>
    	<div class="col-md-6 " style=" margin  :23px 0px;   ">
    	     
    		
    		    <div class="col-md-10  col-xs-6 team-info"  >
        		    <div style="width:70%; float:left;">
            		    <h4 align="center"><?=$tevent->title; ?></h4>
            		    <br>
            		    <!--<ol>-->
                		 <ol>
                		
                		    <li>WRITER &nbsp; &nbsp; &nbsp;: <?=$tevent->writer; ?></li>
                		    <li>DIRECTOR &nbsp;&nbsp;: <?=$tevent->director; ?></li>
                		    <li>MUSIC &nbsp; &nbsp; &nbsp;&nbsp; : <?=$tevent->music; ?></li>
                		    <li>PLAYDATE &nbsp;: <?=$tevent->playdate; ?></li>
                		    <li>ACTORS &nbsp; &nbsp;&nbsp; :<p style="margin-left:94px; margin-top:-35px; word-spacing:3px;"> <?=$tevent->actors; ?></p></li>
                		    
                		    </ol>
                		     <br>
                		
                		 <!--</ol>-->
                
                		 
            		 </div>
        		  
        	   	  <div style="width:25%; float:right;">
        		    <img src='<?php echo base_url("assest/user/images/FeatureIcon/".strtolower($tevent->type).".png");?>' alt="<?=$tevent->type; ?>" width="100%" height="100px">
        		  </div>
        		  
        		  </div>
        		 
        	   	 
    	   	
    	   	<!--</a>-->
    	 
    		 
    	</div>
    	<?php
                		      }
                		 ?>
     
	 </div>
 
    	

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
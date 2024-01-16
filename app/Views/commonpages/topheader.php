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
    background-color:#687ce1;
    margin: auto;
    padding: 0px;
    border: 1px solid #888;
    width: 95%;
	height:630px;
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
 
<!-- //Popup -->

</style>


	<title>Karwaan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
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

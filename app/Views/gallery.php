<!DOCTYPE html>


<html lang="zxx">

<head>
<style>
div.desc {
    
    text-align: center;
}

</style>

	<title>Karwaan :: Gallery</title>
	
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

<?php include('commonpages/header.php'); ?>

<div class="banner" style="height: 112px;width:100%; position:relative; background-color:#867CE1">

</div>
		



<div class="portfolio-project ab_content" id="gallery">
		<div class="container">
			<h3 class="tittle_w3ls">Gallery</h3>
			<div class="inner_sec_info_agile-w3ls">
		
		
		<?php
		
		$displayRecordCount=8;
		 if ((isset($_GET['nxt']))){
		 $start=$_GET['nxt'];
		 }
		else if ((isset($_GET['pre']))){
		 $start=$_GET['pre'];										 
		}
		else if ((isset($_GET['pgn']))){
		$start=$_GET['pgn'];
		}
				else{
			$start=0;
										
		}
		
		
			foreach($usr1 as $row){
				
			?>
		
				<div class="col-md-3 portfolio-grids "  style="padding:10px">
						
						
						
						
						<a >
              <?php if(empty($row['gl_img'])) { ?>
                <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" class="img-responsive" alt=" " style="height:300px"/>
              <?php } else { ?>
              <img src="<?php echo base_url('assest/user/images/gallery/').$row['gl_img']; ?>" class="img-responsive" alt=" " style="height:300px"/>
            <?php } ?>			
						
							<div class="b-wrapper" style="height:300px">
							<h4><?php echo $row['gl_name'];?></h4>
							</div>
							</a>
							<form method="post" action="./getAlbum/<?php echo $row['gl_alt'];?>">
								
								<input type="hidden" value="<?php echo $row['gl_alt'];?>" name="gl_alt">
								<input type="submit" value="View" class="btn btn_xs btn-danger" style="margin-top:5px; margin-left:100px" name="btn_view">
							</form>	
							
						
						
					</div>
				<?php
			} ?>
			
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container text-center blog-pagination">
                <?= $pager->links(); ?>              
    </div>
	</div>
				
	<?php include('commonpages/footer.php'); ?>

	
	<!-- End of the gallery-->
	
	
	<!-- /footer -->
	
  <!-- javascripts -->
  <script src="<?php echo base_url('assest/user/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assest/user/js/jquery-ui-1.10.4.min.js');?>"></script>
  <script src="<?php echo base_url('assest/user/js/jquery-1.8.3.min.js');?>"></script>
  <script type="<?php echo base_url('assest/user/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js');?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url('assest/user/js/bootstrap.min.js');?>"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url('assest/user/js/jquery.scrollTo.min.js');?>"></script>
  <script src="<?php echo base_url('assest/user/js/jquery.nicescroll.js" type="text/javascript');?>"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url('assest/user/jquery-knob/js/jquery.knob.js');?>"></script>
  <script src="<?php echo base_url('assest/user/js/jquery.sparkline.js" type="text/javascript');?>"></script>
  <script src="<?php echo base_url('assest/user/jquery-easy-pie-chart/jquery.easy-pie-chart.js');?>"></script>
  <script src="<?php echo base_url('assest/user/js/owl.carousel.js');?>"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo base_url('assest/user/js/fullcalendar.min.js');?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assest/user/fullcalendar/fullcalendar/fullcalendar.js');?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('assest/user/js/calendar-custom.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/jquery.rateit.min.js');?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('assest/user/js/jquery.customSelect.min.js');?>"></script>
    <script src="<?php echo base_url('assest/user/chart-master/Chart.js');?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url('assest/user/js/scripts.js');?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('assest/user/js/sparkline-chart.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/easy-pie-chart.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/jquery-jvectormap-1.2.2.min.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/jquery-jvectormap-world-mill-en.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/xcharts.min.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/jquery.autosize.min.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/jquery.placeholder.min.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/gdp-data.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/sparklines.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/charts.js');?>"></script>
    <script src="<?php echo base_url('assest/user/js/jquery.slimscroll.min.js');?>"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>

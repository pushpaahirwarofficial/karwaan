<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title> New Theatrical Event| Admin Karwaan</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap.min.css');?>" rel="stylesheet">
  
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap-theme.css');?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assest/admin/css/elegant-icons-style.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assest/admin/css/font-awesome.min.css');?>" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  
  
  <link href="<?php echo base_url('assest/admin/css/style.css');?>" rel="stylesheet">
 <link href="<?php echo base_url('assest/admin/css/style-responsive.css');?>" rel="stylesheet" />
    <style>
        .form-group .col{width:33%;}
    </style>
    
</head>

<body>
  <?php include('commonpages/header.php'); ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-news"></i>Theatrical Events</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="./get_event">Theatrical Events</a></li>
              <li><i class="fa fa-file-text-o"></i>Add Theatrical Event</li>
            </ol>
          </div>
        </div>
		
       <!--THis is the my table and my connectivity-->
	   
	   
	   
	     <!-- Main content -->
    <section class="content"  style="background-color:white ;padding-bottom:30px; border-radius:5px;">
    <?php $validation = \Config\Services::validation(); ?>   
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box box-primary">
			<form action="./insert_event" enctype="multipart/form-data" method="post">
				 			
				<!-- /.box-header -->
				<div class="box-body">			  
					 
						<div class="form-group">
						    <div class=col-md-4>
    							<label>Title</label>
                  <?php if($validation->getError('title')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('title'); ?>
                  </label>
                  <?php } ?>
							
    							<input type="text" name="title" class="form-control" placeholder="Enter Title of ther news">
							</div>
						</div>
					 
					 
						<div class="form-group">
						    <div class=col-md-4>
    							<label>Type</label>
                  <?php if($validation->getError('type')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('type'); ?>
                  </label>
                  <?php } ?>
							
    							<input type="text" name="type" class="form-control" placeholder="Enter type">
							</div>
						</div>
				 
				 
						<div class="form-group">
						    <div class=col-md-4>
    							<label>Play Date</label>
                  <?php if($validation->getError('playdate')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('playdate'); ?>
                  </label>
                  <?php } ?>
							
    							<input type="date" name="playdate" class="form-control">
							</div>
						</div>
				 
				 
						<div class="form-group">
						    <div class=col-md-4>
    							<label>Director</label>
                  <?php if($validation->getError('director')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('director'); ?>
                  </label>
                  <?php } ?>
							
    							<input type="text" name="director" class="form-control" placeholder=" Enter Director Name">
							</div>
						</div>
					 
					 
						<div class="form-group">
						    <div class=col-md-4>
    							<label>Music</label>
                  <?php if($validation->getError('music')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('music'); ?>
                  </label>
                  <?php } ?>
							
    							<input type="text" name="music" class="form-control" placeholder=" Enter Music Link">	
							</div>
						</div>
				 
				 
						<div class="form-group">
						    <div class=col-md-4>
    							<label>Writer</label>
                  <?php if($validation->getError('writer')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('writer'); ?>
                  </label>
                  <?php } ?>
							
    							<input type="text" name="writer" class="form-control" placeholder=" Enter Writer Name">
							</div>
						</div>
                     
						<div class="form-group"   style="padding-bottom:100px">
						    <div class=col-md-10>
    							<label>Actors</label>
                  <?php if($validation->getError('actors')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('actors'); ?>
                  </label>
                  <?php } ?>
							
    							<textarea name="actors"  class="form-control ckeditor" placeholder="Enter Actors Name"></textarea>
							</div>
						</div>
			   
        			    <div class="col-md-2" style="margin-top:25px;">
        			            
                                <button type="submit" class="btn btn-primary btn-block" name="submit">Add</button>
            					<button type="reset" class="btn btn-danger btn-block">Clear</button>
                        </div>	
                </div>
			</form>
		</div>
        <!-- /.box-primary -->
       </div>
       <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
	   

	   <!-- End the my table and connectivity-->

        <!-- page end-->
       
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">

        </div>
    </div>
  </section>
  <!-- container section end -->
  <?php include('commonpages/footer.php'); ?>
  <!-- javascripts -->
  <script src="<?php echo base_url('assest/admin/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-ui-1.10.4.min.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-1.8.3.min.js');?>"></script>
  <script type="<?php echo base_url('assest/admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assest/admin/ckeditor/ckeditor.js');?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url('assest/admin/js/bootstrap.min.js');?>"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url('assest/admin/js/jquery.scrollTo.min.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery.nicescroll.js" type="text/javascript');?>"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url('assest/admin/jquery-knob/js/jquery.knob.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery.sparkline.js" type="text/javascript');?>"></script>
  <script src="<?php echo base_url('assest/admin/jquery-easy-pie-chart/jquery.easy-pie-chart.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/owl.carousel.js');?>"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo base_url('assest/admin/js/fullcalendar.min.js');?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assest/admin/fullcalendar/fullcalendar/fullcalendar.js');?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('assest/admin/js/calendar-custom.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/jquery.rateit.min.js');?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('assest/admin/js/jquery.customSelect.min.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/chart-master/Chart.js');?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url('assest/admin/js/scripts.js');?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('assest/admin/js/sparkline-chart.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/easy-pie-chart.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/jquery-jvectormap-1.2.2.min.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/jquery-jvectormap-world-mill-en.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/xcharts.min.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/jquery.autosize.min.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/jquery.placeholder.min.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/gdp-data.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/sparklines.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/charts.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/jquery.slimscroll.min.js');?>"></script>
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

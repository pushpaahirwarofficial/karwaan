<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Achievements Karwaan</title>

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
	#a{
		
		margin-top:5px;
		padding:10px;
		margin-left:14.5%;
		margin-right:20px;
		
	}
	
	</style>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php $validation = \Config\Services::validation(); ?>
   
	  	 <section id="main-content">
     <section class="wrapper">
        <div class="row">
           <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Achievement</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="fa fa-th-list"></i><a href="./getData_achievement">Achievement</a></li>
              <li><i class="fa fa-th-list"></i>Achievement View</li>
              
            </ol>
          </div>
        </div>
</section>
</section>
  <header class="panel-heading" style="margin-left:14.5%; margin-right:20px">All Achievement
	   </header>
     <section id="a" style="background-color:white ;padding-bottom:30px">
	 <div>
      <form action="insert_achievement" method="post" enctype="multipart/form-data">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Image</h3>
				</div>			
				<!-- /.box-header -->
				<div class="box-body">
				<?php //if(isset($error)){ echo $error;} ?>

					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Name</label>
              <?php if($validation->getError('achieve_name')) { ?>
              <label style="color:red;">
              <?= $error = $validation->getError('achieve_name'); ?>
              </label>
              <?php } ?>
							
							<input type="text" name="achieve_name" class="form-control" placeholder="Enter Name">							
						</div>
					</div>	
			
						<div class="form-group col-md-6">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control select2 " name="achieve_type">
                            					
							<option value="1">images</option>						
                               </select>							
						</div>
					</div>	
					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Image</label>
              <?php if($validation->getError('achieve_img')) { ?>
              <label style="color:red;">
              <?= $error = $validation->getError('achieve_img'); ?>
              </label>
              <?php } ?>
							
							<input type="file" name="achieve_img" class="form-control" placeholder="Upload image">							
						</div>
					</div>
						
						
					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Alt Text</label>
              <?php if($validation->getError('achieve_alt')) { ?>
              <label style="color:red;">
              <?= $error = $validation->getError('achieve_alt'); ?>
              </label>
              <?php } ?>
							
							<input type="text" name="achieve_alt" class="form-control" placeholder="Enter Alter">							
						</div>
					</div>
					
					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Priority</label>							
							<select class="form-control select2 " name="achieve_priority">
							<option value="1">1</option>						
							<option value="2">2</option>						
							<option value="3">3</option>						
							<option value="4">4</option>						
							<option value="5">5</option>						
							<option value="6">6</option>						
							<option value="7">7</option>						
							<option value="8">8</option>						
							<option value="9">9</option>						
							<option value="10">10</option>
							</select>							
						</div>
					</div>	
				</div>
			  <!-- /.box-body -->
			    <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
					<button type="reset" class="btn btn-danger">Clear</button>	         
			        <a href="./getData_achievement" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>Back</a>
                </div>			   
			</form>
			</div>
				 
	  </section>
	  </section>
	   	  <!-- container section end -->
 
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

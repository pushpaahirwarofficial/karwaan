<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin youtube| Karwaan</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap.min.css');?>" rel="stylesheet">
  
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap-theme.css');?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assest/admin/css/elegant-icons-style.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assest/admin/css/font-awesome.min.css');?>" rel="stylesheet" />

  <link href="<?php echo base_url('assest/admin/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assest/admin/css/style-responsive.css');?>" rel="stylesheet" />
</head>

<body>

  <!-- container section start -->
  <section id="container" class="" >
  <?php $validation = \Config\Services::validation(); ?>   	    
    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper" >
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-youtube-o"></i> Youtube elements</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="./getData_youtube">Youtube</a></li>
              <li><i class="fa fa-file-text-o"></i>Youtube Add</li>
            </ol>
          </div>
        </div>
		
       <!--THis is the my table and my connectivity-->
	     <!-- Main content -->
    <section class="content"  style="background-color:white ;padding-bottom:30px">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box box-primary">
			<form action="./insert_youtube" enctype="multipart/form-data" method="post">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Youtube</h3>
				</div>			
				<!-- /.box-header -->
				<div class="box-body">
					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Title</label>
              <?php if($validation->getError('title')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('title'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="title" class="form-control" placeholder="Enter Title">							
						</div>
					</div>

					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Link</label>
              <?php if($validation->getError('link')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('link'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="link" class="form-control" placeholder="Enter Link">							
						</div>
					</div>	
						
					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Code</label>
              <?php if($validation->getError('code')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('code'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="code" class="form-control" placeholder="Enter Code">
						</div>
					</div>
					<div class="form-group col-md-6">
						<div class="form-group">
							<label>Image</label>
              <?php if($validation->getError('image')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('image'); ?>
                  </label>
                  <?php } ?>
							
							<input type="file" name="image" class="form-control" placeholder="Upload image" accept="image/*,video/*">							
						</div>
					</div>
					
					
					
					<div class="form-group col-md-6">
									<label>Status</label>
									<select class="form-control select2" name="status" >              
									  <option value="1">Active</option>
									  <option value="0">Disable</option>                  
									</select>
								</div>
		
				</div>
			  <!-- /.box-body -->
			    <div class="box-footer">
                    <button type="submit" name="youtube" class="btn btn-primary">Add</button>
					<button type="reset" class="btn btn-danger">Clear</button>	         
			        <a href="./getData_youtube" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>Back</a>
                </div>			   
			</form>
		</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	
      <!-- /.row -->
    </section>
	

	   
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
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

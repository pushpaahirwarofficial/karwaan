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

  
	<style>
	#a{
		
		margin-top:5px;
		padding:10px;
		margin-left:14.5%;
		margin-right:20px;
		height:auto;
		
	}
	
	</style>
</head>

<body>
<?php include('commonpages/header.php'); ?>
<?php $validation = \Config\Services::validation(); ?>   	    

  <!-- container section start -->
  <section id="container" class="">
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-youtube-o"></i> Youtube elements</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="../getData_youtube">Youtube</a></li>
              <li><i class="fa fa-file-text-o"></i>Youtube Update</li>
            </ol>
          </div>
        </div>
		</section>
		</section>
       <!--THis is the my table and my connectivity-->
	   <header class="panel-heading" style="margin-left:14.5%; margin-right:20px">All Videos
	   </header>
     <div id="a" style="background-color:white">

	     <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box box-primary">
            <div class="box-header">
            
            </div>
			         <?php
						foreach($rows->getResult() as $row){
					 ?>   
	
            <!-- /.box-header -->
            <div class="box-body">
			<!-- Work Area Start-->
			   <form role="form" action="../update_youtube/<?= $row->id; ?>" enctype="multipart/form-data" method="post">
			   <div class="box-body">
				
				<div class="form-group col-md-6">
                  <label>ID</label>
				  <input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" readonly >
                  
                </div>
				<div class="form-group">
						<div class="form-group col-md-6">
							<label>Title</label>
              <?php if($validation->getError('title')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('title'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="title" class="form-control" value="<?php echo $row->title;?>">							
						</div>
					</div>	
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>Link</label>
              <?php if($validation->getError('link')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('link'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="link" class="form-control" value="<?php echo $row->link;?>">							
						</div>
					</div>
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>Code</label>
              <?php if($validation->getError('code')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('code'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="code" class="form-control" value="<?php echo $row->code;?>">							
						</div>
					</div>
					
							<div class="form-group col-md-6">
									<label>Status</label>
									<?php $status=$row->status;?>
									  <select  class="form-control" name="status">
										<option value="1" <?php if($status==1){echo"selected";}?>>
											Active
										</option>
										<option value="0" <?php if($status==0){echo"selected";}?>>Disable</option>										
									 </select>
								</div>					
							</div>
			  <!-- /.box-body -->
			      <div class="box-footer">
					 <a  href="../getData_youtube" class="btn btn-danger"> << Back</a>
                     <button type="submit" name="btn_update" class="btn btn-success">Update</button>
                  </div>
			   
			   </form>
         </div>

			<!-- Work Area End-->
            <form role="form" action="../update_youtube_image/<?= $row->id; ?>" enctype="multipart/form-data" method="post">
            <div class="form-group">
						<div class="form-group col-md-6">
            <?php if($validation->getError('image')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('image'); ?>
                  </label>
                  <?php } ?>
							
							<label>Present Image</label><br>							
                <?php if(empty($row->image)) { ?>
                  <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" width="200px" height="100px" >
                <?php } else { ?>
                  <img src="<?php echo base_url('assest/user/images/youtube/').$row->image; ?>" width="200px" height="100px" >
                <?php } ?>
							<input type="hidden"  name="oldimage" value="<?php echo $row->image; ?>"> 
							<br>						
							<input type="file" name="image" class="form-control" accept="image/*" required>
							<br>
              <a  href="../getData_youtube" class="btn btn-danger"> << Back</a>
							<button type="submit" name="btn_img" class="btn btn-success">Update Image</button>							
						</div>					
					</div>
						<?php 
						}
						?>
            <!-- /.box-body -->
          </div>
          
          <!-- /.box -->
        </div> 
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
        <!-- page end-->
      </section>
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

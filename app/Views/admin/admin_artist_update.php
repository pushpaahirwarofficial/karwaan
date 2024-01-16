<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Artist| Karwaan</title>

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
		
	}
	
	</style>
   <!-- ======================================================= -->
</head>

<body>
<?php include('commonpages/header.php'); ?>
  <!-- container section start -->
  <section id="container" class="">
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-youtube-o"></i> Artist</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="../getData_artist">Artist</a></li>
              <li><i class="fa fa-file-text-o"></i>Artist Update</li>
            </ol>
          </div>
        </div>
		</section>
		</section>
       <!--THis is the my table and my connectivity-->
	   
       <header class="panel-heading" style="margin-left:14.5%; margin-right:20px">All Artist
	   </header>
     <?php $validation = \Config\Services::validation(); ?>
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
			<!-- /.box-header -->
      <?php
			 foreach($rows->getResult() as $row) {
			?>    
			<!-- Work Area Start-->
			   <form role="form" action="../update_artist/<?php echo $row->ar_id; ?>" enctype="multipart/form-data" method="post">
			   <div class="box-body" style="overflow:scroll;">
				   
            <!--
				<div class="form-group col-md-6">
                  <label>ID</label>
                  -->
				  <input type="hidden" class="form-control" name="ar_id" value="<?php echo $row->ar_id; ?>" readonly >
              <!--    
                </div>
                -->
				<div class="form-group">
						<div class="form-group col-md-6">
							<label>Name</label>
              <?php if($validation->getError('ar_name')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('ar_name'); ?>
                  </label>
                  <?php } ?>
							<input type="text" name="ar_name" class="form-control" value="<?php echo $row->ar_name;?>">							
						</div>
						
						
						<div class="form-group">
						<div class="form-group col-md-6">
							<label>Designation</label>
              <?php if($validation->getError('ar_desig')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('ar_desig'); ?>
                  </label>
                  <?php } ?>
							<input type="text" name="ar_desig" class="form-control" value="<?php echo $row->ar_designation;?>">							
						</div>
					</div>	
						
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>About</label>
              <?php if($validation->getError('ar_about')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('ar_about'); ?>
                  </label>
                  <?php } ?>
							<textarea name="ar_about" class="form-control ckeditor"><?php echo $row->ar_about;?></textarea>
														
						</div>
					</div>	
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>Description</label>
              <?php if($validation->getError('ar_discription')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('ar_discription'); ?>
                  </label>
                  <?php } ?>
							<textarea   name="ar_discription"  class="form-control ckeditor" placeholder="Description"><?php echo $row->ar_discription;?></textarea>
													
						</div>
					</div>	
					
						
				<div class="form-group">
						<div class="form-group col-md-6">
							<label>Group</label>
              <?php if($validation->getError('ar_group')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('ar_group'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="ar_group" class="form-control" value="<?php echo $row->ar_group;?>">							
						</div>
					</div>	
							
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>Facebook</label>
							<input type="text" name="ar_fb" class="form-control" value="<?php echo $row->ar_fb;?>">							
						</div>
					</div>	
							
				 <div class="form-group">
						<div class="form-group col-md-6">
							<label>Twitter</label>
							<input type="text" name="ar_twitter" class="form-control" value="<?php echo $row->ar_twitter;?>">							
						</div>
					</div>	
							
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>Instagram</label>
							<input type="text" name="ar_insta" class="form-control" value="<?php echo $row->ar_insta;?>">							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>LinkedIn</label>
							<input type="text" name="ar_linkedin" class="form-control" value="<?php echo $row->ar_linkedin;?>">							
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-group col-md-6">
							<label>Email</label>
              <?php if($validation->getError('ar_email')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('ar_email'); ?>
                  </label>
                  <?php } ?>
							<input type="text" name="ar_email" class="form-control" value="<?php echo $row->ar_email;?>">							
						</div>
					</div>	
												
					<div class="form-group ">
						<div class="form-group col-md-6">
							<label>Priority</label>
							<?php $priority=$row->ar_priority;?>
							<select  class="form-control" name="ar_priority" >
					<option value="1" <?php if($priority==1){echo"selected";}?>>1</option>
					<option value="2" <?php if($priority==2){echo"selected";}?>>2</option>
					<option value="3" <?php if($priority==3){echo"selected";}?>>3</option>
					<option value="4" <?php if($priority==4){echo"selected";}?>>4</option>
					<option value="5" <?php if($priority==5){echo"selected";}?>>5</option>
					<option value="6" <?php if($priority==6){echo"selected";}?>>6</option>
					<option value="7" <?php if($priority==7){echo"selected";}?>>7</option>
					<option value="8" <?php if($priority==8){echo"selected";}?>>8</option>
					<option value="9" <?php if($priority==9){echo"selected";}?>>9</option>
					<option value="10" <?php if($priority==10){echo"selected";}?>>10</option>
					
				 </select>							
						</div>
					</div>			
							
					      
			  <!-- /.box-body -->
			       <div class="form-group col-md-6" class="box-footer">
					 <a  href="../getData_artist" class="btn btn-danger"> << Back</a>
					 <input type="hidden" name="ar_id" value="<?php echo $row->ar_id; ?>">
                     <button type="submit" name="update" class="btn btn-success">Update</button>
                  </div>
				  <?php
                  
						//}
						
						?>
			   </div>
			   </form>	
         <?php } ?>
			<!-- Work Area End-->
			
            </div>
            <?php
			 foreach($rows->getResult() as $row) {
			?>    
            <!-- /.box-body -->   
            <div class="form-group col-md-6">
            <form role="form" action="../update_artist_image/<?php echo $row->ar_id; ?>" enctype="multipart/form-data" method="post">
            <?php if($validation->getError('ar_img')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('ar_img'); ?>
                  </label>
                  <?php } ?>
							<label>Present Image</label><br>
              <?php if(empty($row->ar_img)) { ?>
                      <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" width="150px" height="200px" >
              <?php } else { ?>
                    <img src="<?php echo base_url('assest/user/images/artist/').$row->ar_img; ?>" width="150px" height="200px">
              <?php } ?>
							<br>
							<label>Upload New  Image </label><br>
							
							<input type="hidden"  name="oldimage" value="<?php echo $row->ar_img; ?>">						
							<input type="file" name="ar_img" class="form-control" required>						
													
							<br>
              <a  href="./getData_artist" class="btn btn-danger"> << Back</a>
							<button type="submit" name="btn_img" class="btn btn-success">Update Image</button>
              </form>
						</div>
            <?php } ?>
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
  </div>
  <?php include('commonpages/footer.php'); ?>

  <!-- javascripts -->
  <script src="<?php echo base_url('assest/admin/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-ui-1.10.4.min.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-1.8.3.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assest/admin/js/jquery-ui-1.9.2.custom.min.js');?>"></script>
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

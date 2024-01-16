
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Testimonals| Karwaan</title>

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
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php $validation = \Config\Services::validation(); ?>   	     
	  	 <section id="main-content">
      <section class="wrapper">
        <div class="row">
           <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Testimonals</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="fa fa-th-list"></i><a href="../getData_testimonial">Testimonals</a></li>
              <li><i class="fa fa-th-list"></i>Testimonals Update</li>           
            </ol>
          </div>
        </div>
</section>
</section>
     <div id="a" style="background-color:white; padding-bottom:530px">
               <?php
					foreach($rows->getResult() as $row)
					{					
				?>   
            <!-- /.box-header -->
            <div class="box-body">
			<!-- Work Area Start-->
			  <form role="form" action="../update_testi/<?php echo $row->te_id; ?>" enctype="multipart/form-data" method="post">
			   <div class="box-body"  style="background-color:white; padding-bottom:530px">
				
				
				<div class="form-group col-md-6">
                  <label>Testimonial Name</label>
                  <?php if($validation->getError('te_name')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('te_name'); ?>
                  </label>
                  <?php } ?>
							
				  <input type="text" class="form-control" name="te_name" value="<?php echo $row->te_name; ?>" >
                  
                </div>
			<div class="form-group ">
						<div class="form-group col-md-6">
							<label>Rating</label>
							<?php echo $rating=$row->te_rating;?>
							<select  class="form-control" name="te_rating" >
					<option value="1" <?php if($rating==1){echo"selected";}?>>1</option>
					<option value="2" <?php if($rating==2){echo"selected";}?>>2</option>
					<option value="3" <?php if($rating==3){echo"selected";}?>>3</option>
					<option value="4" <?php if($rating==4){echo"selected";}?>>4</option>
					<option value="5" <?php	if($rating==5){echo"selected";}?>>5</option>
					
				 </select>							
						</div>
					</div>
					<div class="form-group col-md-6">
                  <label>Title</label>
                  <?php if($validation->getError('te_title')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('te_title'); ?>
                  </label>
                  <?php } ?>
							
				  <input type="text" class="form-control" name="te_title" value="<?php echo $row->te_title; ?>" >
                  
                </div>
				 	
						
						
					<div class="form-group ">
						<div class="form-group col-md-6">
							<label>Priority</label>
							<?php  $priority=$row->te_priority;?>
							<select  class="form-control" name="te_priority" >
					<option value="1" <?php if($priority==1){echo"selected";}?>>1</option>
					<option value="2" <?php if($priority==2){echo"selected";}?>>2</option>
					<option value="3" <?php if($priority==3){echo"selected";}?>>3</option>
					<option value="4" <?php if($priority==4){echo"selected";}?>>4</option>
					<option value="5" <?php if($priority==5){echo"selected";}?>>5</option>
					<option value="6" <?php if($priority==6){echo"selected";}?>>6</option>
					<option value="7" <?php if($priority==7){echo"selected";}?>>7</option>
					<option value="8" <?php if($priority==8){echo"selected";}?>>8</option>
					<option value="9" <?php if($priority==9){echo"selected";}?>>9</option>
					<option value="10"<?php if($priority==10){echo"selected";}?>>10</option>
					
				 </select>							
						</div>
					</div>

          <div class="form-group col-md-6">
          <label>Description</label>
          <?php if($validation->getError('te_discrip')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('te_discrip'); ?>
                  </label>
                  <?php } ?>
							
				  <textarea name="te_discrip" class="form-control ckeditor"  ><?php echo $row->te_discrip; ?></textarea>
          </div>
				

					<div class="form-group col-md-6">
            <label>Designation</label>
            <?php if($validation->getError('te_designation')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('te_designation'); ?>
                  </label>
                  <?php } ?>
							
				   <input type="text" name="te_designation" class="form-control"  value="<?php echo $row->te_designation; ?>">
          </div>
	
					 <div class="form-group col-md-6" class="box-footer">
					 <a  href="../getData_testimonial" class="btn btn-danger"> << Back</a>
					 <input type="hidden" value="<?php echo $row->te_id;?>">
                     <button type="submit" name="btn_update" class="btn btn-success">Update</button>
                  </div>
						</div>							             
			  <!-- /.box-body -->			   
			   </form>
			
        
			<!-- Work Area End-->
			</div>
      <form role="form" action="../update_testi_image/<?php echo $row->te_id; ?>" enctype="multipart/form-data" method="post">
         <div class="form-group col-md-6">
							<label> Old Image</label><br>
							
              <?php if(empty($row->te_img)) { ?>
              <!-- <img src="<?php //echo base_url('./assest/user/images/defaultImage.jpg'); ?>" style="width:150px; height:150px"> -->
              <img src="http://ui-avatars.com/api/?length=1&bold=true&color=FBFBFB&background=3B71CA&rounded=true&name=<?= $row->te_name ; ?>" class="img-fluid"  alt="" style="width: 150px; height: 150px;"/>
            <?php } else { ?>
							<img src="<?php echo base_url('./assest/user/images/testimonial/').$row->te_img; ?>" style="width:150px; height:150px">
            <?php } ?>
							<br>
							<label>Upload New  Image </label><br>
							<?php if($validation->getError('te_img')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('te_img'); ?>
                  </label>
                  <?php } ?>
						
							<input type="hidden"  name="oldimage" value=<?php echo $row->te_img; ?>>						 
							<input type="file" name="te_img" class="form-control" accept="image/*" required>										
							 <label>Upload Image</label><br>	
							<input type="hidden" name="te_id" value="<?php echo $row->te_id; ?>">
              <a  href="../getData_testimonial" class="btn btn-danger"> << Back</a>
							<button type="submit" name="btn_img" class="btn btn-success">Update Image</button>
					 </div>	 
        </form>
			<?php
					}
			
			?>
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

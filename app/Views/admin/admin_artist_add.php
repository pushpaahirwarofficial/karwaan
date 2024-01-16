<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Artist| Karwaan</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assest/admin/css/bootstrap-theme.css');?>" rel="stylesheet">
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
    
            <h3 class="page-header"><i class="fa fa-th"></i>Artist</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="fa fa-desktop"></i><a href="./getData_artist">Artist</a></li>
              <li><i class="fa fa-th"></i>Artist add</li>
            </ol>
          </div>
        </div>
         </section>
         </section>
        <!-- page start-->

       <header class="panel-heading" style="margin-left:14.5%; margin-right:20px" >New Artist
	   </header>
     <?php $validation = \Config\Services::validation(); ?>
      <div id="a" style="background-color:white;overflow: auto;">
          <div class="col-sm-7 col-xs-12" style="background-color:white;">
            <section class="panel">
              <header class="panel-heading" style="background-color:white;">
                Add New Artist
              </header>
              <div class="panel-body">
                <form action="./insert_artist" enctype="multipart/form-data" method="post">
					<div class="form-group">
							<label>Name</label>
              <?php if($validation->getError('art_name')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('art_name'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="art_name" class="form-control" placeholder="Enter Name">	
						</div>
					
					
						<div class="form-group">
							<label>Designation</label>
              <?php if($validation->getError('art_desig')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('art_desig'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="art_desig" class="form-control" placeholder="Enter Name">		
						</div>

						
						<div class="form-group">
							<label>About</label>
              <?php if($validation->getError('art_about')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('art_about'); ?>
                  </label>
                  <?php } ?>
							
							<textarea name="art_about"  class="form-control ckeditor" placeholder="About" style="resize:vertical"></textarea>
														
						</div>
						
						
						<div class="form-group">
							<label>Description</label>
              <?php if($validation->getError('art_disc')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('art_disc'); ?>
                  </label>
                  <?php } ?>
							
							<textarea name="art_disc"  class="form-control ckeditor" placeholder="Discription" style="resize:vertical"></textarea>
														
						</div>
					
						<div class="form-group">
							<label>Facebook Link</label>
							<input type="text" name="art_facebook" class="form-control" placeholder="Facebook">							
						</div>
					
						<div class="form-group">
							<label>Twitter Link</label>
							<input type="text" name="art_twitter" class="form-control" placeholder="Twitter">							
						</div>
					
						<div class="form-group">
							<label>Instagram Link</label>
							<input type="text" name="art_insta" class="form-control" placeholder="Instagram">							
						</div>
						
						<div class="form-group">
							<label>LinkedIn Link</label>
							<input type="text" name="art_linkedin" class="form-control" placeholder="LinkedIn">							
						</div>
						
						<div class="form-group">
							<label>Email Link</label>
              <?php if($validation->getError('art_email')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('art_email'); ?>
                  </label>
                  <?php } ?>
							
							<input type="text" name="art_email" class="form-control" placeholder="EmailLink">							
						</div>
					
						<div class="form-group">
							<label>Priority</label>
							
							<select class="form-control select2 " name="art_priority">
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
					
						<div class="form-group">
							<label>Image Upload</label>
              <?php if($validation->getError('art_img')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('art_img'); ?>
                  </label>
                  <?php } ?>
							
							<input type="file" name="art_img" class="form-control" placeholder="Image" accept="image/*">							
						</div>
					
						 <div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Add</button>
						<button type="reset" class="btn btn-danger">Clear</button>	         
						</div>
				</form>
              </div>
            </section>
          </div>
          <div class="col-sm-5 col-xs-12">
            <section class="panel">
              <header class="panel-heading" style="background-color:white;">
                Add Artist Data
              </header>
              <div class="panel-body">
				<form action="./insert_artistData" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label>Artist Id</label>
						<select name="a_id" class="form-control select2">
            <option value=""  hidden>Select Artist</option>	
						<?php foreach($rows->getResult() as $row){	?>
							<option value="<?php echo $row->ar_id;?>"><?php echo $row->ar_name;?></option>	
						<?php   } ?>
                        </select>							
					</div>
					<div class="form-group">
						<label>Type</label>
						<select class="form-control select2" name="a_type">
              <option value=""  hidden>Select Type</option>	
            	<option value="1">Image</option>						
							<option value="2">Video</option>						
						</select>													
					</div>
          
					<div class="form-group">
						<label>Image</label>
            <?php if($validation->getError('a_img')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('a_img'); ?>
                  </label>
                  <?php } ?>
							
						<input type="file" name="a_img" class="form-control" placeholder="Image">		
					</div>
					<div class="form-group">
						<label>Video Link</label>
            <?php if($validation->getError('a_video')) { ?>
                  <label style="color:red;">
                  <?= $error = $validation->getError('a_video'); ?>
                  </label>
                  <?php } ?>
							
						<input name="a_video" class="form-control" placeholder="Video Link">
					</div>
					<div class="form-group">
						<label>Status</label>
						<select class="form-control select2 " name="a_status">
							<option value="1">Active</option>						
							<option value="0">Disable</option>						
						</select>							
					</div>
					<div class="form-group">
                    <button type="submit" name="artist_data" class="btn btn-primary">Add</button>
					<button type="reset" class="btn btn-danger">Clear</button>	         
			        <a href="./getData_artist" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>Back</a>
                </div>
				</form>
			</div>
            </section>
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
  
    <script src="<?php echo base_url('assest/admin/js/jquery.autosize.min.js');?>"></script>
    <script src="<?php echo base_url('assest/admin/js/jquery.placeholder.min.js');?>"></script>
  
  
    <script src="<?php echo base_url('assest/admin/js/jquery.slimscroll.min.js');?>"></script>
    <script>
      
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

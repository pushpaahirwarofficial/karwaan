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
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  
  
  <link href="<?php echo base_url('assest/admin/css/style.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('assest/admin/css/style-responsive.css');?>" rel="stylesheet" />
   <!-- ======================================================= -->
   
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
              <li><i class="icon_document_alt"></i><a href="../get_artistData">Artist</a></li>
              <li><i class="fa fa-file-text-o"></i>Artist Update</li>
            </ol>
          </div>
        </div>
		</section>
		</section>
       <!--THis is the my table and my connectivity-->
	   
	   
       <header class="panel-heading" style="margin-left:14.5%; margin-right:20px">All Artist
	   </header>
<div id="a" style="background-color:white">
	         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
		Update Info
       
		
      </h1>	  
		<!-- Bread crumb Start -->
	
	  <!-- Bread crumb End -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
			<!-- /.box-header -->
            <div class="box-body" class="col-md-12">
			<!-- Work Area Start-->
			   <form role="form" action="./updated_artistData" enctype="multipart/form-data" method="post">
			   <div class="box-body">
				<?php
			    foreach($rows->getResult() as $row){
				?>   
            
				<div class="form-group col-md-6">
							<label>Artist Id</label>
							<select name="a_id" class="form-control select2">
							<?php
						    foreach($data1->getResult() as $datas){							
							?>
							<option value="<?php echo $datas->ar_id;?>"><?php echo $datas->ar_name;?></option>	
							<?php	
							}
							?>
                            </select>							
						</div>
						
					    <div class="form-group col-md-6">
							<label>Type</label>
							<?php $type=$row->type;?>
							<select  class="form-control" name="a_type" readonly >
					            <option value="1" <?php if($type==1){echo"selected";}?>>1</option>
					            <option value="2" <?php if($type==2){echo"selected";}?>>2</option>						
							</select>
														
						</div>
					<?php if($type==1){?>
						<div class="form-group col-md-6">
							<label>Image</label>
							<img src="<?php echo base_url('assest/user/images/artist/').$row->image_video; ?>"  width="150px" height="200px" >
                           <label>Upload New  Image </label><br>
							
							<input type="hidden"  name="oldimage" value="<?php echo $row->image_video; ?>">						
							<input type="file" name="newimage" class="form-control">						
						
											
							<br>
							<button type="submit" name="btn_img" class="btn btn-success">Update Image</button>							
						</div>

					
						<?php
					}
					else {
						?>
						
						<div class="form-group col-md-6">
							<label>Video Link</label>
							<input name="a_video" class="form-control" value="<?php echo $row->image_video;?>">
														
						</div>
						<?php
					}
						?>
						
						
					
						<div class="form-group col-md-6">
							<label>Status</label>
                                <?php  $status=$row->status; ?>
							<select class="form-control select2" name="a_status">              
								<option value="1" <?php if($status==1){ echo "selected";} ?>>Active</option>
								<option value="0" <?php if($status==0){ echo "selected";} ?>>Disable</option>
												
							</select>							
						</div>
						
              
			  <!-- /.box-body -->
			       <div class="form-group col-md-6" class="box-footer">
					 <a  href="../get_artistData" class="btn btn-danger"> << Back</a>
					 <input type="hidden" name="id" value="<?php echo $row->id; ?>">
           <button type="submit" name="btn_update" class="btn btn-success">Update</button>
                  </div>
				  <?php
						
						}
						
						?>
			   </div>
			   </form>
			
			
			<!-- Work Area End-->
			
            </div>
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
	   
	   <!-- End the my table and connectivity-->

       

          
			<!--Here also main cintent end-->
          </div>
        </div>
        <!-- page end-->
        <?php include('commonpages/footer.php'); ?>   

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

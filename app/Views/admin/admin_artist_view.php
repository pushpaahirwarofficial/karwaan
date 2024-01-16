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
    <!--header start-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-youtube-o"></i> Artist</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="../getData_artist">Artist</a></li>
              <li><i class="fa fa-file-text-o"></i>Artist View</li>
            </ol>
          </div>
        </div>
	   	</section>	 <!-- Content Wrapper. Contains page content -->
	   	</section>	

       <header class="panel-heading" style="margin-left:14.5%; margin-right:20px">All Artist
	   </header>
<div id="a" style="background-color:white">		<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        View Info
      </h1>
	 
      <!-- <ol class="breadcrumb">
        <li><a href=".getData_artist"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box box-primary" >
            <div class="box-header">
              		  
					 <a  href="../getData_artist" class="btn btn-primary"> << </a>
				 
            </div>
			
			
            <!-- /.box-header -->
            <div class="box-body" style="overflow:none; background-color:white;">
		
              <table id="example1" class="table table-bordered table-striped">
               		<?php
            		 	if(isset($rows1)){
						          foreach($rows1->getResult() as $row){
                        //var_dump($rows1);
                        //die;
							    ?>   
	
							
                <tr>
                  <th width="30%">ID</th>	<td width="70%"> <?php echo $row->ar_id; ?> </td>
				</tr>				  
				<tr>				  
                  <th width="30%">Name</th><td width="70%"> <?php echo $row->ar_name; ?> </td>  			  
                </tr>
			<tr>
				  <th width="30%">Image</th> 
          <td width="70%"> 
                  <?php if(empty($row->ar_img)) { ?>
                      <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" width="400px" height="200px" >
                  <?php } else { ?>
                    <img src="<?php echo base_url('assest/user/images/artist/').$row->ar_img; ?>" width="400px" height="200px">
                  <?php } ?>
          </td> 
				</tr>
				
				<tr>				  
                  <th width="30%">About</th><td width="70%"> <?php echo $row->ar_about; ?> </td>  			  
                </tr>
				
				<tr>

				<tr>				  
                  <th width="30%"> Description</th><td width="70%"> <?php echo $row->ar_discription; ?> </td>  			  
                </tr>
				
				<tr>				  
                  <th width="30%"> Group</th><td width="70%"> <?php echo  $row->ar_group; ?> </td>  			  
                </tr>
				
								
                 				
				<tr>				  
                  <th width="30%"> Facebook</th><td width="70%"> <?php echo $row->ar_fb; ?> </td>  			  
                </tr>
				
								
				<tr>				  
                  <th width="30%"> Twitter</th><td width="70%"><?php echo $row->ar_twitter;?> </td>  			  
                </tr>
				
								
				<tr>				  
                <th width="30%"> Instagram</th><td width="70%"><?php echo $row->ar_insta; ?> </td>  			  
                </tr>
				
				<tr>				  
                  <th width="30%"> LinkedIn</th><td width="70%"> <?php echo  $row->ar_linkedin; ?> </td>  			  
                </tr>
				
				<tr>				  
                  <th width="30%"> Email</th><td width="70%"> <?php echo $row->ar_email; ?> </td>  			  
                </tr>
				
								
				<tr>				  
                  <th width="30%"> Priority</th><td width="70%"> <?php echo $row->ar_priority; ?> </td>  			  
                </tr>
				
				
				<tr>				  
                  <th width="30%"> Date and time</th><td width="70%"> <?php echo $row->ar_date; ?> </td>  			  
                </tr>
							
               <?php
						}
          }
			   ?>
              </table>
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
        <!-- page end-->
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

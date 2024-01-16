<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Theatrical Event| Karwaan</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> 

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
    
    <?php 
     	include('commonpages/header.php');
     ?>

  <!-- container section start -->
  <section id="container" class="">
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-news"></i>Theatrical Event</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../admin_index">Home</a></li>
              <li><i class="icon_document_alt"></i>Theatrical Event</li>
             
            </ol>
          </div>
        </div>
		</section>
		</section>
		
       <!--THis is the my table and my connectivity-->
	   
 <header class="panel-heading" style="margin-left:14.5%; margin-right:20px">All Events
                <div class="box-header" style="float:right;">
                  	<a href="./add_event"  class="btn btn-info" style=" margin-top:-7px;">
    					    New Theatrical Event  &nbsp <i class="fa fa-plus" ></i></a>
                </div>
 </header>
	   <div id="a" style="background-color:white">
		    <div class="col-lg-12" >
			   	
			
			   <div class="table-responsive">
			    <div class="box-body">
          <table id="myTable" class="display">
                       <thead>
                      <tr>
                       <th>Id</th>
                        <th>TITLE</th>
                        <th>TYPE</th>
                        <th>PlayDate</th>
                        <th>Writer</th>
                        <th>Director</th>
                        <th>Music</th>
                        <th>Artist</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach($rows->getResult() as $row){
							      ?>
                  			<tr id="<?php echo $row->tevent_id; ?>">
                        <td> <?php echo $row->tevent_id; ?> </td>
                        <td> <?php echo $row->title; ?> </td>
                        <td> <?php echo $row->type; ?> </td>
                        <td> <?php echo $row->playdate; ?> </td>
                        <td> <?php echo $row->writer; ?> </td>
                        <td> <?php echo $row->director; ?> </td>
                        <td> <?php echo $row->music; ?> </td>
                        <td> <?php echo $row->actors; ?> </td>    
                      	<td><div class="btn-group">
            					    <input type="hidden" name="n_id" value="<?php echo $row->tevent_id;?>">
            						<a class="btn btn-success" href="./edit_event/<?php echo $row->tevent_id;?>"><i class="icon_check_alt2"></i></a>
            						<button type="submit" class="btn btn-danger remove"><i class="icon_close_alt2"></i></button>					 
                      </div>
        					     </td>
				    </tr>
                    <?php } ?>
           
            
                    </tbody>
                  </table>
          
				  </div>
			   </div>
			</div> <!-- ./col-lg-12  -->
		 
		</div>
	
	  </div>
        <!-- page end-->
      </section>
   
    <!--main content end-->
    <?php 
     	include('commonpages/footer.php');
     ?>
   <!-- container section end -->
 
  <!-- javascripts -->
  <script src="<?php echo base_url('assest/admin/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-ui-1.10.4.min.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-1.8.3.min.js');?>"></script>
  <script type="<?php echo base_url('assest/admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assest/admin/ckeditor/ckeditor.js');?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url('assest/admin/js/bootstrap.min.js');?>"></script>
   
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
$('#myTable').DataTable( {
    // dom: 'Bfrtip',
    // buttons: [
    //     'copy', 'csv', 'excel', 'pdf', 'print'
    // ]
} );
} );
</script>
    <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: './delete_tevent/'+id,
               type: 'DELETE',
               error: function() {
                  location.reload();
                  //alert('Something is wrong');
               },
               success: function(data) {
                    $(id).remove();
                    location.reload();
                    alert("Record removed successfully");  
               }
            });
        }
    });
</script>

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

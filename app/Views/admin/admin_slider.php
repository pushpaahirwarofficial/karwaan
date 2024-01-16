<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Slider| Karwaan</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> 

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

  /* confirmation modal box */
  .modal {
      text-align: center;
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 20%;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
   }
   .modalContent {
      font-size: 20px;
      font-weight: bold;
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
   }
   .close {
      color: rgb(255, 65, 65);
      float: right;
      font-size: 40px;
      font-weight: bold;
   }
   .close:hover, .close:focus {
      color: #ff1010;
      cursor: pointer;
   }
   .modalContent button {
      border: none;
      border-radius: 4px;
      font-size: 18px;
      font-weight: bold;
      padding: 10px;
   }
   .del {
      background-color: rgb(255, 65, 65);
   }
   .del:hover {
      background-color: rgb(255, 7, 7);
   }
   .cancel:hover {
      background-color: rgb(167, 167, 167);
   }
	
	</style>
</head>

<body>
     <!-- container section start -->
<section id="container" class="">
  <?php include('commonpages/header.php'); ?>
    <!--header start-->
	  	 <section id="main-content">
      <section class="wrapper">
        <div class="row">
           <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Slider</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../admin_index">Home</a></li>
              <li><i class="fa fa-th-list"></i>Slider</li>
            </ol>
          </div>
        </div>
</section>
</section>
  
       <header class="panel-heading" style="margin-left:14.5%; margin-right:20px">All Artist
	   </header>
     <div id="a" style="background-color:white">
                <div class="box-header">
              		  
					<a href="./add_Slider"  class="btn btn-info">
					Add New  &nbsp <i class="fa fa-plus" ></i></a>
				 
      </div>
            <!-- /.box-header -->
            <div class="col-lg-12">
			   	       
        <div class="table-responsive">
			    <div class="box-body"  >
			      <table id="myTable" class="display">
				     <thead>
                  <th>Id</th>				  
                  <th>Image Link</th>				  
                  <th>Title</th>				  
                  <th>Image</th>				  				  
                  <th>Alter</th>				  
                  <th>Priority</th>                  	
                  <th>Status</th>				  
                  <th >Action</th>				  
                  			  
					</thead>
					<tbody>
					<?php
						$count=0;
						 foreach($rows->getResult() as $row)
							{
                       $count++;
              			
							  ?>

			<tr id="<?php echo $row->sld_id; ?>">
                  <td> <?php echo $count; ?> </td>
                  <td> <?php echo $row->sld_imagelink; ?> </td>
                  <td> <?php echo $row->sld_title; ?> </td>
                  <td> 
                  <?php if(empty($row->sld_image)) { ?>
                      <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" width="200px" height="100px"  >
                  <?php } else { ?>
                      <img src="<?php echo base_url('assest/user/images/slider/').$row->sld_image; ?>" width="200px" height="100px"  >
                  <?php } ?>
                  </td>
                  <td> <?php echo $row->sld_alt; ?> </td>
                  <td> <?php echo $row->sld_priority; ?> </td>
                  <td> <?php if($row->sld_status==1){
                      echo "Active";}
                      else{
                        echo "Disable";
                      }
					  ?> </td>
                  
		
					<td>
					<!--href="./delete_slider/id" -->
					<div class="btn-group">
					<input type="hidden" name="sld_id" value="<?php echo $row->sld_id;?>">
						<a class="btn btn-primary" href="./view_slider/<?php echo $row->sld_id;?>"><i class="icon_plus_alt2"></i></a>
						<a class="btn btn-success" href="./edit_slider/<?php echo $row->sld_id;?>"><i class="icon_check_alt2"></i></a>
						<input type="hidden" name="sld_image" value="<?php echo $row->sld_image;?>">
						<button type="submit" class="btn btn-danger remove"><i class="icon_close_alt2"></i></button>					 
                      </div>
					</td>
				</tr>	
		
	<?php
		}
	?>
					</tbody>
				</table>
				</div>	
			</div>
			</div>
		    
				 </div> 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        // dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
        responsive: true
    } );
} );
</script>

    <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        console.log(id);

        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: './delete_slider/'+id,
               type: 'DELETE',
               error: function() {
                  alert('Something is wrong');
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

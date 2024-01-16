<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Blog| Karwaan</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> 

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap.min.css');?>" rel="stylesheet">
  
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap-theme.css');?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assest/admin/css/elegant-icons-style.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assest/admin/css/font-awesome.min.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assest/admin/css/font-awesome.css');?>" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  
  
  <link href="<?php echo base_url('assest/admin/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assest/admin/css/style-responsive.css');?>" rel="stylesheet" />

</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
   
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-news"></i>View Blog Details</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../../../admin_index">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="../getData_blog">Blog</a></li>
              <li><i class="fa fa-file-text-o"></i>Blog View</li>
            </ol>
          </div>
        </div>
	   		 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
    <?php $validation = \Config\Services::validation(); ?>                                   

      <div class="row">
        <div class="col-xs-12">
         

          <div class="box box-primary" >
            <div class="box-header">
              		  
					 <a  href="../getData_blog" class="btn btn-primary"> << </a>
				 
            </div>
			
			
            <!-- /.box-header -->
            <div class="box-body" style="overflow:none;background-color:white ;padding-bottom:30px">
		
              <table id="example1" class="table table-bordered table-striped">
               				
							<?php
							foreach($rows->getResult() as $row)
							{
              			
							  ?>   
	
               				  
				<tr>				  
                  <th width="30%">Title</th><td width="70%"> <?php echo $row->blog_title; ?> </td>  			  
                </tr>

				<tr>				  
                  <th width="30%">Description</th><td width="70%"> <?php echo $row->blog_desc; ?> </td>  			  
                </tr>
				
				
                <?php $new3 = date("d-m-Y", strtotime($row->blog_date));   ?>
				<tr>				  
                  <th width="30%"> Date</th><td width="70%"> <?php echo $new3; ?> </td>  			  
                </tr>
				
				<tr>				  
                  <th width="30%"> Twitter</th><td width="70%"> <?php echo $row->blog_twitter; ?> </td>  			  
                </tr>
				
								
                 				
				<tr>				  
                  <th width="30%"> Facebook</th><td width="70%"> <?php echo $row->blog_fb; ?> </td>  			  
                </tr>
				
								
				<tr>				  
                  <th width="30%"> Priority</th><td width="70%"> <?php echo $row->blog_priority; ?> </td>  			  
                </tr>
				
								
				
				
				
			    
			   <tr>
				  <th width="30%">Image</th> 
          <td width="70%"> 
                  <?php if(empty($row->blog_img)) { ?>
                      <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" width="40%"; height="25%" >
                  <?php } else { ?>
                      <img src="<?php echo base_url('assest/user/images/blog/').$row->blog_img; ?>" width="40%"; height="25%"; >
                  <?php } ?>        
          </td> 
				</tr>
				<?php
							}
				?>
            <?php 
              $countLike = 0;
              $countDislike = 0;
              foreach($like->getResult() as $lk1) {
                if($lk1->likes == 1) {
                  $countLike++;
                } elseif($lk1->likes == 0) {
                  $countDislike++;
                }
              } 
            ?>
               	<tr>				  
                  <th width="30%">Like  <i class="fa fa-thumbs-up"></i></th>
                  <td width="70%">
                    <?php echo $countLike; ?> 
                  </td>
                </tr>
                <tr>				  
                  <th width="30%">Dislike   <i class="fa fa-thumbs-down"></i></th><td width="70%"> <?php echo $countDislike; ?> </td>  			    			  
                </tr>
                
                <tr>				  
                  <th width="30%">Comments   <i class="fa fa-comments"></i></th><td width="70%"> 
                    <?php 
                    $countComm = 0;
                    $countRply = 0;
                   foreach($rows1->getResult() as $row1) {
                    foreach($rows2->getResult() as $row2) {
                      if($row1->comment_id == $row2->comment_id) {
                        $countRply++;
                      }
                    }
                    $countComm++;
                   } echo $totComm = $countRply+$countComm; 
                    ?> 
                  </td>  			    			  
                </tr>
              </table>
              <h4 align="center">
                <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="  text-decoration: none; color: gray; font-weight: bold;">
                  See Comments and their reply and approval.
                </a>
                <i class="fa fa-comments"></i></h4>
              <table class="table table-striped table-inverse table-responsive">
              <tr>
                <td width="100%">
                
              <div class="" id="">
                <div class="card card-body">
                <table class="table table-striped table-inverse table-responsive">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Reply</th>
                        <th>Add Reply</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                          <?php 
                           foreach($rows1->getResult() as $row1) { ?>
                            <tr id="<?php echo $row1->comment_id;?>">
                              <td><?php echo $row1->user_name; ?></td>
                              <td>
                                <div><?php echo $row1->comments; ?></div><br>
                                <?php $new4 = date("d-m-Y", strtotime($row1->date));   ?>
                                <div><?php echo $new4; ?></div>
                              </td>
                              <td>
                                <?php 
                                  foreach($rows2->getResult() as $row2) {
                                    if($row1->comment_id == $row2->comment_id) { ?>
                                        <div style="background-color:lightgray"><?php echo $row2->reply; ?></div>
                                        <?php $new5 = date("d-m-Y", strtotime($row2->date));   ?>
                                        <div><?php echo $new5; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-danger" href="../delete_reply/<?php echo $row2->reply_id;?>"><i class="icon_close_alt2"></i>Del Rply</a>
                                        </div><br>
                                <?php
                                    }
                                  }
                                ?> 
                              </td>
                              <td>
                                
                              <form action="../add_reply/<?php echo $row1->blog_id; ?>" method="post">
                                <div class="form-group">
                                <input type="hidden" name="blog_id" class="form-control" value="<?php echo $row1->blog_id; ?>">
                                <input type="hidden" name="comment_id" class="form-control" value="<?php echo $row1->comment_id; ?>">
                                <input type="hidden" name="user_id" class="form-control" value="<?php echo $row1->user_id; ?>">
                                <input type="hidden" name="blog_title" class="form-control" value="<?php echo $row1->blog_title; ?>">
                                <input type="hidden" name="priority" class="form-control" value="<?php echo $row1->priority; ?>">
                                
                                <?php if(empty($row2->reply)) {  ?>

                                <?php if($validation->getError('rply')) { ?>
                                <label style="color:red;">
                                <?= $error = $validation->getError('rply'); ?>
                                </label>
                                <?php } ?>

                                <?php } ?>
                                <input type="text" name="rply" class="form-control" placeholder=" Add Comment...">
                                <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Reply</button>							
                                </div>
                                </form>		 
                              </td>
                              <td>
                                <button type="submit" class="btn btn-danger remove"><i class="icon_close_alt2"></i>Del Comm</button>
                                <!-- <a class="btn btn-danger" href="../delete_comment/<?php //echo $row1->comment_id;?>"><i class="icon_close_alt2"></i></a> -->
                              </td>     
                            </tr>
                          <?php }
                          ?>
                        </tbody>
                   </table>
                </div>
              </div>
                   
                </td>
                </tr>
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
  
					
					
					<!-- End the feching the data from the table-->
					

				  </table>
			   </div>
			</div>
		 
		</div>
	
	   
	   
	   
	   
	   <!-- End the my table and connectivity-->

       

          
			<!--Here also main cintent end-->
          </div>
        </div>
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
               url: '../delete_comment/'+id,
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

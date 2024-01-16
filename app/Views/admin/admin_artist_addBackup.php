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
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
   
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-youtube-o"></i> Artist</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Artist</li>
              <li><i class="fa fa-file-text-o"></i>Artist Add</li>
            </ol>
          </div>
        </div>
		
       <!--THis is the my table and my connectivity-->
	   
	   
	   
	     <!-- Main content -->
    <section class="content"   style="background-color:white">
      <div class="row">
	  <div class="col-xs-12 col-md-12">
       
          <div class="box box-primary">
			<form action="./insert_artist" enctype="multipart/form-data" method="post">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Artist</h3>
				</div>			
				<!-- /.box-header -->
				<div class="box-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="art_name" class="form-control" placeholder="Enter Name">	
						</div>
					
					
						<div class="form-group">
							<label>Designation</label>
							<input type="text" name="art_desig" class="form-control" placeholder="Enter Name">		
						</div>

						
						<div class="form-group">
							<label>About</label>
							<textarea name="art_about" class="form-control" placeholder="About" style="resize:vertical"></textarea>
														
						</div>
						
						
						<div class="form-group">
							<label>Discription</label>
							<textarea name="art_disc" class="form-control" placeholder="Discription" style="resize:vertical"></textarea>
														
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
							<input type="text" name="art_linkedin" class="form-control" placeholder="Instagram">							
						</div>
						
						<div class="form-group">
							<label>Email Link</label>
							<input type="text" name="art_email" class="form-control" placeholder="Instagram">							
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
							<input type="file" name="art_img" class="form-control" placeholder="Image">							
						</div>
					

				</div>
			  <!-- /.box-body -->
			    <div class="box-footer">
                    <button type="submit" name="artist" class="btn btn-primary">Add</button>
					<button type="reset" class="btn btn-danger">Clear</button>	         
			        
                </div>			   
			</form>
		</div>
            <!-- /.box-body -->
         
		      
		           
		<div class="box box-primary">
			<form action="./insert_artistData" enctype="multipart/form-data" method="post">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Artist Data</h3>
				</div>			
				<!-- /.box-header -->
				<div class="box-body" id=>
						<div class="form-group">
							<label>Artist Id</label>
							<select name="a_id" class="form-control select2">
							<?php
						    foreach($rows as $row){
								
								?>
							<option value="<?php echo $row['ar_id'];?>"><?php echo $row['ar_name'];?></option>	
							<?php	
							}
							?>
                            </select>							
						</div>
						
					    <div class="form-group">
							<label>Type</label>
							<select class="form-control select2 " name="a_type">
							<option value="1">Image</option>						
							<option value="2">Video</option>						
							</select>
														
						</div>
					
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="a_img" class="form-control" placeholder="Image">		
						</div>

						
						<div class="form-group">
							<label>Video Link</label>
							<input name="a_video" class="form-control" placeholder="Video Link">
														
						</div>
						
						
						
					
						<div class="form-group">
							<label>Status</label>
							<select class="form-control select2 " name="a_status">
							<option value="1">Active</option>						
							<option value="0">Disable</option>						
							</select>							
						</div>
					
				</div>
			  <!-- /.box-body -->
			    <div class="box-footer">
                    <button type="submit" name="artist_data" class="btn btn-primary">Add</button>
					<button type="reset" class="btn btn-danger">Clear</button>	         
			        <a href="./get_artistData" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>Back</a>
                </div>			   
			</form> 
		       </div>
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
  <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
  <!-- nice scroll -->
  
  <script src="<?php echo base_url('assest/admin/js/jquery.scrollTo.min.js');?>"></script>
  <script src="<?php echo base_url('asset/js/jquery.nicescroll.js');?>" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="<?php echo base_url('assest/admin/js/jquery-ui-1.9.2.custom.min.js');?>"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="<?php echo base_url('assest/admin/js/ga.js');?>"></script>
  <!--custom switch-->
  <script src="<?php echo base_url('assest/admin/js/bootstrap-switch.js');?>"></script>
  <!--custom tagsinput-->
  <script src="<?php echo base_url('assest/admin/js/jquery.tagsinput.js');?>"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src=" <?php echo base_url('assest/admin/js/jquery.hotkeys.js');?>"></script>
  <script src=" <?php echo base_url('assest/admin/js/bootstrap-wysiwyg.js');?>"></script>
  <script src="  <?php echo base_url('assest/admin/js/bootstrap-wysiwyg-custom.js');?>"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="<?php echo base_url('assest/admin/ckeditor/ckeditor.js');?>"></script>
  <!-- custom form component script for this page-->
  <script src=" <?php echo base_url('assest/admin/js/form-component.js');?>"></script>
  <!-- custome script for all page -->
  <script src="<?php echo base_url('assest/admin/js/scripts.js');?>"></script>

</body>

</html>

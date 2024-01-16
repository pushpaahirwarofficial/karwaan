

<div class="banner_top_wthree_agileinfo">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			 
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				 
			</ol>
			 
			<div class="carousel-inner" role="listbox">
			 <!-- Here Fetch only single image whose priority is 1 --->
			 <?php
			       $count=0;
						 foreach($users->getResult() as $row)
							{
								  
                       $count++;
					    
			 
			 ?>
			    <?php if(empty($row->sld_image)) { ?>
					  <div class="item active" style="background-image:url('<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>')" >
                <?php } else { ?>
					<div class="item active" style="background-image:url('<?php echo base_url('assest/user/images/slider/').$row->sld_image; ?>')" >
            	<?php } ?>
					<div class="container">
						<div class="carousel-caption">
							<!--<h3><?php #echo ($row['sld_title']);?></h3>-->

							 

						</div>
					</div>
				</div>
				
				<!-- End the Active image--->
				
				<?php
			                 $count=0;
						 foreach($users->getResult() as $row)
							{
                       $count++;
					   ?>
				<div class="item item2" style="background-image:url('<?php echo base_url('assest/user/images/slider/').$row->sld_image; ?>')">
					<div class="container">
						<div class="carousel-caption">
							<!--<h3><?php #echo ($row['sld_title']);?></h3>-->
						</div>
					</div>
				</div>
				
							<?php 
							
							
							}

							?>
				<!-- End greater than 1 image wali priority--->
				<?php
				
							}
				?>
			</div>
			
			<!-- The Modal -->
		</div>
		
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" aria-hidden="true" style="margin-top:350px"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="fa fa-chevron-right" aria-hidden="true"  style="margin-top:350px"></span>
				<span class="sr-only">Next</span>
			</a>
	</div>
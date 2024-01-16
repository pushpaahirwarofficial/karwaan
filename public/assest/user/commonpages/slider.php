<div class="banner_top_wthree_agileinfo">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			</ol>
									
							
							
	<!--This is the connecting and fetching code -->		
			<?php
			   require('./library/config.php');
			   
			?>
              			
			
			

			
			<div class="carousel-inner" role="listbox">
			<?php
			$sql="SELECT * FROM tbl_slider WHERE sld_status=1 AND sld_priority=1";
						$data = $db->getRows($sql);
						 $count=0;
						 foreach($users as $row)
							{
                       $count++;
			?>
							<div class="item" style="background-image:url('./images/slider/<?php echo $row['sld_image']; ?>')">  
					<div class="container" >
               
						<div class="carousel-caption">
						
							<h3><?php echo $row['sld_title'];?></h3>

							<div class="bnr-button">
								<a class="act" href="single.php">Read More</a>
							</div>

						</div>
					</div>
				</div>
				
				
				<!--This is the second slider here feching from the data base and display like the backgeound image-->
				
				<!--Here end the this fechig but the foreach loop is open for the print image-->
				
				<?php
				$sql="SELECT * FROM tbl_slider WHERE sld_status=1 AND sld_priority>1 ORDER BY sld_priority";
						$data = $db->getRows($sql);
						 $count=0;
						 foreach($user as $row)
							{
                       $count++;
					   ?>
							<div class="item" style="background-image:url('./images/slider/<?php echo $row['sld_image']; ?>')"> 
					<div class="container">
						<div class="carousel-caption">
								<h3><?php echo $row['sld_title'];?></h3>

							<div class="bnr-button">
								<a class="act" href="single.php"><?php echo $row['sld_imagelink']?></a>
							</div>
						</div>
					</div>
				</div>
							<?php
							}
							?>
				
			
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!-- The Modal -->
		</div>
	</div>
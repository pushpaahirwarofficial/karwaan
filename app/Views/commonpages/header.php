
<div id="home">
		<!-- header -->
		<!-- Navigation -->
		<nav   class="navbar navbar-default navbar-fixed-top ">
			<div class="main-nav-agile-w3layouts">
			 
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Chronicle</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>						 
						<span class="icon-bar"></span>						 
					</button>
					<div class="logo">
						<a href="http://www.karwaantheatre.com/">
							<img src="<?php echo base_url('./assest/user/images/logo/logoPng.png'); ?>" alt="logo" style="  position: absolute;margin-top: -22px; height:80px;" class="logo" >
							</a>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
					<ul class="nav navbar-nav navbar-right cl-effect-15">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden">
							<a class="page-scroll" href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url('./')?>">HOME</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">ABOUT</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('./About/getAbout'); ?>" >ABOUT</a>
								</li>								  
								<li>
									<a href="<?php echo base_url('./artist/getArtist'); ?>" >ARTISTS</a>
								</li>
								<li>
									<a href="<?php echo base_url('./testimonial/getTestimonial'); ?>" >TESTIMONIALS</a>
								</li>
							</ul>
						</li> 
						<li>
							<a class="page-scroll" href="<?php echo base_url('./event/getEvent'); ?>" >EVENTs</a>
						</li>
				 
						<li>
							<a class="page-scroll" href="<?php echo base_url('./Tevents/events'); ?>" >T-EVENTs</a>
						</li>
						<li>
							<a class="page-scroll" href="#" >NEWS ROOM</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">GALLERY</a>	
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('./gallery/getGallery'); ?>" >IMAGE</a>
								</li>
								<li>
									<a href="<?php echo base_url('./youtube/getYouTube'); ?>" >YOUTUBE VIDEO</a>
								</li>
							</ul>
						</li>
                                <li>
							<a href="<?php echo base_url('./achievement/getachievement'); ?>">ACHIEVEMENTS</a>
						</li>	
						<li>
							<a href="<?php echo base_url('./blogs/getblogs'); ?>">Blogs</a>
						</li>						
						<li>
							<a href="<?php echo base_url('./contact/getContact'); ?>">CONTACT</a>
							
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
				<div class="clearfix"></div>
			</div>
			<!-- /.container -->
		</nav>
	</div>
	
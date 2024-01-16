<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
div.desc {
    
    text-align: center;
}


* {
  font-family: 'Avenir';
}
.bubbleWrapper {
	padding: 10px 10px;
	display: flex;
	justify-content: flex-end;
	flex-direction: column;
	align-self: flex-end;
  color: #fff;
}
.inlineContainer {
  display: inline-flex;
}
.inlineContainer.own {
  flex-direction: row-reverse;
}
.inlineIcon {
  width:20px;
  object-fit: contain;
}
.ownBubble {
	min-width: 60px;
	max-width: 700px;
	padding: 14px 18px;
  margin: 6px 8px;
	background-color: #5b5377;
	border-radius: 16px 16px 0 16px;
	border: 1px solid #443f56;
 
}
.otherBubble {
	min-width: 60px;
	max-width: 700px;
	padding: 14px 18px;
  margin: 6px 8px;
	background-color: #6C8EA4;
	border-radius: 16px 16px 16px 0;
	border: 1px solid #54788e;
  
}
.own {
	align-self: flex-end;
}
.other {
	align-self: flex-start;
}
span.own,
span.other{
  font-size: 14px;
  color: grey;
}

</style>


	<title>Karwaan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Medley Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="<?php echo base_url('assest/user/css/bootstrap.css');?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo base_url('assest/user/css/style.css');?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo base_url('assest/user/css/fontawesome-all.css');?>" rel="stylesheet">

	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- web-fonts -->

	<link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
	<!-- //web-fonts -->
</head>
<!--This is the header part-->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color:#add8e685; color:">
<?php include('commonpages/header.php'); ?>

<div class="banner" style="height: 112px;width:100%; position:relative; background-color:#867CE1"></div>

<!--/news-->
	<div class="ab_content">
		<div class="container">
			<h3 class="tittle_w3ls" style="color:white;">Latest Blog</h3>
			<div class="about-top">
				<!--<h3 class="subheading">Rock'n'roll live!</h3>-->
					<p class="paragraph"></p>
			</div>
			<?php 
			$count=0;
			foreach($users->getResult() as $row){   

				$count++;
				if($count%2==0){
			
			?>
			
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<!-- Content -->
				<div class="modal-content" id="content1">
				<!-- Header -->
				<div class="modal-header" id="header1">
					
				</div>
				<!-- Heder End -->
				<!-- Body -->
				<div class="modal-body" id="body1" style="height:300px; overflow-y:scroll;">
					
				</div>
				<!-- Body End -->
				<!-- Footer -->
				<div class="modal-footer" id="footer1">
					<form id="addComment">
						<input type="hidden" name="blog_id" id="blog_id" value="<?php echo $row->blog_id; ?>">
						<input type="hidden" name="blog_title" id="blog_title" value="<?php echo $row->blog_title; ?>">
						<div class="form-group">
							<label for="name-text" class="col-form-label">Name:</label>
							<input type="text" name="username" id="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Comment:</label>
							<textarea class="form-control" name="comments"  id="comments"></textarea>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary submit1">Add Comment</button>
						</div>
					</form>	
				</div>
				<!-- Footer End -->
				</div>
				<!-- Content End -->
			</div>

			</div>
			<!-- Modal End -->
			
			
			
				<div class="about-main">
					<?php if($row->blog_img != '') { ?>
						<div class="col-md-6 about-left" style="background-image:url('<?php echo base_url('assest/user/images/blog/').$row->blog_img; ?>')">					
					</div>
					<?php } else { ?>
						<div class="col-md-6 about-left" style="background-image:url('<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>')">
						</div>					
					<?php }?>

					<div class="col-md-6 about-right1">
						<h3><?php echo ucwords($row->blog_title); ?></h3>
						<p class="paragraph"><?php echo substr($row->blog_desc, 0 , 300); ?>..... <a href="./blog_view_desc/<?php echo $row->blog_id; ?>">Read More</a></p>
						<div class="event-bottom">
							<p class="comment">
							<?php $new1 = date("d-m-Y", strtotime($row->blog_date));   ?>
								<span class="far fa-calendar-alt"></span> <?= $new1;?></p>
							<ul>
								<li>
										<?php 
										    $countLike = 0;
											$countDislike = 0;
												foreach($like->getResult() as $lk1) {
													if($row->blog_id == $lk1->blog_id && $lk1->likes == 1) {
														$countLike++;
													} elseif($row->blog_id == $lk1->blog_id && $lk1->likes == 0) {
														$countDislike++;
													}
												}
										?>
									<a href="#">
										<!-- <span class="far fa-thumbs-up"></span>&nbsp;<?php //echo $row->blog_like; ?> -->
										<i class="fa fa-thumbs-up" aria-hidden="true"></i>&nbsp;<?= $countLike; ?>
									</a>
									&nbsp;&nbsp;
									<a href="#">
										<!-- <span class="far fa-thumbs-down"></span>&nbsp;<?php //echo $row->blog_like; ?> -->
										<i class="fa fa-thumbs-down" aria-hidden="true"></i>&nbsp;<?= $countDislike; ?>
									</a>
								</li>
								<li>
									<a data-id="<?php echo $row->blog_id; ?>" class="btn btnEdit">
										<span class="far fa-comments" id="comment1"></span>&nbsp;
										<?php 
										    $countComm = 0;
											$countRply = 0;
												foreach($comm->getResult() as $row1) {
													foreach($rply->getResult() as $row2) {
														if($row1->comment_id == $row2->comment_id && $row->blog_id == $row1->blog_id) {
															$countRply++;
														} 
													}
												}
												foreach($comm->getResult() as $row1) {
													if($row->blog_id == $row1->blog_id) {
														$countComm++;
													}
												}
											echo $totComm = $countComm+$countRply; 
										?>
									</a>
								</li>
								<li>
									<a href="<?= $row->blog_fb;?>">
										<span class="fab fa-facebook-f" target="_blank"></span>
									</a>
								</li>
								<li>
									<a href="<?= $row->blog_twitter;?>" target="_blank">
										<span class="fab fa-twitter"></span>
									</a>
								</li>
							</ul>
						</div>

					</div>
					<div class="clearfix"> </div>
					
				</div>
			<?php
			}#if
			
			 else{
 
			?>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<!-- Content -->
				<div class="modal-content" id="content1">
				<!-- Header -->
				<div class="modal-header" id="header1">
					
				</div>
				<!-- Heder End -->
				<!-- Body -->
				<div class="modal-body" id="body1" style="height:300px; overflow-y:scroll;">
					
				</div>
				<!-- Body End -->
				<!-- Footer -->
				<div class="modal-footer" id="footer1">
					<form id="addComment">
						<input type="hidden" name="blog_id" id="blog_id" value="<?php echo $row->blog_id; ?>">
						<input type="hidden" name="blog_title" id="blog_title" value="<?php echo $row->blog_title; ?>">
						<div class="form-group">
							<label for="name-text" class="col-form-label">Name:</label>
							<input type="text" name="username" id="username">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Comment:</label>
							<textarea class="form-control" name="comments"  id="comments"></textarea>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary submit1">Add Comment</button>
						</div>
					</form>	
				</div>
				<!-- Footer End -->
				</div>
				<!-- Content End -->
			</div>

			</div>
			<!-- Modal End -->
				

			<div class="about-main sec">
				<input type="hidden" name="" id="blog1" value="<?php echo $row->blog_id; ?>">
				<div class="col-md-6 about-right1 two">
					<h3><?php echo ucwords($row->blog_title); ?></h3>
					<p class="paragraph"><?php echo substr($row->blog_desc ,0 , 300); ?>.... <a href="./blog_view_desc/<?php echo $row->blog_id; ?>">Read More</a></p>
					<div class="event-bottom">
						<p class="comment">
						<?php $new1 = date("d-m-Y", strtotime($row->blog_date));   ?>
							<span class="far fa-calendar-alt"></span> <?= $new1;?></p>
						<ul>
							<li>
									<?php 
										    $countLike = 0;
											$countDislike = 0;
												foreach($like->getResult() as $lk1) {
													if($row->blog_id == $lk1->blog_id && $lk1->likes == 1) {
														$countLike++;
													} elseif($row->blog_id == $lk1->blog_id && $lk1->likes == 0) {
														$countDislike++;
													}
												}
										?>
									<a href="#">
										<!-- <span class="far fa-thumbs-up"></span>&nbsp;<?php //echo $row->blog_like; ?> -->
										<i class="fa fa-thumbs-up" aria-hidden="true"></i>&nbsp;<?= $countLike; ?>
									</a>
									&nbsp;&nbsp;
									<a href="#">
										<!-- <span class="far fa-thumbs-down"></span>&nbsp;<?php //echo $row->blog_like; ?> -->
										<i class="fa fa-thumbs-down" aria-hidden="true"></i>&nbsp;<?= $countDislike; ?>
									</a>
							</li>
							<li>

								<a data-id="<?php echo $row->blog_id; ?>" class="btn btnEdit" >
									<span class="far fa-comments" id="comment1"></span>&nbsp;
									<?php 
										    $countComm = 0;
											$countRply = 0;
												foreach($comm->getResult() as $row1) {
													foreach($rply->getResult() as $row2) {
														if($row1->comment_id == $row2->comment_id && $row->blog_id == $row1->blog_id) {
															$countRply++;
														} 
													}
												}
												foreach($comm->getResult() as $row1) {
													if($row->blog_id == $row1->blog_id) {
														$countComm++;
													}
												}
											echo $totComm = $countComm+$countRply; 
										?>
								</a>

							</li>
							<li>
								<a href="<?= $row->blog_fb;?>" target="_blank">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li>
								<a href="<?= $row->blog_twitter;?>">
									<span class="fab fa-twitter" target="_blank"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				
				<?php if($row->blog_img != '') { ?>
						<div class="col-md-6 about-left two" style="background-image:url('<?php echo base_url('assest/user/images/blog/').$row->blog_img; ?>')">					
					</div>
					<?php } else { ?>
						<div class="col-md-6 about-left two" style="background-image:url('<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>') ">
						</div>					
					<?php }?>

				<div class="clearfix"> </div>
				
			</div>
			<?php
			 }# else
				 }#foreach 
			?>
			
		</div>
	</div>
	<div class="text-center" style="">
			</div>
<!--//news-->

	<?php include('commonpages/footer.php'); ?>
	
	<!-- js -->
		<script src="<?php echo base_url('assest/user/js/jquery-2.2.3.min.js');?>"></script>
	<!-- //js -->
	<script type="text/javascript" src="<?php echo base_url('assest/user/js/all.js');?>"></script>

	<!--search jQuery-->
	<script src="<?php echo base_url('assest/user/js/search.js');?>"></script>
	<!--search jQuery-->
	<!-- Scrolling Nav JavaScript -->
	<script src="<?php echo base_url('assest/user/js/scroll_menu.js');?>"></script>
	<!-- //fixed-scroll-nav-js -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<script type="text/javascript">
		$("body").on('click', '.btnEdit', function(){
			var id = $(this).attr('data-id');
			var html = "";
			var html1 = "";
			$.ajax({
				url: './blogview/'+id,
				type: 'POST',
				dataType: 'json',
				success: function(res) {
					$('#exampleModalCenter').modal('show');
					html1 += '<h3 class="modal-title" id="exampleModalLongTitle">'+res.usr.blog_title+'</h3>';
					$('#header1').html(html1);
					var count = 0;
					var count1 = 0;
					for(var i=0; i<res.comm.length; i++) {
						html += '<div class="bubbleWrapper">';
						html += '<div class="inlineContainer">';
						html += '<img class="inlineIcon" src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">';
						html += '<div class="otherBubble other">'+res.comm[i].comments+'</div>';
						let date5 = new Date(res.comm[i].date);
						var day = date5.getDate() + "-" + (date5.getMonth()+1) + "-" + date5.getFullYear()
						html += '</div>';
						html += '<span class="other">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'+day+'	|	By '+res.comm[i].user_name+'</span>';
						html += '</div>';
						for(var j=0; j<res.rply.length; j++) {

							let date51 = new Date(res.rply[j].date);
							var day1 = date51.getDate() + "-" + (date51.getMonth()+1) + "-" + date51.getFullYear()
							if(res.comm[i].comment_id == res.rply[j].comment_id) {
								html += '<div class="bubbleWrapper">';
								html += '<div class="inlineContainer own">';
								html += '<img class="inlineIcon" src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">';
								html += '<div class="ownBubble own">'+res.rply[j].reply;
								html += '</div>';
								html += '</div><span class="own">'+day1+'	|	Reply by admin &nbsp;&nbsp;&nbsp;&nbsp;</span>';
								html += '</div>';
								count1++;
							}
						}
						count++;
					}
					$('#body1').html(html);
				}
			});
		
		$('#addComment').submit(function(event){
				event.preventDefault();
				var blog_id1 = id;
				var username1 = $("#username").val();
				var comments1 = $("#comments").val();
				$.ajax({
					url: './insert_comment',
					data: {blog_id:blog_id1, username: username1, comments:comments1},
					type: 'POST',
					async: false,
					dataType: 'json',
					success: function(response) {
						$('#exampleModalCenter').modal('hide');
						$('#addComment')[0].reset();
						location.reload();
					},
					error: function() {
						alert('Error');
					}
				});
			});
		});
	</script>	

	<script>
		$(".hover").mouseleave(
			function () {
				$(this).removeClass("hover");
			}
		);
	</script>

	 

	<!-- start-smooth-scrolling -->
	<script src="<?php echo base_url('assest/user/js/move-top.js');?>"></script>
	<script src="<?php echo base_url('assest/user/js/easing.js');?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	 

	 
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
			    containerID: 'toTop', // fading element id
			    containerHoverID: 'toTopHover', // fading element hover id
			    scrollSpeed: 1200,
			    easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	
	<script src="<?php echo base_url('assest/user/js/bootstrap.js');?>"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>

</html>
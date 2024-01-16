<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
div.desc {
    
    text-align: center;
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
  <link href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');?>" rel="stylesheet">

	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- web-fonts -->

	<link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
	<!-- //web-fonts -->
</head>
<!--This is the header part-->

<style>
    body{margin-top:20px;}
.blog-listing {
    padding-top: 30px;
    padding-bottom: 30px;
}
.gray-bg {
    background-color: #f5f5f5;
}
/* Blog 
---------------------*/
.blog-grid {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  margin-top: 15px;
  margin-bottom: 15px;
}
.blog-grid .blog-img {
  position: relative;
}
.blog-grid .blog-img .date {
  position: absolute;
  background: #fc5356;
  color: #ffffff;
  padding: 8px 15px;
  left: 10px;
  top: 10px;
  border-radius: 4px;
}
.blog-grid .blog-img .date span {
  font-size: 22px;
  display: block;
  line-height: 22px;
  font-weight: 700;
}
.blog-grid .blog-img .date label {
  font-size: 14px;
  margin: 0;
}
.blog-grid .blog-info {
  padding: 20px;
}
.blog-grid .blog-info h5 {
  font-size: 22px;
  font-weight: 700;
  margin: 0 0 10px;
}
.blog-grid .blog-info h5 a {
  color: #20247b;
}
.blog-grid .blog-info p {
  margin: 0;
}
.blog-grid .blog-info .btn-bar {
  margin-top: 20px;
}


/* Blog Sidebar
-------------------*/
.blog-aside .widget {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  margin-top: 15px;
  margin-bottom: 15px;
  width: 100%;
  display: inline-block;
  vertical-align: top;
}
.blog-aside .widget-body {
  padding: 15px;
}
.blog-aside .widget-title {
  padding: 15px;
  border-bottom: 1px solid #eee;
}
.blog-aside .widget-title h3 {
  font-size: 20px;
  font-weight: 700;
  color: #867CE1;
  margin: 0;
}
.blog-aside .widget-author .media {
  margin-bottom: 15px;
}
.blog-aside .widget-author p {
  font-size: 16px;
  margin: 0;
}
.blog-aside .widget-author .avatar {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  overflow: hidden;
}
.blog-aside .widget-author h6 {
  font-weight: 600;
  color: #20247b;
  font-size: 22px;
  margin: 0;
  padding-left: 20px;
}
.blog-aside .post-aside {
  margin-bottom: 15px;
}
.blog-aside .post-aside .post-aside-title h5 {
  margin: 0;
}
.blog-aside .post-aside .post-aside-title a {
  font-size: 18px;
  color: #20247b;
  font-weight: 600;
}
.blog-aside .post-aside .post-aside-meta {
  padding-bottom: 10px;
}
.blog-aside .post-aside .post-aside-meta a {
  color: #6F8BA4;
  font-size: 12px;
  text-transform: uppercase;
  display: inline-block;
  margin-right: 10px;
}
.blog-aside .latest-post-aside + .latest-post-aside {
  border-top: 1px solid #eee;
  padding-top: 15px;
  margin-top: 15px;
}
.blog-aside .latest-post-aside .lpa-right {
  width: 90px;
}
.blog-aside .latest-post-aside .lpa-right img {
  border-radius: 3px;
}
.blog-aside .latest-post-aside .lpa-left {
  padding-right: 15px;
}
.blog-aside .latest-post-aside .lpa-title h5 {
  margin: 0;
  font-size: 15px;
}
.blog-aside .latest-post-aside .lpa-title a {
  color: #20247b;
  font-weight: 600;
}
.blog-aside .latest-post-aside .lpa-meta a {
  color: #6F8BA4;
  font-size: 12px;
  text-transform: uppercase;
  display: inline-block;
  margin-right: 10px;
}

.tag-cloud a {
  padding: 4px 15px;
  font-size: 25px;
  color: #ffffff;
  background: #20247b;
  border-radius: 3px;
  margin-right: 4px;
  margin-bottom: 4px;
}
.tag-cloud a:hover {
  background: #fc5356;
}

.blog-single {
  padding-top: 30px;
  padding-bottom: 30px;
}

.article {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  padding: 15px;
  margin: 15px 0 30px;
}
.article .article-title {
  padding: 15px 0 20px;
}
.article .article-title h6 {
  font-size: 14px;
  font-weight: 700;
  margin-bottom: 20px;
}
.article .article-title h6 a {
  text-transform: uppercase;
  color: #fc5356;
  border-bottom: 1px solid #fc5356;
}
.article .article-title h2 {
  color: #20247b;
  font-weight: 600;
}
.article .article-title .media {
  padding-top: 15px;
  border-bottom: 1px dashed #ddd;
  padding-bottom: 20px;
}
.article .article-title .media .avatar {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  overflow: hidden;
}
.article .article-title .media .media-body {
  padding-left: 8px;
}
.article .article-title .media .media-body label {
  font-weight: 600;
  color: #fc5356;
  margin: 0;
}
.article .article-title .media .media-body span {
  display: block;
  font-size: 12px;
}
.article .article-content h1,
.article .article-content h2,
.article .article-content h3,
.article .article-content h4,
.article .article-content h5,
.article .article-content h6 {
  color: #20247b;
  font-weight: 600;
  margin-bottom: 15px;
}
.article .article-content blockquote {
  max-width: 600px;
  padding: 15px 0 30px 0;
  margin: 0;
}
.article .article-content blockquote p {
  font-size: 20px;
  font-weight: 500;
  color: #fc5356;
  margin: 0;
}
.article .article-content blockquote .blockquote-footer {
  color: #20247b;
  font-size: 16px;
}
.article .article-content blockquote .blockquote-footer cite {
  font-weight: 600;
}
.article .tag-cloud {
  padding-top: 10px;
}

.article-comment {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  padding: 20px;
}
.article-comment h4 {
  color: #20247b;
  font-weight: 700;
  margin-bottom: 25px;
  font-size: 22px;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}

/* Contact Us
---------------------*/
.contact-name {
  margin-bottom: 30px;
}
.contact-name h5 {
  font-size: 22px;
  color: #20247b;
  margin-bottom: 5px;
  font-weight: 600;
}
.contact-name p {
  font-size: 18px;
  margin: 0;
}

.social-share a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
  margin-right: 10px;
}
.social-share .dribbble {
  box-shadow: 0 8px 30px -4px rgba(234, 76, 137, 0.5);
  background-color: #ea4c89;
}
.social-share .behance {
  box-shadow: 0 8px 30px -4px rgba(0, 103, 255, 0.5);
  background-color: #0067ff;
}
.social-share .linkedin {
  box-shadow: 0 8px 30px -4px rgba(1, 119, 172, 0.5);
  background-color: #0177ac;
}

.contact-form .form-control {
  border: none;
  border-bottom: 1px solid #20247b;
  background: transparent;
  border-radius: 0;
  padding-left: 0;
  box-shadow: none !important;
}
.contact-form .form-control:focus {
  border-bottom: 1px solid #fc5356;
}
.contact-form .form-control.invalid {
  border-bottom: 1px solid #ff0000;
}
.contact-form .send {
  margin-top: 20px;
}
@media (max-width: 767px) {
  .contact-form .send {
    margin-bottom: 20px;
  }
}

.section-title h2 {
    font-weight: 700;
    color: #20247b;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}
.section-title {
    padding-bottom: 45px;
}
.contact-form .send {
    margin-top: 20px;
}
.px-btn {
    padding: 0 50px 0 20px;
    line-height: 60px;
    position: relative;
    display: inline-block;
    color: #20247b;
    background: none;
    border: none;
}
.px-btn:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 30px;
    background: transparent;
    border: 1px solid rgba(252, 83, 86, 0.6);
    border-right: 1px solid transparent;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    width: 60px;
    height: 60px;
}
.px-btn .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
}
.px-btn .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
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

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div class="banner" style="height: 112px;width:100%; position:relative; background-color:#867CE1"></div>
<?php $validation = \Config\Services::validation(); ?>                                   
<!--/blogViewDesc-->
<?php foreach($usr->getResult() as $row) { ?>
        <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <?php if(empty($row->blog_img)) { ?>
                            <!-- <img src="https://www.bootdey.com/image/800x350/87CEFA/000000" title="" alt=""> -->
                            <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" title="" alt="" width='800px' height='350px'>

                            <?php } else { ?>
                                <img src="<?php echo base_url('assest/user/images/blog/').$row->blog_img; ?>" title="" alt="">
                            <?php } ?>
                        </div>
                        <div class="article-title">
                            <h2><?php echo ucwords($row->blog_title); ?></h2>
                            <div class="media">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <label>By Admin</label>
                                    <?php $new3 = date("d-m-Y", strtotime($row->blog_date));   ?>
                                    <span><?php echo $new3; ?></span>
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

                                    <a href="">
                                    <span class="far fa-thumbs-up"></span>
                                    </a>
                                    &nbsp;<?php echo $countLike;?>&nbsp;&nbsp;&nbsp;&nbsp;

                                    <a href="">
                                    <span class="far fa-thumbs-down"></span>
                                    </a>
                                    &nbsp;<?php echo $countDislike;?>&nbsp;&nbsp;&nbsp;&nbsp;

                                    <span class="far fa-comments"></span>&nbsp;&nbsp;
                                    <?php 
                                      $countComm = 0;
                                      $countRply = 0;
                                      foreach($comm->getResult() as $row1) {
                                        foreach($rply->getResult() as $row2) {
                                          if($row1->comment_id == $row2->comment_id) {
                                            $countRply++;
                                          }
                                        }
                                        $countComm++;
                                      } 
                                      echo $totComm = $countRply+$countComm;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p>
                            <?php echo $row->blog_desc; ?>
                            </p>
                        </div>
                        
                    </article>
                </div>
                <div class="col-lg-4 m-15px-tb blog-aside">
                    <!-- Author -->
                    <div class="widget widget-author">
                        <div class="widget-title">
                            <h3>Other Blogs</h3>
                        </div>
                        <?php 
                        foreach($allUsr->getResult() as $all) { 
                        ?>
                        <div class="widget-body">
                          <div class="card">
                            <?php if(empty($row->blog_img)) { ?>
                            <img src="<?php echo base_url('assest/user/images/defaultImage.jpg'); ?>" title="" alt="" width='800px' height='150px' class="card-img-top">

                            <?php } else { ?>
                            <img src="<?php echo base_url('assest/user/images/blog/').$all->blog_img; ?>" title="" alt="" width='800px' height='150px' class="card-img-top">
                            <?php } ?>
                              <span class="card-title">
                                <a href="../blog_view_desc/<?php echo $all->blog_id; ?>">
                                  <?php echo ucwords($all->blog_title); ?>
                                </a>
                              </span><br>
                              <span class="card-title" align="right">
                                <?php
                                  $newDate = date("d-m-Y", strtotime($all->blog_date));  
                                  echo $newDate; 
                                 ?>
                              </span>
                          </div>
                        </div>
                        <?php }
                        
                        ?>
                    </div>
                    <!-- End Author -->
                    
                    
                </div>
            </div>
            <div class="col-lg-8 m-15px-tb blog-aside">
                    <!-- Author -->
                    <div class="widget widget-author">
                        <div class="widget-title">
                            <h3>Read Comments</h3>
                        </div>
                        <div class="widget-body">
                          <div class="media align-items-center" style="height:300px; overflow-y:scroll;">

                          <?php foreach($comm->getResult() as $row1) { ?>
                          <div class="bubbleWrapper">
                                <div class="inlineContainer">
                                  <img class="inlineIcon" src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">
                                  <div class="otherBubble other">
                                  <?= $row1->comments; ?>
                                  </div>
                                  <?php $new1 = date("d-m-Y", strtotime($row1->date));   ?>
                                </div><span class="other">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $new1; ?>	|	By <?php echo $row1->user_name; ?></span>
                              </div>

                          <?php foreach($rply->getResult() as $row2) { 
                            if($row1->comment_id == $row2->comment_id) {
                          ?>
                              <div class="bubbleWrapper">
                                <div class="inlineContainer own">
                                  <img class="inlineIcon" src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">
                                  <div class="ownBubble own">
                                  <?= $row2->reply; ?>
                                  </div>
                                  <?php $new2 = date("d-m-Y", strtotime($row1->date));   ?>
                                </div><span class="own"><?php echo $new2; ?>	|	Reply by admin &nbsp;&nbsp;&nbsp;&nbsp;</span>
                              </div>
                        <?php }
                            } 
                          }
                          ?>
                          </div>

                          
							              <div class="nav tag-cloud">
                            <a href="<?= $row->blog_twitter;?>" target="_blank"><span class="fab fa-twitter"></span></a>
                            <a href="<?= $row->blog_fb;?>" target="_blank"><span class="fab fa-facebook"></span></a>
                            <a href="https://www.instagram.com/" target="_blank"><span class="fab fa-instagram"></span></a>
                            <a href="https://www.linkedin.com/" target="_blank"><span class="fab fa-linkedin"></span></a>
                            <a href="https://web.whatsapp.com/"  target="_blank"><span class="fab fa-whatsapp"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Author -->
                    <!-- Blog List -->
                    <div class="widget widget-post">
                        <div class="widget-title">
                            <h3>Add Comment</h3>
                        </div>
                        <div class="widget-body">
                        <?php foreach($usr->getResult() as $row) { ?>
                        <form id="contact-form" method="POST" action="../add_comment/<?php echo $row->blog_id; ?>">
                        <input name="blog_id" id="blog_id" type="hidden" value="<?php echo $row->blog_id; ?>">
                        <input name="blog_title" id="blog_title" type="hidden" value="<?php echo $row->blog_title; ?>">
                        <input name="blog_priority" id="blog_priority" type="hidden" value="<?php echo $row->blog_priority; ?>">

                            <div class="row">
                                <div class="col-md-12">
                                <?php if($validation->getError('user_name')) { ?>
                                <label style="color:red; font-size:15">
                                <?= $error = $validation->getError('user_name'); ?>
                                </label>
                                <?php } ?>

                                    <div class="form-group">
                                        <input name="user_name" id="user_name" placeholder="Name *" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <?php if($validation->getError('comments')) { ?>
                                <label style="color:red; font-size:15">
                                <?= $error = $validation->getError('comments'); ?>
                                </label>
                                <?php } ?>
                                        <textarea name="comments" id="comments" placeholder="Your comment *" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button type="submit" class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                        </div>
                    </div>
                    <!-- End Blog List -->
                    
                </div>
        </div>
        
    </div>
     <?php } ?>   
<!--end blogViewDesc-->

	
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
    
	<script>
		$(".hover").mouseleave(
			function () {
				$(this).removeClass("hover");
			}
		);
	</script>

<script>
  
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Dashboard| Karwaan</title>

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
  <link href="css/style-responsive.css" rel="stylesheet" />

  
   <!-- ======================================================= -->
</head>

<body>
<?php 
    include('commonpages/header.php'); 
?>
  <!-- container section start -->
  <section id="container" class="">


    <!--main content start-->
    <section id="main-content"  >
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-dashboard"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="./admin_index">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./slider/getData_slider">
            <div class="info-box brown-bg">
              <i class="fa fa-sliders"></i>
              <div class="count"><?php echo $countSlider ;?></div>
              <div class="title">Slider</div>
            </div>
            <!--/.info-box-->
            </a>
          </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./achievement/getData_achievement">
            <div class="info-box green-bg">
              <i class="fa fa-trophy"></i>
              <div class="count"><?php echo $countAchievement ;?></div>
              <div class="title">Achievement</div>
            </div>
            <!--/.info-box-->
            </a>
          </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <a href="./artist/getData_artist">
            <div class="info-box blue-bg">
              <i class="fa fa-users"></i>
              <div class="count"><?php echo $countArtists ;?></div>
              <div class="title">Artist</div>
            </div>
            <!--/.info-box-->
          </a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./artist/get_artistData">
            <div class="info-box dark-bg">
              <i class="fa fa-user"></i>
              <div class="count"><?php echo $countArtistData ;?></div>
              <div class="title">Artist Data</div>
            </div>
            <!--/.info-box-->
            </a>
          </div>
          
        
            
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./youtube/getData_youtube">
                <div class="info-box red-bg">
                  <i class="fa fa-youtube"></i>
                  <div class="count"><?php echo $countVideos; ?></div>
                  <div class="title">Youtube Videos</div>
                </div>
                <!--/.info-box-->
                </a>
              </div>
          
              <!--/.col-->
              
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./testimonial/getData_testimonial">
                <div class="info-box green-bg">
                  <i class="fa fa-comments"></i>
                  <div class="count"><?php echo $countReviews; ?></div>
                  <div class="title">Testimonial</div>
                </div>
                <!--/.info-box-->
                </a>
        </div>
              
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./contact/getData_contact">
                <div class="info-box pink-bg">
                  <i class="fa fa-phone"></i>
                  <div class="count"><?php echo $countContacts; ?></div>
                  <div class="title">Contact Request</div>
                </div>
                <!--/.info-box-->
                </a>
              </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./newsletter/getData_newsletter">
                <div class="info-box dark-bg">
                  <i class="fa fa-paper-plane"></i>
                  <div class="count"><?php echo $countLetter; ?></div>
                  <div class="title">Newsletter Request</div>
                </div>
                <!--/.info-box-->
                </a>
              </div>
          
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./events/getData_event">
                <div class="info-box orange-bg">
                  <i class="fa fa-calendar"></i>
                  <div class="count"><?php echo $countEvents; ?></div>
                  <div class="title">Events</div>
                </div>
                <!--/.info-box-->
                </a> 
            </div>


        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./tevents/get_event">
                <div class="info-box blue-bg">
                  <i class="fa fa-film"></i>
                  <div class="count"><?php echo $countTevents; ?></div>
                  <div class="title">Theatrical Events</div>
                </div>
                <!--/.info-box-->
                </a>
          </div>
           
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="./gallery/getData_gallery">
                <div class="info-box brown-bg">
                  <i class="fa fa-image"></i>
                  <div class="count"><?php echo $countImages; ?></div>
                  <div class="title">Gallery Images</div>
                </div>
                <!--/.info-box-->
                </a>  
          </div>
         
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="./blogs/getData_blog">
                    <div class="info-box red-bg">
                      <i class="fa fa-edit"></i> 
                      <div class="count"><?php echo $countBlogs; ?></div>
                      <div class="title">Blog</div>
                    </div>
                    <!--/.info-box-->
                    </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="./recycle/recycle_bin">
                    <div class="info-box green-bg">
                      <i class="fa fa-recycle"></i> 
                      <div class="count"><?php echo 28; ?></div>
                      <div class="title">Recycle Bin</div>
                    </div>
                    <!--/.info-box-->
                    </a>
            </div>
            
            
    </div>

      </section>    
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
<?php 
    include('commonpages/footer.php'); 
?>
  <!-- javascripts -->
  <script src="<?php echo base_url('assest/admin/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-ui-1.10.4.min.js');?>"></script>
  <script src="<?php echo base_url('assest/admin/js/jquery-1.8.3.min.js');?>"></script>
  <script type="<?php echo base_url('assest/admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js');?>"></script>
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

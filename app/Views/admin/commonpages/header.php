<header class="header dark-bg">
      <div class="toggle-nav" id="myToggle">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo"><span class="lite">Admin</span></a>
      <!--logo end-->

   
        <!--  search form start -->
        <span style="float:right; margin-top:12px">
     <form action="../../admin_logout">
	  <input type="submit" value="Logout" class="btn btn-danger">
	  </form>
	  </span>
    </header>

  <?php  include('sidebar.php');  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
      //Toggle sidebar
          $("#myToggle").click(function(){
             $('#sidebar').slideToggle();
          });
      
    </script>


    
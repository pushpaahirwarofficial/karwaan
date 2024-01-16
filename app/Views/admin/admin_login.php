
<!DOCTYPE html>
<html lang="en">
<!http://www.karwaantheatre.com/index.php/admin/login/initial>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="karwaan Theatre | Admin Panel">
  <meta name="author" content="Nazeer Kureshi">
  <meta name="keyword" content="karwaan Theatre Bhopal">
  <link rel="shortcut icon" href="<?php echo base_url('assest/admin/img/favicon.png');?>">

  <title>karwaan Theatre Admin Login Page     </title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assest/admin/css/bootstrap-theme.css');?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assest/admin/css/elegant-icons-style.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('assest/admin/css/font-awesome.css');?>" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url('assest/admin/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assest/admin/css/style-responsive.css');?>" rel="stylesheet" />

</head>

<body class="login-img3-body">

  <div class="container">
  <?php $validation = \Config\Services::validation(); ?>
    <form class="login-form" action="./admin_signin" method="post">
      <div class="login-wrap">
      <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <?php if($validation->getError('emailid')) { ?>
        <span class='mt-1 mb-1' style="color:red;">
            <?= $error = $validation->getError('emailid'); ?>
        </span>
        <?php } ?>      
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="emailid" placeholder="Username" autofocus>
        </div>
        <?php if($validation->getError('password')) { ?>
        <span class='mt-1 mb-1' style="color:red;">
            <?= $error = $validation->getError('password'); ?>
        </span>
        <?php } ?>
      
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
             
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_login">Login</button>
       <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
        
        </div>
    </div>
  </div>


</body>

</html>

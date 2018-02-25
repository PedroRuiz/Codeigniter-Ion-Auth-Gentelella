<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo form_open("auth/login");?>
              <h1><?php echo lang('login_heading');?></h1>
              <p><?php echo lang('login_subheading');?></p>
              <div>
                  <?php echo lang('login_identity_label', 'identity');?>
                <input name="identity" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                  <?php echo lang('login_password_label', 'password');?>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <?php echo form_submit('submit', lang('login_submit_btn'),array('class'=>"btn btn-default submit"));?>

                <p><a href="<?php echo base_url('auth/forgot_password/action.html')?>"><?php echo lang('login_forgot_password');?></a></p>
              </div>
              <p>
                <?php echo lang('login_remember_label', 'remember');?>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
              </p>
              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>© 2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>

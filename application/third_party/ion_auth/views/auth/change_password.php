<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | <?php echo lang('change_password_heading');?></title>

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
              <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open("auth/change_password");?>
              <h1><?php echo lang('change_password_heading');?></h1>
              <div>
                  <?php echo lang('change_password_old_password_label', 'old_password');?>
                  <input name="old_password" type="text" class="form-control" placeholder="Old Password" required="required" />
              </div>
              <div>
                  <?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?>
                  <input name="new_password" type="password" class="form-control" placeholder="Password" required="required" />
              </div>
              <div>
                  <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?>
                  <input name="new_password_confirm" type="password" class="form-control" placeholder="Password confirm" required="required" />
              </div>
              <div>
                <?php echo form_submit('submit', lang('change_password_submit_btn'),array('class'=>"btn btn-default submit"));?>


              </div>

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

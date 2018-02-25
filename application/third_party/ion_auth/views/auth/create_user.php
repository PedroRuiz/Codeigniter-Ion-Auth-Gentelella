<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | <?php echo lang('create_user_heading');?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/gentelella_master')?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

            <?php $this->load->view('inc/sidebar_menu')?>


          </div>
        </div>

        <?php $this->load->view('inc/top_menu')?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo lang('create_user_heading');?></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo lang('create_user_subheading');?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div id="infoMessage"><?php echo $message;?></div>

                      <?php echo form_open("auth/create_user",array('class'=>'form-horizontal form-label-left'));?>


                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_fname_label', 'first_name');?> <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($first_name,'',array('class'=>'form-control col-md-7 col-xs-12','required'=>'required'));?>
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_lname_label', 'last_name');?>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($last_name,'',array('class'=>'form-control col-md-7 col-xs-12'));?>
                         </div>
                       </div>

                       <?php if($identity_column!=='email'):?>
                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_identity_label', 'identity')?>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($identity,'',array('class'=>'form-control col-md-7 col-xs-12'));?>
                           <?php form_error('identity');?>
                         </div>
                       </div>
                       <?php endif?>

                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_company_label', 'company');?>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($company,'',array('class'=>'form-control col-md-7 col-xs-12'));?>
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_email_label', 'email');?>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($email,'',array('class'=>'form-control col-md-7 col-xs-12'));?>
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_phone_label', 'phone');?>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($phone,'',array('class'=>'form-control col-md-7 col-xs-12'));?>
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_password_label', 'password');?>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($password,'',array('type'=>'password','class'=>'form-control col-md-7 col-xs-12'));?>
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php echo form_input($password_confirm,'',array('type'=>'password','class'=>'form-control col-md-7 col-xs-12'));?>
                         </div>
                       </div>

                       <div class="ln_solid"></div>
                       <div class="form-group">
                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

 						  <button class="btn btn-primary" type="reset">Reset</button>
                           <?php echo form_submit('submit', lang('create_user_submit_btn'),array('class'=>'btn btn-primary'));?>
                         </div>
                       </div>

                     </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php $this->load->view('inc/footer')?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/build/js/custom.min.js"></script>
  </body>
</html>

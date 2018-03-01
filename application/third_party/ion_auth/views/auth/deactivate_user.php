<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | <?php echo lang('deactivate_heading');?></title>

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


            <?php $this->load->view('inc/sidebar_menu',array('admin'=>TRUE))?>
          </div>
        </div>

        <?php $this->load->view('inc/top_menu');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo lang('deactivate_heading');?></h3>
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
                    <h2><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php echo form_open("auth/deactivate/".$user->id);?>

                        <p>
                        	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                          <input type="radio" name="confirm" value="yes" checked="checked" />
                          <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                          <input type="radio" name="confirm" value="no" />
                        </p>

                        <?php echo form_hidden($csrf); ?>
                        <?php echo form_hidden(array('id'=>$user->id)); ?>

                        <p><?php echo form_submit('submit', lang('deactivate_submit_btn'),array('class'=>'btn btn-primary'));?></p>

                      <?php echo form_close();?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php $this->load->view('inc/footer');?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/gentelella_master')?>/build/js/custom.min.js"></script>
  </body>
</html>

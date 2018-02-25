<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | <?php echo lang('index_heading');?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/gentelella_master');?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/gentelella_master');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/gentelella_master');?>/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/gentelella_master');?>/build/css/custom.min.css" rel="stylesheet">
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
                <h3><?php echo lang('index_heading');?></h3>
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
                    <h2><?php echo lang('index_subheading');?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><?php echo anchor('auth/create_user', lang('index_create_user_link'))?>
                          </li>
                          <li><?php echo anchor('auth/create_group', lang('index_create_group_link'))?>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table class="table table-responsive table-striped" cellpadding=0 cellspacing=10>
                      	<tr>
                      		<th><?php echo lang('index_fname_th');?></th>
                      		<th><?php echo lang('index_lname_th');?></th>
                      		<th><?php echo lang('index_email_th');?></th>
                      		<th><?php echo lang('index_groups_th');?></th>
                      		<th><?php echo lang('index_status_th');?></th>
                      		<th><?php echo lang('index_action_th');?></th>
                      	</tr>
                      	<?php foreach ($users as $user):?>
                      		<tr>
                                  <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                      			<td>
                      				<?php foreach ($user->groups as $group):?>
                      					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                                      <?php endforeach?>
                      			</td>
                      			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                      			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
                      		</tr>
                      	<?php endforeach;?>
                      </table>
                  </div>
                  (Press <i class="fa fa-wrench"></i> for actions)
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
    <script src="<?php echo base_url('assets/gentelella_master');?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/gentelella_master');?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/gentelella_master');?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/gentelella_master');?>/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/gentelella_master');?>/build/js/custom.min.js"></script>
  </body>
</html>

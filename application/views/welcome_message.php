<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $project_name;?> | <?php echo $title;?></title>

    <?php
        foreach ($css as $file)
        {
            echo "<link href=\"$file\" rel=\"stylesheet\">\n";
        }
        echo "\n\n";
        if ( ! is_null($extra_css) )
        {
            if( is_array($extra_css) )
            {
                foreach ($extra_css as $file)
                {
                    echo "<link href=\"$file\" rel=\"stylesheet\">\n";
                }
            }
        }
    ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">


            <?php $this->load->view('inc/sidebar_menu')?>


          </div>
        </div>

        <?php $this->load->view('inc/top_menu');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $page_title?></h3>
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
                    <h2><?php echo ( ! is_null($title)) ? $title : '';?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <?php if ($collapse):?>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <?php endif;?>
                    <?php if($settings):?>
                        <?php if (is_array($setting_actions)):?>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <?php foreach ($setting_actions as $action):?>
                              <li><a href="<?php echo $action['url']?>"><?php echo $action['action']?></a></li>
                            <?php endforeach;?>
                            </ul>
                          </li>
                        <?php endif;?>
                    <?php endif;?>
                      <?php if ($close):?>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                      <?php endif;?>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
    
                      <?php echo (isset($content)) ? $content : 'Add content to the page';?>
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

    <?php
        foreach ($js as $file)
        {
            echo "<script src=\"$file\"></script>\n";
        }
        echo "\n\n";
        if ( ! is_null($extra_js) )
        {
            if( is_array($extra_js) )
            {
                foreach ($extra_js as $file)
                {
                    echo "<script src=\"$file\"></script>\n";
                }
            }
        }
    ?>
  </body>
</html>

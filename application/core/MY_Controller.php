<?php
/**
* Name:  Gentelella
*
* Version: 1.0.0
*
* Author: Pedro Ruiz Hidalgo
*		  ruizhidalgopedro@gmail.com
*         @pedroruizhidalg
*
* Location: application/core/MY_Controller.php
*
* Created:  2018.02.20
*
* Description:  This is for all controllers (almost).
*
* Requirements: PHP5 or above
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

Class MY_Controller extends CI_Controller
{
    protected $gentelella   = array();
    protected $css          = array();
    protected $extra_css    = NULL;
    protected $js           = array();
    protected $extra_js     = NULL;

    protected $collapse         = TRUE;
    protected $settings         = TRUE;
    protected $close            = TRUE;

    protected $setting_actions = array();

    protected $page_title;
    protected $project_name;
    protected $title            = NULL;

    protected $controller_name;
    protected $action_name;
    protected $previous_controller_name;
    protected $previous_action_name;



    /**
    * class Constructor
    *
    * @param void
    * @return void
    **/
    function __construct()
    {
        parent::__construct();

        /*
        | are we logged? to login if not
        */
        $this->load->add_package_path(APPPATH.'third_party/ion_auth');
        $this->load->library('ion_auth');
        if(! $this->ion_auth->logged_in() ) redirect(base_url('auth/login/action.html'),'refresh');

        /*
        | full path to gentelella VARIABLES
        */
        $base = base_url();

        foreach ($this->config->item('gentelella') as $key => $value)
        {
            $this->gentelella[$key] =   $base. $value;
        }

        if ( ! is_loaded('session') ) $this->load->library('session');

        /**
        * Author: this part is of Ben Edmunds
        **/

        //save the previous controller and action name from session
        $this->previous_controller_name = $this->session->flashdata('previous_controller_name');
        $this->previous_action_name     = $this->session->flashdata('previous_action_name');

        //set the current controller and action name
        $this->controller_name          = $this->router->fetch_directory() . $this->router->fetch_class();
        $this->action_name              = $this->router->fetch_method();

        $this->load_defaults();
    }


    /**
    * class Destructor
    *
    * @param void
    * @return void
    **/
    public function __destruct()
    {
        //save the controller and action names in session

        $this->session->set_flashdata('previous_controller_name', $this->previous_controller_name);
        $this->session->set_flashdata('previous_action_name', $this->previous_action_name);
    }

    /**
    * set this->extra_css
    *
    * @param array
    * @return void
    **/
    function set_extracss($array)
    {
        $this->extra_css=$array;
    }

    /**
    * set this->extra_css
    *
    * @param array
    * @return void
    **/
    function set_extrajs($array)
    {
        $this->extra_js=$array;
    }

    /**
    * load defaults $this->css and $this->js
    *
    * @param void
    * @return void
    **/
    function load_defaults()
    {
        $this->css=array(
            "{$this->gentelella['vendors']}bootstrap/dist/css/bootstrap.min.css",
            "{$this->gentelella['vendors']}font-awesome/css/font-awesome.min.css",
            "{$this->gentelella['vendors']}nprogress/nprogress.css",
            "{$this->gentelella['build']}css/custom.min.css"
        );

        $this->js=array(
            "{$this->gentelella['vendors']}jquery/dist/jquery.min.js",
            "{$this->gentelella['vendors']}bootstrap/dist/js/bootstrap.min.js",
            "{$this->gentelella['vendors']}fastclick/lib/fastclick.js",
            "{$this->gentelella['vendors']}nprogress/nprogress.js",
            "{$this->gentelella['build']}js/custom.min.js"
        );

        $this->project_name = $this->config->item('project_name');
    }

    /**
    * set this->page_title
    *
    * @param string
    * @return void
    **/
    function set_pagetitle($title)
    {
        $this->page_title=$title;
    }

    /**
    * set this->$setting_actions
    *
    * $array    = array(
    *   array('action'=>'go to this page','url'=>'https...'),
    * );
    *
    * @param array
    * @return void
    **/
    function set_setting_actions($array)
    {
        if ( $this->settings ) $this->setting_actions  = $array;
    }

    /**
    * render a view
    *
    * @param string
    * @param bool
    * @return mixed
    **/
    function render($view,$content=NULL,$return_string=FALSE)
    {
        $view=$this->load->view($view,array(
            'project_name'      =>  $this->project_name,
            'page_title'        =>  $this->page_title,
            'collapse'          =>  $this->collapse,
            'settings'          =>  $this->settings,
            'close'             =>  $this->close,
            'setting_actions'   =>  $this->setting_actions,
            'css'               =>  $this->css,
            'extra_css'         =>  (! is_null($this->extra_css) ) ? $this->extra_css : NULL,
            'title'             =>  $this->title,
            'content'           =>  $content,
            'js'                =>  $this->js,
            'extra_js'          =>  (! is_null($this->extra_js) ) ? $this->extra_js : NULL,
        ));
    }



}




/** this ends this file
* application/core/MY_Controller.php
*/

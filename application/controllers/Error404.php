<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Error404
*
* Version: 1.0.0
*
* Author: Pedro Ruiz Hidalgo
*		  ruizhidalgopedro@gmail.com
*         @pedroruizhidalg
*
* Location: application/controllers/Error404.php
*
* Created:  2018-02-23
*
* Description:  Routing this on Error 404.
*
* Requirements: PHP5 or above
*
*/
class Error404 extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->output->set_status_header('404');
        $data['content'] = 'error_404'; // View name
        $this->load->view('inc/error404',$data); //loading in my template
    }
}



/** this ends this file
* application/controllers/Error404.php
*/

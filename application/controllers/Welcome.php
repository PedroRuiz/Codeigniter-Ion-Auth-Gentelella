<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Welcome.php
*
* Version:
*
* Author: Pedro Ruiz Hidalgo
*		  ruizhidalgopedro@gmail.com
*         @pedroruizhidalg
*
*		  Coding the world since 1983!
*
* Location: application/controllers/Welcome.php
*
* Created:  2018-03-01
* (yyyy-mm-dd)
*
* Description:
*
* Requirements: PHP7 or above
*
*/

class Welcome extends MY_Controller
{
    private $total_users;
    private $users_week_percent;
    private $users_this_week;

    private $percent_mask       = '%3.2f';

    private $class_positive     = 'green';
    private $class_negative     = 'red';

	function __construct()
    {
        parent::__construct();
        $this->total_users          =   18;
        $this->users_this_week      =   4;
        $this->users_week_percent   =  (100 * $this->users_this_week) / $this->total_users;
    }

	public function index()
	{
        $this->title="It goes!";
        $this->settings=FALSE;
        $this->set_extra_data(array(
            'total_users'           =>  $this->total_users,
            'users_this_week'       =>  sprintf($this->percent_mask,$this->users_week_percent),
            'users_this_week_class' =>  ($this->users_week_percent > 0) ? $this->class_positive : $this->class_negative,
        ));
        $this->render('welcome_message');
        /*
        $this->render('welcome_message','<div class="col-md-12 col-sm-12 col-xs-12">
          <object data="test.pdf" type="application/pdf" width="100%" height="1500">
              alt : <a href="test.pdf">test.pdf</a>
          </object>
      </div>');
      */
	}
}

/** this ends this file
* application/controllers/Welcome.php
*/

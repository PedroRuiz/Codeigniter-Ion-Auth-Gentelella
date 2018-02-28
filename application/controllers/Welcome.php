<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
        $this->title="It goes!";
        $this->settings=FALSE;
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

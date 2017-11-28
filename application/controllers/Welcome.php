<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public $layout = 'admin';

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

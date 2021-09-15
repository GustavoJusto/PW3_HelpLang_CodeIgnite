<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->lang;
	}

	public function index()
	{
		if(isset($_GET['lang'])){
			$this->lang->load('login', $_GET['lang']);
		}else{
			$this->lang->load('login');
		}

		$this->load->view('login', [
			'lang' => $this->lang,
		]);
	}
}

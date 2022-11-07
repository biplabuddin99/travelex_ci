<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AdminController {

	public function index()
	{
		$data['page']="dashboard";
		$this->load->view('app',$data);
	}
}

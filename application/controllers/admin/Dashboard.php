<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data['page_title']       = 'Dashboard';

		$this->load->view('backend/dashboard/index', $data);
	}
}

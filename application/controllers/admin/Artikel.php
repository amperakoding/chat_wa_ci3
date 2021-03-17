<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	
	public function tambah()
	{
    $data['page_title']       = 'Tambah Data';

		$this->load->view('backend/artikel/tambah', $data);
	}
}

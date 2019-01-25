<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {
Var $merek;

	public function index()
	{
		# code...
		$this->load->view('v_coba2');
	}
	public function tampil($value='')
	{
		# code...
		$name = $this->input->post('inputan');
		echo $name;
	}

}

/* End of file baru.php */
/* Location: ./application/controllers/baru.php */
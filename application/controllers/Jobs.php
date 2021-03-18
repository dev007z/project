<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function index()
	{
		$this->load->view('dash/add_job');
        
	}

}

/* End of file Jobs.php */
/* Location: ./application/controllers/Jobs.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

    //create a constructor to load Jobs_model model file
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jobs_Model');
        
    }
    
    // default function to load add_job view
	public function index()
	{
		$this->load->view('dash/add_job');
        
	}

    // function for adding/creating jobs
    public function add_job()
    {
        // if button is clicked
        if ($this->input->post('add_jobBtn')) 
        {
            // set form fields to variables
            $j_name = $this->input->post('j_name');

            // save variables as array
            $job_data = array(
                'j_name' => $j_name,
            );

            $this->Jobs_Model->add_job($job_data);

            echo "Success";
        }
    }

}

/* End of file Jobs.php */
/* Location: ./application/controllers/Jobs.php */
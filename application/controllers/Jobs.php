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

    public function viewJobs()
    {
        $this->load->view('dash/view_jobs');
        
    }

    // function for adding/creating jobs
    public function addJob()
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

            redirect('jobs/viewJobs','refresh');
        }
    }

    public function updateJob($j_id)
    {
        $this->load->view('dash/update_job', $j_id);
        
    }

}

/* End of file Jobs.php */
/* Location: ./application/controllers/Jobs.php */
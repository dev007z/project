<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employees_Model');
        
    }
    

    public function index()
    {
        $this->load->view('dash/view_emp');
        
    }

    public function addEmployee()
    {
        $this->load->view('dash/add_employee');
        
    }

    public function addEmp_process()
    {
        if ($this->input->post('add_empBtn')) {
            // set form fields to variables
            $e_name = $this->input->post('e_name');
            $e_email = $this->input->post('e_email');
            $e_phone = $this->input->post('e_phone');
            $e_job = $this->input->post('e_job');

            // save variables as array
            $emp_data = array(
                'e_name' => $e_name,
                'e_email' => $e_email,
                'e_phone' => $e_phone,
                'e_job' => $e_job,
            );

            $this->Employees_Model->insert_emp($emp_data);
            
            redirect('employees','refresh');
            
        }
    }
}

/* End of file Employees.php */
/* Location: ./application/controllers/Employees.php */
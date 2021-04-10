<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{

    public function index()
    {
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

            echo "<pre>";
            print_r($emp_data);
            echo "</pre>";
        }
    }
}

/* End of file Employees.php */
/* Location: ./application/controllers/Employees.php */
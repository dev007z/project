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
}

/* End of file Employees.php */
/* Location: ./application/controllers/Employees.php */
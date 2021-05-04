<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employees_Model');
        $this->load->model('Jobs_Model');
        $this->load->helper(array('form', 'url'));
    }
    

    public function index()
    {
        $this->load->view('dash/view_emp');
    }

    public function singleEmployee($e_id)
    {
        $this->load->view('dash/single_emp', $e_id);
        
    }

    public function addEmployee()
    {
        $this->load->view('dash/add_emp');
        
    }
    
    public function addEmp_process()
    {
        if ($this->input->post('add_empBtn')) {
            // set form fields to variables
            $e_name = $this->input->post('e_name');
            $e_email = $this->input->post('e_email');
            $e_phone = $this->input->post('e_phone');
            $e_job = $this->input->post('e_job');
            $e_city = $this->input->post('e_city');

            // save variables as array
            $emp_data = array(
                'e_name' => $e_name,
                'e_email' => $e_email,
                'e_phone' => $e_phone,
                'e_job' => $e_job,
                'e_city' => $e_city
            );

            $this->Employees_Model->insert_emp($emp_data);

            $this->db->where('j_name', $e_job);
            $this->db->update('jobs', array('j_status' => '0'));

            $this->load->view('dash/view_emp');
        }
    }

    public function updateEmployee($e_id)
    {
        $this->load->view('dash/update_emp', $e_id);
    }

    public function updateEmp_process( $e_id )
    {
        if ($this->input->post('update_empBtn')) {
            // set form fields to variables
            $e_name = $this->input->post('e_name');
            $e_email = $this->input->post('e_email');
            $e_phone = $this->input->post('e_phone');
            $e_job = $this->input->post('e_job');
            $e_city = $this->input->post('e_city');

            // save variables as array
            $emp_data = array(
                'e_name' => $e_name,
                'e_email' => $e_email,
                'e_phone' => $e_phone,
                'e_job' => $e_job,
                'e_city' => $e_city
            );

            
            $this->db->where('e_id', $e_id);
            $this->db->update('employees', $emp_data);
            redirect('employees/singleEmployee/' . $e_id,'refresh');
        }
    }

    public function deleteEmployee( $e_id )
    {
        $this->db->where('e_id', $e_id);
        $this->db->delete('employees');
        echo "<script>
        
        alert('Employee deleted successfully!')

        </script>";
        $this->load->view('dash/view_emp');
        
    }

}

/* End of file Employees.php */
/* Location: ./application/controllers/Employees.php */
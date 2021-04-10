<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employees_Model extends CI_Model {

	public function insert_emp( $emp_data )
    {
        $this->db->insert('employees', $emp_data);
        
    }

}

/* End of file Employees_Model.php */
/* Location: ./application/models/Employees_Model.php */
<?php 
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Home extends CI_Controller
{
    //create construct to load model "Users" for login/registration process
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        
    }
    

    public function index(){
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }

    public function login(){
        if ($this->input->post('u_login')) {
            // get form data and declare as variables
            $name = $this->input->post('u_name');
            // store password as encrypted using md5()
            $pass = md5($this->input->post('u_pass'));
            //save details in array 'user_data'
            $user_data = array(
                'u_name' => $name,
                'u_pass' => $pass, 
            );

            //get list of users from database
            $users_list = $this->db->get_where('users', array('u_name' => $user_data['u_name']));
            //iterate through the list to check for user
            foreach ($users_list->result() as $user) {
                if ($user_data['u_name'] == $user->u_name && $user_data['u_pass'] == $user->u_pass) {
                    //login successful
                    echo "Login successful";
                }else {
                    //login failed
                    echo "<script>alert('Username or Password incorrect')</script>";
                    redirect('home', 'refresh');
                }
            }
            
            
        }else { 
            redirect('home','refresh');
        }
    }

    public function register(){
        $this->load->view('includes/header');
        $this->load->view('register');
        $this->load->view('includes/footer');
    }

    public function registration(){
        if ($this->input->post('u_reg')) {
            // get form data and declare as variables
            $email = $this->input->post('u_email');
            $name = $this->input->post('u_name');
            // store password as encrypted using md5()
            $pass = md5($this->input->post('u_pass'));
            //store details in array "user_data"
            $user_data = array(
                'u_email' => $email,
                'u_name' => $name,
                'u_pass' => $pass,
            );
            //pass the array to the insert_user function in Users model
            $this->Users->insert_user($user_data);
            redirect('home','refresh');
        } else {
            redirect('home', 'refresh');
        }
    }
}

 ?>
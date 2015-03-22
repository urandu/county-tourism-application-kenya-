<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {


    public function index()
    {
        //$this->load->view('welcome_message');
    }
    public function create_admin()
    {
        $role=$this->input->post('role');
        $names=$this->input->post('names');
        $password=$this->input->post('password');
        $sex=$this->input->post('sex');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $this->load->model('user_model');
        $this->user_model->create_user($role,$names,$password,$sex,$email,$phone);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
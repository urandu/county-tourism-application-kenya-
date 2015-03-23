<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {


    public function index()
    {
        //$this->load->view('welcome_message');
    }


    public function signup()
    {

        $this->load->view('signup');
    }

    public function create_user()
    {

        $role=2;
        $names=$this->input->post('names');
        $password=md5($this->input->post('password'));
        $sex=$this->input->post('sex');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $this->load->model('user_model');
        $validation=$this->user_model->validate($password,$email);
        if(!$validation)
        {

            $this->user_model->create_user($role,$names,$password,$sex,$email,$phone);
            $this->load->view('signin');
        }else{

            $data["error_message"]=true;
            $this->load->view('signup',$data);

        }


    }


    public function signin()
    {

        $this->load->view('signin');
    }

    public function validate()
    {
        $password=md5($this->input->post('password'));
        $email=$this->input->post('email');

        $validation=$this->user_model->validate($password,$email);
        if(!$validation)
        {
            $data["error_message"]=true;
            $this->load->view('signin',$data);
        }else
        {
            $validation=$validation[0];
            $newdata = array(
                'names'  => $validation->names,
                'email'     => $validation->email,
                'logged_in' => TRUE,
                'user_id' =>$validation->user_id
            );

            $this->session->set_userdata($newdata);
            redirect(base_url()."pins/");
        }

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
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

    public function signin_admin()
    {

        $this->load->view('signin_admin');
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
                'role'  => $validation->role,
                'email'     => $validation->email,
                'logged_in' => TRUE,
                'user_id' =>$validation->user_id
            );

            $this->session->set_userdata($newdata);
            redirect(base_url()."pins/");
        }

    }

    public function validate_admin()
    {
        $password=md5($this->input->post('password'));
        $email=$this->input->post('email');

        $validation=$this->user_model->validate($password,$email);
        if(!$validation)
        {
            $data["error_message"]=true;
            $this->load->view('signin_admin',$data);
        }else
        {
            $validation=$validation[0];
            if($validation->role==1)
            {
                $newdata = array(
                    'names'  => $validation->names,
                    'role'  => $validation->role,
                    'email'     => $validation->email,
                    'logged_in' => TRUE,
                    'user_id' =>$validation->user_id
                );

                $this->session->set_userdata($newdata);
                redirect(base_url());
            }else
            {
                $data["error_message"]=true;
                $this->load->view('signin_admin',$data);
            }

        }

    }


    public function logout()
    {

        $this->session->sess_destroy();
        redirect(base_url()."pins");
    }


    public function admin_logout()
    {

        $this->session->sess_destroy();
        redirect(base_url());
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
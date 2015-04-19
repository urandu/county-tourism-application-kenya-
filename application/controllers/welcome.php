<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_admin',
        'except' => array()
    );


	public function index()
	{
        $data['page_title']='Admin Panel';
		$this->load->view('admin_panel',$data);
	}

    public function new_destination()
    {
        $data['page_title']='New Destination';
        $this->load->view('new_destination',$data);
    }

    public function new_hotel()
    {
        $data['page_title']='New Hotel';
        $this->load->view('new_hotel',$data);
    }


    public function my_destinations()
    {
        $this->load->model('user_model');
        $destinations=$this->user_model->get_all_my_destinations($this->session->userdata('user_id'));
        $data['destinations']=$destinations;
        $data['page_title']='My Destinations';
        $this->load->view('my_destinations',$data);
    }

    public function my_hotels()
    {
        $this->load->model('user_model');
        $hotels=$this->user_model->get_all_my_hotels($this->session->userdata('user_id'));
        $data['hotels']=$hotels;
        $data['page_title']='My Hotels';
        $this->load->view('my_hotels',$data);
    }


    public function destination_bookings()
    {
        $data['page_title']='Destination Bookings';
        $this->load->view('',$data);
    }

    public function hotel_bookings()
    {
        $data['page_title']='Hotel ';
        $this->load->view('',$data);
    }

    public function settings()
    {
        $data['page_title']='';
        $this->load->view('',$data);
    }






}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
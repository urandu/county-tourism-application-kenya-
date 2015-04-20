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

    public function new_hotel_room($hotel_id)
    {
        $data['hotel_id']=$hotel_id;
        $data['page_title']='New Room';
        $this->load->view('new_hotel_room',$data);
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


    public function do_upload_hotel_room()
    {

        $config['upload_path'] = './files/';
        $config['allowed_types'] = 'pdf|jpg|png';
        $config['max_size']	= '5000';
        //$config['file_name']=md5(time()).".pdf";
        $config['overwrite']  = TRUE;
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('error', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            /*$alias=$this->upload->data()['file_name'];
            $title=$this->input->post('title');
            $this->load->model('magazine_model');
            $this->magazine_model->create($title,$alias);*/


            $image=$this->upload->data()['file_name'];
            $hotel_id=$this->input->post('hotel_id');
            $room_type=$this->input->post('room_type');
            $number_of_people=$this->input->post('number_of_people');
            $price=$this->input->post('price');
            $this->load->model('user_model');
            $this->user_model->create_room($hotel_id,$room_type,$number_of_people,$price,$image);
            redirect(base_url()."welcome/my_hotels");


        }
    }







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pins extends Im_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => 'is_logged_in',
        'except' => array()
    );

    public function index() {


        $data['page_title']='Kilifi County';
        $this->load->view('home',$data);

    }

    public function plan_trip()
    {

        $this->load->model('user_model');
        $destinations=$this->user_model->get_all_destinations();
        $data['destinations']=$destinations;
        $data['page_title']='Plan Trip';
        $this->load->view('plan_trip',$data);
    }
    public function map()
    {
        $data['page_title']='Map';
        $this->load->view('map',$data);
    }
    public function settings()
    {
        $data['page_title']='Settings';
        $this->load->view('settings',$data);
    }
    public function trips()
    {
        $data['page_title']='Trips';
        $this->load->view('trips',$data);
    }

    public function payments()
    {

        $data['page_title']='My Patients';
        $this->load->view('payments',$data);
    }
    public function bookings()
    {

        $data['page_title']='My Bookings';
        $this->load->view('bookings',$data);
    }



    //display pages with create forms.
    public function new_hotel()
    {
        $data['page_title']='New Hotel';
        $this->load->view('new_hotel',$data);
    }

    public function new_destination()
    {
        $data['page_title']='New Destination';
        $this->load->view('new_destination');
    }
    /////////////////////////////




    ///////////////////////////////all getters


    public function destinations()
    {
        $this->load->model('user_model');
        $destinations=$this->user_model->get_all_destinations();
        $data['destinations']=$destinations;
        $data['page_title']='Tour Destinations';
        $this->load->view('destinations',$data);
    }

    public function view_destination($destination_id)
    {
        $this->load->model('user_model');
        $destination=$this->user_model->get_destination($destination_id);
        $ratings=$this->user_model->get_destination_ratings($destination_id);
        $data['ratings']=$ratings;
        $data['destination']=$destination[0];
        $data['page_title']="Tour Destination";
        $this->load->view('view_destination',$data);
    }





    public function hotels()
    {
        $this->load->model('user_model');
        $hotels=$this->user_model->get_all_hotels();
        $data['hotels']=$hotels;
        $data['page_title']='Hotels';
        $this->load->view('hotels',$data);
    }

    public function view_hotel($hotel_id)
    {
        $this->load->model('user_model');
        $hotel=$this->user_model->get_hotel($hotel_id);
        $ratings=$this->user_model->get_hotel_ratings($hotel_id);
        $data['ratings']=$ratings;
        $data['hotel']=$hotel[0];
        $data['page_title']='Accommodation';
        $this->load->view('view_hotel',$data);
    }



    ///////////////////////////////end of getters
//all setters
    public function add_hotel()
    {
        $hotel_name=$this->input->post('hotel_name');
        $hotel_type=$this->input->post('hotel_type');
        $hotel_description=$this->input->post('hotel_description');
        $longitude=$this->input->post('longitude');
        $latitude=$this->input->post('latitude');
        $user_id=$this->input->post('user_id');
        $this->load->model('user_model');
        $this->user_model->create_hotel($hotel_type,$hotel_description,$longitude,$latitude,$user_id,$hotel_name);

    }



    public function add_room()
    {
        $hotel_id=$this->input->post('hotel_id');
        $room_type=$this->input->post('room_type');
        $number_of_people=$this->input->post('number_of_people');
        $price=$this->input->post('price');
        $this->load->model('user_model');
        $this->user_model->create_room($hotel_id,$room_type,$number_of_people,$price);

    }



    public function add_destination()
    {
        $destination_name=$this->input->post('destination_name');
        $destination_type=$this->input->post('destination_type');
        $destination_description=$this->input->post('destination_description');
        $price=$this->input->post('price');
        $longitude=$this->input->post('longitude');
        $latitude=$this->input->post('latitude');
        $user_id=$this->input->post('user_id');
        $this->load->model('user_model');
        $this->user_model->create_destination($destination_type,$destination_description,$price,$longitude,$latitude,$user_id,$destination_name);
    }


    public function add_activity()
    {
        $destination_id=$this->input->post('destination_id');
        $activity_description=$this->input->post('activity_description');
        $price=$this->input->post('price');
        $this->load->model('user_model');
        $this->user_model->create_activity($destination_id,$activity_description,$price);

    }



    public function add_rating()
    {
        $destination_id=$this->input->post('destination_id');
        $hotel_id=$this->input->post('hotel_id');
        $rate_type=$this->input->post('rate_type');
        $user_id=$this->input->post('user_id');
        $comment=$this->input->post('comment');
        $rating=$this->input->post('rating');
        $image=$this->input->post('image');
        $this->load->model('user_model');
        $this->user_model->create_rating($hotel_id,$destination_id,$rate_type,$user_id,$comment,$rating,$image);

    }



    public function add_hotel_booking()
    {
        $room_id=$this->input->post('room_id');
        $hotel_id=$this->input->post('hotel_id');
        $amount_to_be_paid=$this->input->post('amount_to_be_paid');
        $user_id=$this->input->post('user_id');
        $no_of_people=$this->input->post('no_of_people');
        $amount_paid=$this->input->post('amount_paid');
        $date_to=$this->input->post('date_to');
        $date_from=$this->input->post('date_from');
        $this->load->model('user_model');
        $this->user_model->create_hotel_booking($hotel_id,$room_id,$amount_to_be_paid,$no_of_people,$amount_paid,$user_id,$date_from,$date_to);

    }

    public function add_destination_booking()
    {
        $destination_id=$this->input->post('destination_id');
        $date_of_trip=$this->input->post('date_of_trip');
        $amount_to_be_paid=$this->input->post('amount_to_be_paid');
        $user_id=$this->input->post('user_id');
        $amount_paid=$this->input->post('amount_paid');
        $this->load->model('user_model');
        $this->user_model->create_destination_booking($destination_id,$amount_to_be_paid,$amount_paid,$user_id,$date_of_trip);

    }



    public function add_activity_booking()
    {
        $activity_id=$this->input->post('activity_id');
        $date_of_trip=$this->input->post('date_of_trip');
        $amount_to_be_paid=$this->input->post('amount_to_be_paid');
        $user_id=$this->input->post('user_id');
        $amount_paid=$this->input->post('amount_paid');
        $this->load->model('user_model');
        $this->user_model->create_activity_booking($activity_id,$amount_to_be_paid,$amount_paid,$user_id,$date_of_trip);

    }

    public function add_destination_rating($destination_id)
    {
        $rating=$this->input->post('rating');
        $comment=$this->input->post('comment');
        $user_id=$this->session->userdata('user_id');
        $this->load->model('user_model');
        $this->user_model->create_destination_rating($destination_id,$user_id,$rating,$comment);
        redirect(base_url()."pins/view_destination/".$destination_id);

    }

    public function add_hotel_rating($hotel_id)
    {
        $rating=$this->input->post('rating');
        $comment=$this->input->post('comment');
        $user_id=$this->session->userdata('user_id');
        $this->load->model('user_model');
        $this->user_model->create_hotel_rating($hotel_id,$user_id,$rating,$comment);
        redirect(base_url()."pins/view_hotel/".$hotel_id);

    }
//end of all setters


}

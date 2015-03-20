<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pins extends CI_Controller {


    public function index() {



    }

//all setters
    public function add_hotel()
    {
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
        $destination_type=$this->input->post('destination_type');
        $destination_description=$this->input->post('destination_description');
        $price=$this->input->post('price');
        $longitude=$this->input->post('longitude');
        $latitude=$this->input->post('latitude');
        $user_id=$this->input->post('user_id');
        $this->load->model('user_model');
        $this->user_model->create_destination($destination_type,$destination_description,$price,$longitude,$latitude,$user_id);
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
//end of all setters


}

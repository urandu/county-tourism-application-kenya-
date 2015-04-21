<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {



    public function create_activity($destination_id,$activity_description,$price)
    {
        $data=array(
            'destination_id'=>$destination_id,
            'activity_description'=>$activity_description,
            'price'=>$price
        );
        $this->db->insert('activities',$data);
    }




    public function create_activity_booking($activity_id,$amount_to_be_paid,$amount_paid,$user_id,$date_of_trip)
    {
        $data=array(
            'activity_id'=>$activity_id,
            'amount_to_be_paid'=>$amount_to_be_paid,
            'amount_paid'=>$amount_paid,
            'user_id'=>$user_id,
            'date_of_trip'=>$date_of_trip

        );
        $this->db->insert('activity_bookings',$data);
    }



    public function create_destination_booking($destination_id,$user_id,$date_of_trip,$number_of_people)
    {
        $data=array(
            'destination_id'=>$destination_id,
            'number_of_people'=>$number_of_people,
            'user_id'=>$user_id,
            'date_of_trip'=>$date_of_trip

        );
        $this->db->insert('destination_bookings',$data);
    }




    public function create_destination($destination_type,$destination_description,$price,$longitude,$latitude,$user_id,$destination_name,$image)
    {
        $data=array(
            'destination_type'=>$destination_type,
            'destination_description'=>$destination_description,
            'price'=>$price,
            'longitude'=>$longitude,
            'latitude'=>$latitude,
            'user_id'=>$user_id,
            'destination_name'=>$destination_name,
            'image'=>$image
        );
        $this->db->insert('destinations',$data);
    }

    public function get_all_destinations()
    {

        $result=$this->db->get('destinations');
        return $result->result();
    }

    public function get_rooms($hotel_id)
    {
        $this->db->where('hotel_id',$hotel_id);
        $result=$this->db->get('rooms');
        return $result->result();
    }


    public function get_all_my_destinations($user_id)
    {

        $this->db->where('user_id',$user_id);
        $result=$this->db->get('destinations');
        return $result->result();
    }


    public function get_destination($destination_id)
    {

        $this->db->where('destination_id',$destination_id);
        $result=$this->db->get('destinations');
        return $result->result();
    }

    public function get_destination_ratings($destination_id)
    {
        $this->db->where('destination_id',$destination_id);
        $this->db->order_by("destination_id", "asc");
        $result=$this->db->get('ratings');
        return $result->result();
    }



    public function get_all_hotels()
    {

        $result=$this->db->get('hotels');
        return $result->result();
    }


    public function get_all_my_hotels($user_id)
    {

        $this->db->where('user_id',$user_id);
        $result=$this->db->get('hotels');
        return $result->result();
    }

    public function get_hotel($hotel_id)
    {

        $this->db->where('hotel_id',$hotel_id);
        $result=$this->db->get('hotels');
        return $result->result();
    }

    public function get_hotel_ratings($hotel_id)
    {
        $this->db->where('hotel_id',$hotel_id);
        $this->db->order_by("hotel_id", "asc");
        $result=$this->db->get('ratings');
        return $result->result();
    }



    public function create_hotel($hotel_type,$hotel_description,$longitude,$latitude,$user_id,$hotel_name,$image)
    {
        $data=array(
             'hotel_type'=>$hotel_type,
             'hotel_description'=>$hotel_description,
             'longitude'=>$longitude,
             'latitude'=>$latitude,
             'user_id'=>$user_id,
            'hotel_name'=>$hotel_name,
            'image'=>$image
        );
        $this->db->insert('hotels',$data);
    }

    public function create_hotel_booking($hotel_id,$room_id,$no_of_people,$user_id,$date_from,$date_to,$no_of_rooms)
    {
        $data=array(
            'hotel_id'=>$hotel_id,
            'room_id'=>$room_id,
            'no_of_rooms'=>$no_of_rooms,
            'no_of_people'=>$no_of_people,
            'user_id'=>$user_id,
            'date_from'=>$date_from,
            'date_to'=>$date_to

        );
        $this->db->insert('hotel_bookings',$data);
    }





  /*  public function create_pin($pin_id,$longitude,$latitude,$user_id)
    {
        $data=array(
            'pin_id'=>$pin_id,
            'longitude'=>$longitude,
            'latitude'=>$latitude,
            'user_id'=>$user_id

        );
        $this->db->insert('pins',$data);
    }*/

    public function create_destination_rating($destination_id,$user_id,$rating,$comment='null',$image='default.png'){


        $data=array(
            'destination_id'=>$destination_id,
            'user_id'=>$user_id,
            'comment'=>$comment,
            'rating'=>$rating,
            'image'=>$image
        );
        $this->db->insert('ratings',$data);

    }

    public function create_hotel_rating($hotel_id,$user_id,$rating,$comment='null',$image='default.png'){


        $data=array(
            'hotel_id'=>$hotel_id,
            'user_id'=>$user_id,
            'comment'=>$comment,
            'rating'=>$rating,
            'image'=>$image
        );
        $this->db->insert('ratings',$data);

    }





    public function create_room($hotel_id,$room_type,$number_of_people,$price,$image){

        $data=array(
            'hotel_id'=>$hotel_id,
            'room_type'=>$room_type,
            'number_of_people'=>$number_of_people,
            'price'=>$price,
            'image'=>$image
        );
        $this->db->insert('rooms',$data);

    }




    public function create_user($role,$names,$password,$sex,$email,$phone){

        $data=array(
            'names'=>$names,
            'role'=>$role,
            'password'=>$password,
            'sex'=>$sex,
            'email'=>$email,
            'phone'=>$phone
        );
        $this->db->insert('users',$data);

    }


    public function validate($password,$email)
    {
        $this->db->where('password',$password);
        $this->db->where('email',$email);
        $result=$this->db->get('users');
        if($result->num_rows()>0)
        {
            return $result->result();
        }else
        {
            return false;
        }
    }


    public function get_hotel_bookings($user_id)
    {
        $this->db->where('user_id',$user_id);
        $result=$this->db->get('hotel_bookings');
        return $result->result();
    }

    public function get_destination_bookings($user_id)
    {
        $this->db->where('user_id',$user_id);
        $result=$this->db->get('destination_bookings');
        return $result->result();
    }




}

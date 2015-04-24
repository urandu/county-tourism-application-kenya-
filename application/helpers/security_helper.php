<?php
/**
 * Created by IntelliJ IDEA.
 * User: bildad
 * Date: 03/04/15
 * Time: 12:38
 */

function logged_in()
{
    $CI=get_instance();
    $info=$CI->session->userdata('logged_in');
    if(!$info)
    {
        return false;
    }else
    {
        return true;
    }
}


function admin()
{
    $CI=get_instance();
    $info=$CI->session->userdata('role');
    if(!$info)
    {
        return false;
    }else
    {
        if($info==1)
        {
            return true;
        }else
        {
            return false;
        }
    }
}


function get_destination_rating($destination_id)
{
    $CI=get_instance();
    $CI->db->select_avg('rating');
    $CI->db->where('destination_id',$destination_id);
    $query = $CI->db->get('ratings');
    return $query->result()[0]->rating;
}


function get_hotel_rating($hotel_id)
{
    $CI=get_instance();
    $CI->db->select_avg('rating');
    $CI->db->where('hotel_id',$hotel_id);
    $query = $CI->db->get('ratings');
    return $query->result()[0]->rating;
}


 function get_rooms($hotel_id)
{
    $CI=get_instance();
    $CI->db->where('hotel_id',$hotel_id);
    $result=$CI->db->get('rooms');
    return $result->result();
}


function get_user_name($user_id=-1)
{
    $CI=get_instance();

    if($user_id==-1)
    {
        $user_id=$CI->session->userdata('user_id');
    }
    $CI->db->where('user_id',$user_id);
    $query = $CI->db->get('users');
    return $query->result()[0]->names;
}


function get_hotel_name($hotel_id)
{
    $CI=get_instance();


    $CI->db->where('hotel_id',$hotel_id);
    $query = $CI->db->get('hotels');
    return $query->result()[0]->hotel_name;
}


function get_destination_name($destination_id)
{
    $CI=get_instance();


    $CI->db->where('destination_id',$destination_id);
    $query = $CI->db->get('destinations');
    return $query->result()[0]->destination_name;
}

function get_amount_owed()
{
    $CI=get_instance();


    $user_id=$CI->session->userdata('user_id');

    $CI->db->select_sum('amount_to_be_paid');
    $CI->db->where('user_id',$user_id);
    $CI->db->where('amount_paid',null);
    $query = $CI->db->get('destination_bookings');

    $a= $query->result()[0]->amount_to_be_paid;


    $CI->db->select_sum('amount_to_be_paid');
    $CI->db->where('user_id',$user_id);
    $CI->db->where('amount_paid',null);
    $query = $CI->db->get('hotel_bookings');
    $b=$query->result()[0]->amount_to_be_paid;


    return $a+$b;

}




function get_amount_paid()
{
    $CI=get_instance();


    $user_id=$CI->session->userdata('user_id');

   // $CI->db->select_sum('amount_to_be_paid');
    $CI->db->where('user_id',$user_id);
    $CI->db->where('amount_paid > 0');
    $query = $CI->db->get('destination_bookings');

    $a= $query->result();


    //$CI->db->select_sum('amount_to_be_paid');
    $CI->db->where('user_id',$user_id);
    $CI->db->where('amount_paid > 0');
    $query = $CI->db->get('hotel_bookings');
    $b=$query->result();


    return $a+$b;

}




function get_room_cost($room_id)
{
    $CI=get_instance();


    $CI->db->where('room_id',$room_id);
    $query = $CI->db->get('rooms');
    return $query->result()[0]->price;
}

function get_destination_cost($destination_id)
{
    $CI=get_instance();


    $CI->db->where('destination_id',$destination_id);
    $query = $CI->db->get('destinations');
    return $query->result()[0]->price;
}
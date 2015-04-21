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

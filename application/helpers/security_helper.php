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


function get_user_name($user_id)
{
    $CI=get_instance();

    $CI->db->where('user_id',$user_id);
    $query = $CI->db->get('users');
    return $query->result()[0]->names;
}
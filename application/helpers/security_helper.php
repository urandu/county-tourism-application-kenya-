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
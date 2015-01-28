<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {



/* `user_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `names` varchar(60) NOT NULL,
  `role` int(2) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,


`hotel_id` bigint(20) NOT NULL,
  `room_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(100) NOT NULL,
  `number_of_people` int(10) NOT NULL,
  `price` decimal(8,8) DEFAULT NULL,


`rating_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pin_id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,



CREATE TABLE IF NOT EXISTS `pins` (
  `pin_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `longitude` decimal(8,8) DEFAULT NULL,
  `latitude` decimal(8,8) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`pin_id`)
)



CREATE TABLE IF NOT EXISTS `hotel_bookings` (
  `booking_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `hotel_id` bigint(20) NOT NULL,
  `room_id` bigint(20) NOT NULL,
  `amount_to_be_paid` decimal(8,8) DEFAULT NULL,
  `no_of_people` int(20) DEFAULT NULL,
  `amount_paid` decimal(8,8) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `date_from` varchar(60) DEFAULT NULL,
  `date_to` varchar(60) DEFAULT NULL,
  `date_of_booking` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`)

*/

    public function create_hotel_booking($hotel_id,$room_id,$amount_to_be_paid,$no_of_people,$amount_paid,$user_id,$date_from,$date_to)
    {
        $data=array(
            'hotel_id'=>$hotel_id,
            'room_id'=>$room_id,
            'amount_to_be_paid'=>$amount_to_be_paid,
            'no_of_people'=>$no_of_people,
            'amount_paid'=>$amount_paid,
            'user_id'=>$user_id,
            'date_from'=>$date_from,
            'date_to'=>$date_to

        );
        $this->db->insert('hotel_bookings',$data);
    }





    public function create_pin($pin_id,$longitude,$latitude,$user_id)
    {
        $data=array(
            'pin_id'=>$pin_id,
            'longitude'=>$longitude,
            'latitude'=>$latitude,
            'user_id'=>$user_id

        );
        $this->db->insert('pins',$data);
    }

    public function create_rating($pin_id,$user_id,$comment,$rating,$image='default.png'){


        $data=array(
            'pin_id'=>$pin_id,
            'user_id'=>$user_id,
            'comment'=>$comment,
            'rating'=>$rating,
            'image'=>$image
        );
        $this->db->insert('ratings',$data);

    }




    public function create_room($hotel_id,$room_type,$number_of_people,$price){

        $data=array(
            'hotel_id'=>$hotel_id,
            'room_type'=>$room_type,
            'number_of_people'=>$number_of_people,
            'price'=>$price
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




    public function change_read_status($message_id,$user_id)
    {
        $data = array(
            'read_status' => 1

        );
        $array = array('message_id' => $message_id, 'message_receiver' => $user_id);

        $this->db->where($array);
        $this->db->update('messages', $data);


    }
    public function receiver_delete($message_id,$user_id)
    {
        $data = array(
            'receiver_delete_status' => 1

        );
        $array = array('message_id' => $message_id, 'message_receiver' => $user_id);

        $this->db->where($array);
        $this->db->update('messages', $data);
    }

    public function sender_delete($message_id,$user_id)
    {
        $data = array(
            'sender_delete_status' => 1

        );
        $array = array('message_id' => $message_id, 'message_sender' => $user_id);

        $this->db->where($array);
        $this->db->update('messages', $data);
    }

    public function insert($subject="no subject",$content="no content",$sender="1",$receiver="2")
    {
        $data=array(
            'message_subject'=>$subject,
            'message_content'=>$content,
            'message_sender'=>$sender,
            'message_receiver'=>$receiver
        );
        $this->db->insert('messages',$data);
    }

    public function get_one($id=1)
    {


        $this->db->where("message_id =".$id);
        $this->db->where("receiver_delete_status = 0");
        $query=$this->db->get('messages');
        return $query->result();
    }

    public function get_all_received($user_id)
    {

        $this->db->group_by(array("date DESC"));
        $query=$this->db->get_where('messages',array('message_receiver'=>$user_id,'receiver_delete_status'=>0));
        return $query->result();
    }

    public function get_all_sent($user_id)
    {
        $this->db->group_by(array("date DESC"));
        $query=$this->db->get_where('messages',array('message_sender'=>$user_id,'sender_delete_status'=>0));
        return $query->result();
    }


}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message_model extends CI_Model {


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

<?php

class User_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function register_user($user)
    {
        $this->db->insert('user', $user);

    }

    public function add_user($users)
    {
        $this->db->insert('user', $users);

    }

    public function get_users()
    {

        if ($query = $this->db->get('user')) {
            return $query->result_array();
        } else {
            return null;
        }
    }

    public function login_user($email, $pass)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email', $email);
        $this->db->where('user_password', $pass);
        if ($query = $this->db->get()) {
            return $query->row_array();

        } else {
            return false;
        }
    }

    public function email_check($email)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email', $email);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    //Lấy danh sách user
    function show_users()
    {
        $query = $this->db->get('user');
        $query_result = $query->result();
        return $query_result;
    }

    // Load du lieu dua vao id
    function show_user_id($data)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    // update vao csdl
    function update_user_id($user_id, $data)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('user', $data);
       /* $this->db->update('user', $data,array('user_id'=>$user_id));*/
    }
    //delete csdl
    public function delete($user_id){
        $this->load->database();
        $this->db->where('user_id',$user_id);
        $this->db->delete('user');
        return true;
    }

}


?>
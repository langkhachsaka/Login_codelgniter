<?php

class User extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');
        $this->load->database();

    }

    public function index()
    {
        $this->load->view("register.php");
    }

// Đăng kí tài khoản người dùng
    public function register_user()
    {
        $user = array(
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_password' => md5($this->input->post('user_password')),
            'user_age' => $this->input->post('user_age'),
            'user_mobile' => $this->input->post('user_mobile'),
            'user_role' => $this->input->post('user_role')
        );
        print_r($user);
        //check địa chỉ email
        $email_check = $this->user_model->email_check($user['user_email']);

        if ($email_check) {
            $this->user_model->register_user($user);
            $this->session->set_flashdata('success_msg', 'Đăng kí thành công');
            redirect('user/login_view');

        } else {

            $this->session->set_flashdata('error_msg', 'Thất bại!!!');
            redirect('user');
        }

    }

    public function add()
    {
        $this->load->view('add_user');
    }

    public function add_user()
    {
        $users = array(
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_password' => md5($this->input->post('user_password')),
            'user_age' => $this->input->post('user_age'),
            'user_mobile' => $this->input->post('user_mobile'),
            'user_role' => $this->input->post('user_role')
        );
        /* print_r($users);*/
        //check địa chỉ email
        $email_check = $this->user_model->email_check($users['user_email']);

        if ($email_check) {
            $this->user_model->add_user($users);
            $this->session->set_flashdata('success_msg', 'Đăng kí thành công');
            $data['users'] = $this->user_model->get_users();
            $this->load->view('user_profile.php', $data);

        } else {

            $this->session->set_flashdata('error_msg', 'Thất bại!!!');
            $this->load->view('add_user');

        }

    }

    public function login_view()
    {
        if (isset($_SESSION["username"])) {
            $this->user_profile();
        } else {
            $this->load->view("login.php");
        }
    }

    function login_user()
    {
        $user_login = array(
            'user_email' => $this->input->post('user_email'),
            'user_password' => md5($this->input->post('user_password'))

        );
        // login đúng thì sẽ --> trang admin
        $data = $this->user_model->login_user($user_login['user_email'], $user_login['user_password']);
        if ($data) {
            $_SESSION["username"] = $user_login['user_email'];
            $data['users'] = $this->user_model->get_users();
            $this->load->view('user_profile.php', $data);
        } // login sai thì sẽ --> trang login và báo lỗi
        else {
            $this->session->set_flashdata('error_msg', 'Thất bại!!!');
            $this->load->view("login.php");

        }


    }

    function user_profile()
    {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('user_profile.php', $data);

    }

    public function user_logout()
    {
        $this->session->sess_destroy();
        redirect('user/login_view', 'refresh');
    }

    public function layout()    {

        $this->load->view('layout');
    }

// controller update
    public function update()
    {
        $user_id = $_GET    ['user_id'];
        $data['users'] = $this->user_model->show_user_id($user_id);
        $this->load->view('update_user', $data);
    }

    public function update_user_id()
    {
        $user_id = $this->input->post('user_id');
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_password' => md5($this->input->post('user_password')),
            'user_age' => $this->input->post('user_age'),
            'user_mobile' => $this->input->post('user_mobile'),
            'user_role' => $this->input->post('user_role')
        );
        $this->user_model->update_user_id($user_id, $data);
        $this->user_model->show_user_id($user_id);
        $data['users'] = $this->user_model->get_users();
        $this->load->view('user_profile.php', $data);
    }

    public function delete()
    {
        $user_id = $this->input->get('user_id');
        if ($this->user_model->delete($user_id)) {
            $data['users'] = $this->user_model->get_users();
            $this->load->view('user_profile.php', $data);

        }
    }

    public function search_keyword()
    {
        $user_name = $this->input->post('user_name');
        $data['users'] = $this->user_model->search($user_name);
        $this->load->view('user_profile.php', $data);
    }
    public function delete_check(){
        foreach ($_POST['user_id'] as $user_id){
            $this->user_model->delete($user_id);
        }
        return redirect('user/user_profile');
    }
}

?>
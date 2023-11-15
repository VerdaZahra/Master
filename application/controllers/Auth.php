<?php

class Auth Extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->model('User_model');
        $this->load->library('session');

    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->
        get_user_by_username($username);

        if ($user && password_verify
        ($password, $user->password)) (
            $user_data = array(
                'user_id' => $user->id,
                'username' => $user->username,
            );
            $this->session->set_userdata($user_data);

            redirect('user');
        )else {
            $this->session->set_flashdata('error','Invalid username or password');
            redirect('auth/login');
        }
    }
    public funnction logout(){
        $this->session->session_destroy();
        redirect('auth/login');
    }
}

?>
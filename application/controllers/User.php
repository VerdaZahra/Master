<?php
class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index(){
        $data['users'] = $this->User_model->get_user();
        $this->load->view('User_view', $data);
    } 
}

?>
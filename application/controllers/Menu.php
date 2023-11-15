<?php
class Menu extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Menu_model');
    }
    public function index(){
        $data['menus'] = $this->Menu_model->get_menu();
        $this->load->view('Menu_view', $data);
    } 
}
?>
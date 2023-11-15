<?php
class Orders extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
    }
    public function index(){
        $data['order'] = $this->Order_model->get_order();
        $this->load->view('Order_view', $data);
    } 
}
?>
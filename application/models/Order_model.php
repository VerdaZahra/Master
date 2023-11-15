<?php
class order_model extends CI_Model{
public function __construct()
{
    parent::__construct();
    $this->load->database ();
    }

public function get_order(){
    $query = $this->db->get('orders');
    return $query->result();
}
public function create_menu($data){
    $this->db->insert_id();
}
public function update_menu($id, $data){
    $this->db->where('id', $id);  
    $this->db->update('orders', $data);
}
}
?> 
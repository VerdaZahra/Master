<?php
class Menu_model extends CI_Model{
public function __construct()
{
    parent::__construct();
    $this->load->database ();
    }

public function get_menu(){
    $query = $this->db->get('menu');
    return $query->result();
}
public function create_menu($data){
    $this->db->insert_id();
}
public function update_menu($id, $data){
    $this->db->where('id', $id);  
    $this->db->update('menu', $data);
}
}
?> 
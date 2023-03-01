<?php

class Country extends CI_Model{
    public function addQuery($arr){
        $this->db->set($arr);
        $this->db->insert('country');
    }
    
    public function select_all(){
        $this->db->select('*');
        $this->db->from('country');
        return $this->db->get()->result();
    }

    public function Delete($code){
        $this->db->where('Code', $code);
        $this->db->delete('country');
        
    }
    public function Update($data, $code){
        $this->db->where('code', $code);
        $this->db->update('country', $data);

    }

}


?>
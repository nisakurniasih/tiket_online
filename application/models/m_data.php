<?php
class M_data extends CI_Model{

    function input_data($data, $table) {
        $this->db->insert($table,$data);
    
    }

    function tampil_data(){
        return $this->db->get('penumpang');
    }

    Function edit_data($where. $table) {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
?>
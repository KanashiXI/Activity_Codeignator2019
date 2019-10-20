<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities_model extends CI_Model {

    public function get_all(){
        // select * from tbl_activities where_id=12;
        // $this->db->select('');
        // $this->db->from('tbl_activities');
        // $this->db->join('', '..=..');
        // $this->db->where('');
        // $this->db->where('tbl_activities', 12);
        
        $result = $this->db->get('tbl_activities');
        // return $result->row(); //one data use with where
        return $result->result(); //many data
    }

    public function insert($data){
        $result = $this->db->insert('tbl_activities', $data);
        return $result;
    }

    public function update($data){
        $this->db->where('activty_id', $data['activity_id']);
        $result = $this->db->update('tbl_activities', $data);
        return $result;
    }
}
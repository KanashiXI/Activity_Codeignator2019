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
}
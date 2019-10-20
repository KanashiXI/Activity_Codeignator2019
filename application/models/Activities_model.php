<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities_model extends CI_Model {
    private $tb = 'tbl_activities';

    public function get_all(){
        // select * from tbl_activities where_id=12;
        // $this->db->select('');
        // $this->db->from('tbl_activities');
        // $this->db->join('', '..=..');
        // $this->db->where('');
        // $this->db->where('tbl_activities', 12);
        
        $result = $this->db->get($this->tb);
        // return $result->row(); //one data use with where
        return $result->result(); //many data
    }

    public function insert($data){
        $result = $this->db->insert($this->tb, $data);
        return $result;
    }

    public function update($data){
        $this->db->where('activity_id', $data['activity_id']);
        $result = $this->db->update($this->tb, $data);
        return $result;
    }

    public function get($data){
       
        $this->db->where('activity_id',$data);
        $result = $this->db->get($this->tb);
        return $result->row(); 
    }

    public function delete($activity_id){
        $result = $this->db->delete($this->tb, 
                    array('activity_id' => $activity_id));
        return $result;
    }

}
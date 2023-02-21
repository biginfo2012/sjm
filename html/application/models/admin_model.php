<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{ 
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function addNews($data) {
        $state = $this->db->insert('tbl_news', $data);
    }
    function addQuery($data) {
        $state = $this->db->insert('tbl_query', $data);
    }    
    function deletNews($data) {
        $date = substr($data->date, 1, strlen($data->date)-1);
        $time = substr($data->time, 1, strlen($data->time)-1);
        $title = substr($data->title, 1, strlen($data->title)-1);

        $this->db->where('date',$date);
        $this->db->where('time',$time);
        $this->db->where('title',$title);
        $this->db->delete('tbl_news');
    }
    function editNews($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('tbl_news', $data);
    }
    function getallnews($state=NULL) {
        $this->db->select('*');
        $this->db->order_by('date','desc');
        if($state != NULL) {
            $this->db->where('state',$state);
        }
        $query = $this->db->get('tbl_news');
        $result = $query->result();

        return $result;
    }
    function getallquerys($state=NULL) {
        $this->db->select('*');
        $this->db->order_by('date','desc');
        $query = $this->db->get('tbl_query');
        $result = $query->result();

        return $result;
    }
    function setState($state, $id) {
        $this->db->where('id', $id);
        $data = array('state' => $state,);
        $this->db->update('tbl_news', $data);
    }
    function increase_count() {
        $this->db->set('count', 'count + 1' , FALSE);
        $this->db->where('id','1'); 
        $this->db->update('tbl_app'); 
    }
}
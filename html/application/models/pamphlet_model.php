<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pamphlet_model extends CI_Model
{
	function addNewPamphlet($post)
    {
      
      $this->db->trans_start();
      $this->db->insert('tbl_pampbell',$post);
      $insert_id = $this->db->insert_id();
      $this->db->trans_complete();
      return $insert_id;
    }

    function getPam($id)
    {
    	$this->db->select('*');
      	$this->db->from('tbl_pamp');   
      	$this->db->where('id3', $id); 
      	$query = $this->db->get();        
      	$array = $query->result();

      return $array;      
    }

    function getPam1($id)
    {
    	$this->db->select('*');
      	$this->db->from('tbl_pamp');   
      	$this->db->where('id', $id); 
      	$query = $this->db->get();        
      	$array = $query->result();

      return $array;      
    }

    function pamphletListing()
    {
    	$this->db->select('*');
      $this->db->from('tbl_pampbell');    
      $query = $this->db->get();        
      $array = $query->result();

      return $array;      

    //   $this->db->select('Base.name');
    //   $this->db->from('tbl_pamphlet');
    //   $this->db->join('tbl_prefecture_2 Base', 'Base.id=des');
    //   $query = $this->db->get();        
    //   $array_temp = $query->result();
      
    // if(sizeof($array_temp)>0)
    // {
    //   for($i=0;$i<sizeof($array);$i++)
    //   {
    //     $array[$i]->des_name = $array_temp[$i]->name;
    //   }
    // }

    // return $array;

   
    }

    function deletePamphlet($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('tbl_pampbell');      
      if ($this->db->_error_message()) {
          $result = '3';
      } else if (!$this->db->affected_rows()) {
          $result = '2';
      } else if($this->db->affected_rows()){
          $result = '1';
      }

      return $result;
    }


    function updateAll($id,$data)
    {
      $this->db->where('id', $id);
      $sqldata->qr=$data;   
      $this->db->update('tbl_pampbell', $sqldata);        
    }

    function getPamphlet($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_pampbell');  
      $this->db->where('id',$id);    
    
      $query = $this->db->get();        
      return $query->result();
    }

    function updatePamphlet($id,$pamphletInfo)
    {

      $insdert =  $this->db->insert_id();
      $this->db->where('id', $id);
   
      $this->db->update('tbl_pampbell', $pamphletInfo);        
      if ($this->db->affected_rows())
      {
        return '1';
      }
      else{
        return '0';
      }
      
    }

    function getRegion($con)
    {
      $this->db->select('*');
      $this->db->from('tbl_prefecture_2');  
      $this->db->where($con,'Y');    
      $query = $this->db->get();        
      return $query->result();
    }

    function getAutoId()
    {
      $next = $this->db->query("SHOW TABLE STATUS LIKE 'tbl_pampbell'");
      $next = $next->row(0);     
      return  $next->Auto_increment;
    }

    
}
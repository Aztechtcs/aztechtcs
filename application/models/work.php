<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 */


class work extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'UTC');
    }
    
	function update_endtasktime($id){
		$data['end_time']=date("y-m-d h:i:s");
		$data['complete']=1;
		$this->db->where('id', $id);
		$this->db->update('work',$data);	
	}
	
	function add($d){
		$data['date']=date("y-m-d");
		$data['start_time']=date("y-m-d h:i:s");
		//$data['end_time']='';
		$data['work']=$d['id'];
		$this->db->insert('work',$data);
	}
	
	function completework(){
		$where = "complete = 1";
		$re=$this->db->get_where('work',array("complete" => 0));
		return $re->result();
	}
	
	function update($id){
		//$this->db->update();
	}
	
	
	
	
/* /*    function sms(){
        //$this->db->select('title, content, date');
         $query = $this->db->get('am1');
         return $query->result();
    }
    
    am1 (id, name , salry, eid[AI])
    public function insert($data){
            $str = $this->db->insert('am1', $data);
            echo $str;
        }
        
     public function delete($eid){
         $this->db->where('eid',$eid);
         $this->db->delete('am1');
         //$this->db->delete('am1',array('eid'=>$eid));
     } */
	 
	 
}
<?php
	class Institute_Model extends CI_Model{
		
		public function getSomeInstituteData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_institute');
			$this->db->where('status','0');
			$this->db->order_by('id','ASC');
			$this->db->Limit('12');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}

		public function getTotalInstituteData(){ //MODAL FOR HOME PAGE AMBULANCE amount....
			$this->db->select('*');
			$this->db->from('tb_institute');
			$this->db->where('status','0');

			$qresult  = $this->db->get();
			$result   = $qresult->num_rows(); 
			return $result;
		}

		public function getAllInstituteData(){ //MODAL FOR HOME PAGE..
			$this->db->select('*');
			$this->db->from('tb_institute');
			$this->db->where('status','0');
			$this->db->order_by('id','ASC');

			$qresult  = $this->db->get();
			$result   = $qresult->result(); 
			return $result;
		}


	}
?>
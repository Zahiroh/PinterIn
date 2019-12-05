<?php
class M_Quiz extends CI_Model
{
    function listquiz($dosen=1){
      $this->db->select('COURSE_ID');
      $this->db->distinct();
      $this->db->where('DOSEN_ID',$dosen);
      return $this->db->get('kuis_online');
    }
    function listsoal($course_id=1){
      $this->db->select('KUIS_ID,SOAL,JAWAB_A,JAWAB_B,JAWAB_C,JAWAB_D,KUNCI');
      $this->db->where('COURSE_ID',$course_id);
      return $this->db->get('kuis_online');
    }
    function insertsoal($data){
      $this->db->insert('kuis_online',$data);
    }
    function updatequiz($cid,$data){
      $this->db->where('KUIS_ID', $cid);
      $this->db->update('kuis_online', $data);
    }
    public function hapusquiz($cid){
  	  $this->db->delete('kuis_online', array('COURSE_ID' => $cid));
	}
    public function gantistatus($cid,$data){
      $this->db->where('COURSE_ID', $cid);
      $this->db->update('course', $data);
    }
}
?>

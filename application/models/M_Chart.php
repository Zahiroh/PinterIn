<?php    
class M_Chart extends CI_Model{
    function hitung_dosen(){
        $query = $this->db->query("SELECT * FROM chart");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function update_data(){
        $dosen = $this->db->count_all_results('dosen');
        $this->db->set('jumlah',$dosen);
        $this->db->where('id',1);
        $this->db->update('chart');
        $siswa = $this->db->count_all_results('siswa');
        $this->db->set('jumlah',$siswa);
        $this->db->where('id',2);
        $this->db->update('chart');
        $course = $this->db->count_all_results('course');
        $this->db->set('jumlah',$course);
        $this->db->where('id',3);
        $this->db->update('chart');
    }
}
?>
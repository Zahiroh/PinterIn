<?php
class M_Admin extends CI_Model
{

  function cari_user_admin($uname,$pass){
    return $this->db->get_where('admin',array('USERNAME_ADMIN' =>$uname,'PASSWORD_ADMIN'=>$pass));
  }

  function tampil_data(){
		$balik = $this->db->get('siswa')->result();
		return $balik;
	}

	function tampil_ranking(){
		$this->db->order_by('POIN_SISWA', 'DESC');
		$balik= $this->db->get('siswa')->result();
		return $balik;
	}

	function tampil_data_dosen(){
		$balik = $this->db->get('dosen')->result();
		return $balik;
	}

	function input_data($data){
		$this->db->insert('dosen',$data);
  }
  
  function input_data_siswa($data){
		$this->db->insert('siswa',$data);
	}

	function update_data($where, $data, $table){
		return $this->db->get($where);
		return $this->db->get($table, $data);
	}

	function edit_data_siswa($kode, $table){
		return $this->db->get_where($table, array('SISWA_ID'=>$kode));
	}

	function edit_data_dosen($kode, $table){
		return $this->db->get_where($table, array('DOSEN_ID'=>$kode));
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function list_artikel(){
		$query = $this->db->get('public_artikel');
		return $query;
	}

	function load_artikel($pid){
		$balik = $this->db->get_where('public_artikel',array('PUBLIC_ID' =>$pid));
		return $balik;
	}

	function tampil_event(){
		$balik = $this->db->get('lates_news')->result();
		return $balik;
	}
}

 ?>

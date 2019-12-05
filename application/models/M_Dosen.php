<?php
class M_Dosen extends CI_Model
{
	function cari_user_dosen($mail,$pass){
		return $this->db->get_where('dosen',array('USERNAME_DOSEN' =>$mail,'PASSWORD_DOSEN'=>$pass));
	}

	function tampil_data(){
		//print_r($_SESSION);
		$kategori=$this->uri->segment(3);
		$balik = $this->db->get_where('course',array('KATEGORI' =>$kategori,'DOSEN_ID' =>	$_SESSION['SID']));
		return $balik;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data($where, $data, $table){
		return $this->db->get($where);
		return $this->db->get($table, $data);
	}

	function edit_data($kode, $table){
		return $this->db->get_where($table, array('COURSE_ID'=>$kode));
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function setting_profile($kode, $table){
		return $this->db->get_where($table, array('DOSEN_ID'=>$kode));
	}

	function read_data_course(){
		//print_r($_SESSION);
		//$kategori=$this->uri->segment(3);
		$balik = $this->db->get_where('course',array('DOSEN_ID' =>$_SESSION['SID']));
		return $balik;
	}

	function read_data_submit(){
		//print_r($_SESSION);
		$course_id=$this->uri->segment(3);
		$balik = $this->db->get_where('submit',array('COURSE_ID' =>$course_id,'DOSEN_ID' =>$_SESSION['SID']));
		return $balik;
	}
	function load_list_artikel(){
    	$query = $this->db->get('public_artikel');
		return $query;
	}
	function load_artikel($pid){
		$balik = $this->db->get_where('public_artikel',array('PUBLIC_ID' =>$pid));
		return $balik;
	}

	function tambah_nilai(){
		$this->db->select('POIN_SISWA');
		$balik = $this->db->get_where('siswa',array('SISWA_ID' => $_SESSION['siswa_id']));
		return $balik;
	}

}
 ?>

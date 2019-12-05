<?php
class M_Siswa extends CI_Model
{
	function cari_user_siswa($mail,$pass){
		return $this->db->get_where('siswa',array('USERNAME_SISWA' =>$mail,'PASSWORD_SISWA'=>$pass));
	}
	function ranked(){
		$this->db->order_by('POIN_SISWA', 'Desc');
		return $this->db->get('siswa');
	}
	function news(){
		$this->db->order_by('NEWS_ID', 'Desc');
		return $this->db->get('lates_news',1);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data(){
		//print_r($_SESSION);
		$kategori=$this->uri->segment(3);
		$balik = $this->db->get_where('course',array('KATEGORI' =>$kategori));
		return $balik;
	}

	function setting_profile($kode, $table){
		return $this->db->get_where($table, array('SISWA_ID'=>$kode));
}
	function tampil_list_orang(){
		$this->db->where_not_in('NAMA_PROFILE', $_SESSION['nama']);
		$query = $this->db->get('siswa');
		return $query;
	}

	function input_chat($data){
		$this->db->insert('chat',$data);
	}

	function tampil_chat($nama=""){
		//$this->db->select('select * from chat where (PENGIRIM =	'.$nama.' AND PENERIMA ='.$_SESSION['nama'].')');
		//$this->db->select('(SELECT * FROM chat WHERE(PENERIMA ='.$nama.' AND PENGIRIM = '.$_SESSION['nama'].') OR (PENERIMA ='.$nama.'AND PENGIRIM = '.$_SESSION['nama'].')');
		//$array2 = array('PENERIMA' => $_SESSION['nama'], 'PENGIRIM' => $nama,TRUE);
		//$this->db->where($array2);
		//echo $_SESSION['nama'];
		//$array1 = array('PENERIMA' => $nama, 'PENGIRIM' => $_SESSION['nama'],FALSE);
		//$this->db->where($array1);
		//$query['penerima'] = $this->db->get('chat');
		//$array1 = array('PENERIMA' => $nama, 'PENGIRIM' => $_SESSION['nama'],TRUE);
		//$array2 = array('PENGIRIM' => $nama, 'PENERIMA' => $_SESSION['nama'],TRUE);
		//$this->db->where($array1);
		//$this->db->or_where($array2);
		$kirim=$_SESSION['nama'];
		$pengirim = "PENGIRIM='$kirim' AND PENERIMA='$nama'";
		$this->db->where($pengirim);
		$penerima = "PENGIRIM='$nama' AND PENERIMA='$kirim'";
		$this->db->or_where($penerima);
		$this->db->order_by('CHAT_ID','ASC');
		$query = $this->db->get('chat');
		return $query;
	}
	function load_list_artikel(){
    $query = $this->db->get('public_artikel');
		return $query;
	}
	function load_artikel($pid){
		$balik = $this->db->get_where('public_artikel',array('PUBLIC_ID' =>$pid));
		return $balik;
	}
	function load_nilai(){
		$this->db->select('POIN_SISWA');
		$balik = $this->db->get_where('siswa',array('SISWA_ID' =>$_SESSION['SID']));
		return $balik;
	}
}
 ?>

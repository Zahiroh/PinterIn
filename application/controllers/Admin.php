<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Admin');
  }
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('bs/adminLogin');
	}
  public function cari_admin(){
    $datalogin =array(
      'username'   =>$this->input->post('USERNAME'),
      'password'  =>$this->input->post('PASSWORD'));
    $hasil = $this->M_Admin->cari_user_admin($datalogin['username'],$datalogin['password'])->row_array();
    if($hasil==NULL){
      redirect('Admin/');
    }
    else {
    //   session_start();
      $_SESSION['SID']=$hasil['ADMIN_ID'];
	  $_SESSION['nama']=$hasil['USERNAME_ADMIN'];
	  $data['dosen']=$this->db->count_all_results('dosen');
	  $data['course']=$this->db->count_all_results('course');
	  $data['siswa']=$this->db->count_all_results('siswa');
     echo "<br>";
      $this->load->view('bs/adminDashboard',$data);
    }
  }
  public function home(){
	$data['dosen']=$this->db->count_all_results('dosen');
	$data['course']=$this->db->count_all_results('course');
	$data['siswa']=$this->db->count_all_results('siswa');
  echo "<br>";
	$this->load->view('bs/adminDashboard',$data);
  }

  ///////////////////////////////// DOSEN / TEACHER ////////////////////////////

  function tampil_dosen(){
		$data['dosen'] = $this->M_Admin->tampil_data_dosen();
		$this->load->view('V_Tampil_Dosen',$data);
	}

	function adminDashboard(){
		$data['dosen']=$this->db->count_all_results('dosen');
		$data['course']=$this->db->count_all_results('course');
		$data['siswa']=$this->db->count_all_results('siswa');
		$this->load->view('bs/adminDashboard',$data);
	}

	function tambah_dosen(){
		$this->load->view('bs/pembukaadmin');
		$this->load->view('V_Input_Dosen');
		$this->load->view('bs/penutup');
	}

	function tambah_aksi_dosen(){
		$data = array(
      		'NAMA_DOSEN' => $this->input->post('NAMA_DOSEN'),
     		'ALAMAT_DOSEN' => $this->input->post('ALAMAT_DOSEN'),
      		'EMAIL_DOSEN' => $this->input->post('EMAIL_DOSEN'),
			'USERNAME_DOSEN' => $this->input->post('USERNAME_DOSEN'),
			'PASSWORD_DOSEN' => $this->input->post('PASSWORD_DOSEN'),
			);
		print_r($data);
		$this->M_Admin->input_data($data);
		redirect('Admin/tampil_dosen');
	}

	function hapus_dosen($id){
		$where = array('DOSEN_ID' => $id);
		$this->M_Admin->hapus_data($where,'dosen');
		redirect('Admin/tampil_dosen');
	}

	function edit_dosen(){
		$kode = $this->uri->segment(3);
		$dosen = $this->M_Admin->edit_data_dosen($kode,'dosen')->row_array();
		$data['dosen'] = $dosen;
		$this->load->view('bs/pembukaadminv2');
		$this->load->view('V_Edit_Dosen',$data);
		$this->load->view('bs/penutupv2');
	}

	function update_dosen(){
		$dosen_id = $this->input->post('DOSEN_ID');
		$username_dosen = $this->input->post('USERNAME_DOSEN');
		$password_dosen = $this->input->post('PASSWORD_DOSEN');
		$nama_dosen = $this->input->post('NAMA_DOSEN');
		$alamat_dosen = $this->input->post('ALAMAT_DOSEN');
		$email_dosen = $this->input->post('EMAIL_DOSEN');

		$data = array(
			'DOSEN_ID' => $dosen_id,
			'USERNAME_DOSEN' => $username_dosen,
			'PASSWORD_DOSEN' => $password_dosen,
			'NAMA_DOSEN' => $nama_dosen,
			'ALAMAT_DOSEN' => $alamat_dosen,
			'EMAIL_DOSEN' => $email_dosen,
			);

		$this->db->where('DOSEN_ID',$dosen_id);
		$this->db->update('dosen',$data);
		redirect('Admin/tampil_dosen');
  }

  /////////////////////////// SISWA / STUDENT ///////////////////////////////////////////

  function tampil_siswa(){
		$data['siswa'] = $this->M_Admin->tampil_data();
		$this->load->view('V_Tampil_siswa',$data);
	}
	function tambah_siswa(){
		$this->load->view('bs/pembukaadmin');
		$this->load->view('V_Input_siswa');
		$this->load->view('bs/penutup');
	}

	function tambah_aksi_siswa(){
		$data = array(
		    $username_siswa = $this->input->post('USERNAME_SISWA'),
		    $password_siswa = $this->input->post('PASSWORD_SISWA'),
		    $nama_profile = $this->input->post('NAMA_PROFILE'),
		    $alamat_profile = $this->input->post('ALAMAT_PROFILE'),
		    $email = $this->input->post('EMAIL'));

            $data = array(
                'USERNAME_SISWA' => $username_siswa,
                'PASSWORD_SISWA' => $password_siswa,
                'NAMA_PROFILE' => $nama_profile,
                'ALAMAT_PROFILE' => $alamat_profile,
                'EMAIL' => $email,
                );
            print_r($data);
            $this->M_Admin->input_data_siswa($data);
           	redirect('Admin/tampil_siswa');
	}

	function hapus_siswa($id){
		$where = array('SISWA_ID' => $id);
		$this->M_Admin->hapus_data($where,'siswa');
		redirect('Admin/tampil_siswa');
	}

	function edit_siswa(){
		$kode = $this->uri->segment(3);
		$siswa = $this->M_Admin->edit_data_siswa($kode,'siswa')->row_array();
		$data['siswa'] = $siswa;
		$this->load->view('bs/pembukaadminv2');
		$this->load->view('V_Edit_siswa',$data);
		$this->load->view('bs/penutupv2');
	}

	function update_siswa(){
		$siswa_id = $this->input->post('SISWA_ID');
		$username_siswa = $this->input->post('USERNAME_SISWA');
		$password_siswa = $this->input->post('PASSWORD_SISWA');
		$nama_profile = $this->input->post('NAMA_PROFILE');
		$alamat_profile = $this->input->post('ALAMAT_PROFILE');
    $email = $this->input->post('EMAIL');

		$data = array(
						'SISWA_ID' => $siswa_id,
						'USERNAME_SISWA' => $username_siswa,
            'PASSWORD_SISWA' => $password_siswa,
            'NAMA_PROFILE' => $nama_profile,
            'ALAMAT_PROFILE' => $alamat_profile,
            'EMAIL' => $email,
			);

		$this->db->where('SISWA_ID',$siswa_id);
		$this->db->update('siswa',$data);
		redirect('Admin/tampil_siswa');
	}
  public function keluar(){
    unset($_SESSION);
    redirect('Admin/');
	}
	////////////////////////publik artikel//////////////////////
	public function list_artikel() {
		$data['list'] = $this->M_Admin->list_artikel()->result();
		$this->load->view('bs/pembukaadmin');
		$this->load->view('bs/tampil_artikel_admin',$data);
		$this->load->view('bs/penutup');
	}

	public function hapus_artikel($public_id){

		$where = array('PUBLIC_ID' => $public_id);
		$this->M_Admin->hapus_data($where,'public_artikel');
		redirect('Admin/list_artikel');
	}
	///////////////// TAMPIL EVENT ////////////

	function tampil_event(){
		$data['lates_news'] = $this->M_Admin->tampil_event();
		$this->load->view('bs/Tampil_Event',$data);
	}

	function hapus_event($id){
		$where = array('NEWS_ID' => $id);
		$this->M_Admin->hapus_data($where,'lates_news');
		redirect('Admin/tampil_event');
	}

	public function tampil_chart(){
			$this->load->model('M_Chart');
			$this->M_Chart->update_data();
			$data['chart']=$this->M_Chart->hitung_dosen();
			$this->load->view('bs/pembukaadmin');
			$this->load->view('bs/chart',$data);
			//$this->load->view('bs/penutup');

		}


}

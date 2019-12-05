<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Dosen');
  }
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('bs/userLogin');
	}

	public function formlogin(){
		$this->load->view('bs/dosenForm');
	}

	public function back(){
		$this->load->view('bs/dosenDashboardisi');
	}

    public function cari_user_dosen(){
		$datalogin =array(
			'username'   =>$this->input->post('USERNAME'),
			'password'  =>$this->input->post('PASSWORD'));
		$hasil = $this->M_Dosen->cari_user_dosen($datalogin['username'],$datalogin['password'])->row_array();
		if($hasil!=NULL || $_SESSION['SID'] ){
			$_SESSION['SID']=$hasil['DOSEN_ID'];
			$_SESSION['nama']=$hasil['NAMA_DOSEN'];
			$_SESSION['foto']=$hasil['NAMA_FOTO_DOSEN'];
			$this->load->view('bs/dosenDashboardIsi');
		} else {
			redirect('Dosen/formlogin');
		}
	}

	public function register(){
		if( $this->input->post('PASSWORD1') ==  $this->input->post('PASSWORD2')) {
			$username_dosen = $this->input->post('USERNAME_DOSEN');
			$password_dosen = $this->input->post('PASSWORD1');
			$nama_dosen = $this->input->post('NAMA_DOSEN');
			$alamat_dosen = $this->input->post('ALAMAT_DOSEN');
			$email_dosen = $this->input->post('EMAIL_DOSEN');

			$data = array(
				'USERNAME_DOSEN' => $username_dosen,
				'PASSWORD_DOSEN' => $password_dosen,
				'NAMA_DOSEN' => $nama_dosen,
				'ALAMAT_DOSEN' => $alamat_dosen,
				'EMAIL_DOSEN' => $email_dosen,
				);
			$this->M_Dosen->input_data($data,'dosen');
			redirect('Dosen/formlogin');
		} else {
			redirect('Dosen/formlogin');
		}
	}

	//////////////////////////// COURSE ////////////////////////////

	public function course(){
    	$_SESSION['cat'] = $this->uri->segment(3);
		$data['course'] = $this->M_Dosen->tampil_data()->result();
		$this->load->view('bs/tampil_crud_course', $data);
	}

	public function tambah_course(){
		$this->load->view('bs/tampil_input_course');
	}

  public function tambah_aksi_course(){
	$kategori = $this->input->post('KATEGORI');
	//die($kategori);
	$dosen = $_SESSION['SID'];
	$nama_dosen_course=$_SESSION['nama'];
	$judul = $this->input->post('JUDUL');
	$deskripsi = $this->input->post('DESKRIPSI');
	$tipe_file_course = $this->input->post('TIPE_FILE_COURSE');
	$nama_file_course = $this->input->post('NAMA_FILE_COURSE');
	$tanggal_up1 = date("Y-m-d H:i:s");
	$tanggal_deadline1 = $this->input->post('TANGGAL_DEADLINE1');

	$data = array(
		'KATEGORI' => $kategori,
		'DOSEN_ID' => $_SESSION['SID'],
		'NAMA_DOSEN_COURSE' => $_SESSION['nama'],
		'JUDUL' => $judul,
		'DESKRIPSI' => $deskripsi,
		//'TIPE_FILE_COURSE' => $tipe_file_course,
		//'NAMA_FILE_COURSE' => $nama_file_course,
		'TANGGAL_UP1' => $tanggal_up1,
		'TANGGAL_DEADLINE1' => $tanggal_deadline1,
		);
	//$this->db->insert('course', $data);

	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'pdf|docx';
	$config['max_size']             = 124000000;

	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload('TIPE_FILE_COURSE')){
			die('DIE');
		}else{
			//$data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data();
			//die(print_r($upload_data));
			$data['TIPE_FILE_COURSE'] = '';
			$data['NAMA_FILE_COURSE'] = $upload_data['file_name'];

			$this->db->insert('course',$data);

			redirect('Dosen/course/'.$kategori);
		}
 	 }

	public function hapus_course() {
		$id = $this->uri->segment(3);
		$where = array('COURSE_ID' => $id);
		$this->M_Dosen->hapus_data($where,'course');
		redirect('Dosen/course/'.$_SESSION['cat']);
	}

	function edit_course(){
		$kode = $this->uri->segment(3);
		$course = $this->M_Dosen->edit_data($kode,'course')->row_array();
		$data['course'] = $course;
		$this->load->view('bs/tampil_edit_course2',$data);
	}

  function update_course(){
		$dosen_id = $_SESSION['SID'];
		$course_id = $this->input->post('COURSE_ID');
		$kategori = $this->input->post('KATEGORI');
		$judul = $this->input->post('JUDUL');
		$deskripsi = $this->input->post('DESKRIPSI');
		$tipe_file_course = $this->input->post('TIPE_FILE_COURSE');
		//$nama_file_course = $this->input->post('NAMA_FILE_COURSE');
		$tanggal_up1 = $this->input->post('TANGGAL_UP1');
		$tanggal_deadline1 = $this->input->post('TANGGAL_DEADLINE1');

		$data = array(
			'COURSE_ID' => $course_id,
			'DOSEN_ID' => $_SESSION['SID'],
			'NAMA_DOSEN_COURSE' => $_SESSION['nama'],
			'KATEGORI' => $kategori,
			'JUDUL' => $judul,
			'DESKRIPSI' => $deskripsi,
			'TIPE_FILE_COURSE' => $tipe_file_course,
			//'NAMA_FILE_COURSE' => $nama_file_course,
			'TANGGAL_UP1' => $tanggal_up1,
			'TANGGAL_DEADLINE1' => $tanggal_deadline1,
			);
		//print_r($data);
		//print_r($data);
		//$this->db->where('COURSE_ID',$course_id);
		//$this->db->update('course',$data);
		//redirect('Dosen/course/'.$kategori);

		$config['upload_path']          = 'C:\xampp\htdocs\pinterin\uploads';
		$config['allowed_types']        = 'pdf|docx|doc';
		$config['max_size']             = 1240000000;

		$this->load->library('upload', $config);
		$this->upload->do_upload('TIPE_FILE_COURSE');

		$upload_data = $this->upload->data();
		$data['TIPE_FILE_COURSE'] = $tipe_file_course;
		$data['NAMA_FILE_COURSE'] = $upload_data['file_name'];
		$data['NAMA_FILE_COURSE']= $data['TIPE_FILE_COURSE'];
		$upload_data['file_type'] = $tipe_file_course;
		$data['NAMA_FILE_COURSE'] = $upload_data['file_name'];
		$data['TIPE_FILE_COURSE'] = $upload_data['file_type'];

		$this->db->where('COURSE_ID',$course_id);
		$this->db->update('course',$data);

		redirect('Dosen/course/'.$kategori);

	}

	/////////////////////////////////// OUT /////////////////////////////////////////

  	public function keluar(){
    	unset($_SESSION);
    	redirect('Dosen/');
	  }

	  ///////////////////////////////// SETTING PROFILE /////////////////////////////

	function setting(){
		$kode = $this->uri->segment(3);
		$dosen = $this->M_Dosen->setting_profile($kode,'dosen')->row_array();
		$data['dosen'] = $dosen;
		$this->load->view('bs/dosen_setting_profile', $data);
	}

	function dashboard(){
		$this->load->view('bs/dosenDashboardlsi');
	}

	function setting_profile(){
		$dosen_id = $_SESSION['SID'];
		$username_dosen = $this->input->post('USERNAME_DOSEN');
		$password_dosen = $this->input->post('PASSWORD_DOSEN');
		$nama_dosen = $this->input->post('NAMA_DOSEN');
		$alamat_dosen = $this->input->post('ALAMAT_DOSEN');
		$email_dosen = $this->input->post('EMAIL_DOSEN');
		$foto_sk_dosen = $this->input->post('FOTO_SK_DOSEN');

		$data = array(
			'USERNAME_DOSEN' => $username_dosen,
			'PASSWORD_DOSEN' => $password_dosen,
			'NAMA_DOSEN' => $nama_dosen,
			'ALAMAT_DOSEN' => $alamat_dosen,
			'EMAIL_DOSEN' => $email_dosen,
			'FOTO_SK_DOSEN' => $foto_sk_dosen,
			);
		//print_r($data);

		$config['upload_path']          = './uploads/foto/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 1240000000; // maksimal ukuran

		$this->load->library('upload', $config);
		$this->upload->do_upload('FOTO_SK_DOSEN');

		$upload_data = $this->upload->data();
				//die(print_r($upload_data));
		$data['FOTO_SK_DOSEN'] = $foto_sk_dosen;
		$data['NAMA_FOTO_DOSEN'] = $upload_data['file_name'];
		$data['NAMA_FOTO_DOSEN']= $data['FOTO_SK_DOSEN'];
		$upload_data['file_type'] = $foto_sk_dosen;
		$data['NAMA_FOTO_DOSEN'] = $upload_data['file_name'];
		$data['FOTO_SK_DOSEN'] = $upload_data['file_type'];

		$this->db->where('DOSEN_ID',$dosen_id);
		$this->db->update('dosen',$data);
		$_SESSION['nama'] = $data['NAMA_DOSEN'];
		$_SESSION['foto'] = $data['NAMA_FOTO_DOSEN'];
		redirect('Dosen/back');
	}

	//////////////////////////// TAMPIL SUBMIT SISWA ////////////////////////////

	public function read_course(){
    	$_SESSION['cat'] = $this->uri->segment(3);
		$data['course'] = $this->M_Dosen->read_data_course()->result();
		$this->load->view('bs/tampil_course_for_submit', $data);
	}

	public function read_submit(){
    	$_SESSION['pel'] = $this->uri->segment(3);
		$data['submit'] = $this->M_Dosen->read_data_submit()->result();
		$this->load->view('bs/tampil_submit_for_dosen', $data);
	}

	public function download_submit (){
		$nama_file=$this->uri->segment(3);
		force_download('./uploads/submit/'.$nama_file, NULL);
	}

	public function back2(){
		$_SESSION['cat'] = $this->uri->segment(3);
		$data['course'] = $this->M_Dosen->read_data_course()->result();
		$this->load->view('bs/tampil_course_for_submit', $data);
	}

  //////////////////////event//////////////////////
  public function simpan_event(){
    $judul=$this->input->post('EVENT_NEWS');
    $tanggal=$this->input->post('TANGGAL_KALENDER');
    $foto = $this->input->post('FOTO_NEWS');
    $data = array(
      'EVENT_NEWS' => $judul,
      'TANGGAL_KALENDER' => $tanggal
       );
      //print_r($data);
      $config['upload_path']          = './uploads/event/';
  		$config['allowed_types']        = 'jpg|png|jpeg';
  		$config['max_size']             = 1240000000;

	  $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('FOTO_NEWS')){
          $err=$this->upload->display_errors();
          echo $err;
          die('DIE');
  			}else{
  				//$data = array('upload_data' => $this->upload->data());
  				$upload_data = $this->upload->data();
  				//die(print_r($upload_data));
                $data['FOTO_NEWS'] = '';
  				$data['NAMA_FOTO_NEWS'] = $upload_data['file_name'];

  				$this->db->insert('lates_news',$data);
                redirect('Dosen/back');
        }
  }
  /////////////Artikel/////////////////
  public function simpan_artikel(){
    $data = array(
			'PENULIS' => $_SESSION['nama'],
			'JUDUL' => $this->input->get('judul'),
			'CAPTION' => $this->input->get('isi'),
			);
    $this->M_Dosen->input_data($data,'public_artikel');
    redirect('Dosen/back');
  }
  public function list_artikel() {
	$data['list'] = $this->M_Dosen->load_list_artikel()->result();
	$this->load->view('bs/pembukadosenv2');
	$this->load->view('bs/list_artikel_siswa',$data);
	$this->load->view('bs/penutupdosenv2');
  }
  public function load_per_artikel($pid)
  {
	$data = $this->M_Dosen->load_artikel($pid)->row_array();
	$this->load->view('bs/pembukadosen');
	$this->load->view('bs/artikel_siswa',$data);
	$this->load->view('bs/penutupdosen');
  }
//////////////////////////// TAMBAH POIN ///////////////////////////
  public function input_poin_siswa(){
	$_SESSION['siswa_id'] = $this->uri->segment(3);
	$_SESSION['nama_siswa'] = $this->uri->segment(4);
	$_SESSION['cid'] = $this->uri->segment(5);
	//print_r($_SESSION['nama_siswa']);
	$this->load->view('bs/tampil_input_poin_dari_submit');
}

public function tambah_poin_siswa(){
	$nilai = $this->M_Dosen->tambah_nilai()->row_array();
	//print_r($nilai);
	$poin_siswa = $this->input->post('POIN_SISWA');
	$nilai['POIN_SISWA'] = $nilai['POIN_SISWA'] + $poin_siswa;
	$data = array(
		'POIN_SISWA' => $nilai['POIN_SISWA'],
	);

	$this->db->where('SISWA_ID', $_SESSION['siswa_id']);
	$this->db->update('siswa',$data);

  $status = $this->input->post('status');
  $datastatus = array(
    'STATUS' => 1
  );
  $this->db->where('COURSE_ID', $_SESSION['cid']);
  $this->db->update('submit',$datastatus);

	redirect('Dosen/read_submit/'.$_SESSION['pel']);
}

// VOTE //

public function poll_vote() {
	$this->load->view('bs/poll_vote');
}
}

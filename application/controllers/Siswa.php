<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

				function __construct()
				{
					parent::__construct();
					$this->load->model('M_Siswa');
				}
				public function index()
				{
					//$this->load->view('welcome_message');
					$this->load->view('bs/userLogin');
				}
				public function formlogin(){
					$this->load->view('bs/userForm');
				}

					public function cari_user_siswa(){
					$datalogin =array(
						'username'   =>$this->input->post('USERNAME'),
						'password'  =>$this->input->post('PASSWORD'));
					$hasil = $this->M_Siswa->cari_user_siswa($datalogin['username'],$datalogin['password'])->row_array();
					if($hasil==NULL){
						redirect('Siswa/formlogin');
					} else {
						$_SESSION['SID'] = $hasil['SISWA_ID'];
						$_SESSION['nama'] = $hasil['NAMA_PROFILE'];
						$_SESSION['foto'] = $hasil['NAMA_FOTO'];
						$_SESSION['poin'] = $hasil['POIN_SISWA'];
						$data['list']= $this->M_Siswa->ranked()->result();
						$data['news']= $this->M_Siswa->news()->row_array();
						$this->load->view('bs/siswaDashboardlsi',$data);
					}
				}

				public function register(){
					if( $this->input->post('PASSWORD1') ==  $this->input->post('PASSWORD2')) {
						$username_siswa = $this->input->post('USERNAME_SISWA');
						$password_siswa = $this->input->post('PASSWORD1');
						$nama_profile = $this->input->post('NAMA_PROFILE');
						$alamat_profile = $this->input->post('ALAMAT_PROFILE');
						$email = $this->input->post('EMAIL');

						$data = array(
							'USERNAME_SISWA' => $username_siswa,
							'PASSWORD_SISWA' => $password_siswa,
							'NAMA_PROFILE' => $nama_profile,
							'ALAMAT_PROFILE' => $alamat_profile,
							'EMAIL' => $email,
							);
						$this->M_Siswa->input_data($data,'siswa');
						redirect('Siswa/formlogin');
					} else {
						redirect('Siswa/formlogin');
					}
				}

				////////////////////// COURSE ////////////////////////////////////////////

				public function course_siswa(){
					$_SESSION['cat'] = $this->uri->segment(3);
					$data['course'] = $this->M_Siswa->tampil_data()->result();
					$this->load->view('bs/tampil_r_course', $data);
				}

				public function download_course (){
					$nama_file=$this->uri->segment(3);
					force_download('./uploads/'.$nama_file, NULL);
				}

				public function submit($cid, $dosen_id){
					$_SESSION['course_id'] = $cid;
					$_SESSION['dosen_id'] = $dosen_id;
					$this->load->view('bs/submit_siswa');
				}

				public function submit_course (){
					$siswa_id = $_SESSION['SID'];
					$nama_siswa = $_SESSION['nama'];
					$dosen_id = $_SESSION['dosen_id'];
					$tanggal_release = date("Y-m-d H:i:s");
					$tipe_file_submit = $this->input->post('TIPE_FILE_SUBMIT');

					$data = array(
						'DOSEN_ID' => $dosen_id,
						'SISWA_ID' => $siswa_id,
						'NAMA_SISWA' => $nama_siswa,
						'TANGGAL_RELEASE' => $tanggal_release,
						);

					$config['upload_path']          = './uploads/submit/';
					$config['allowed_types']        = 'pdf|docx';
					$config['max_size']             = 1240000000;

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('TIPE_FILE_SUBMIT'))
							die('DIE');
					else{
							$upload_data = $this->upload->data();
							$data['COURSE_ID'] =$_SESSION['course_id'];
							$data['TIPE_FILE_SUBMIT'] = '';
							$data['NAMA_FILE_SUBMIT'] = $upload_data['file_name'];

							$sql = $this->db->insert('submit',$data);
							redirect('Siswa/course_siswa/'.$_SESSION['cat']);
					}
				}


				//////////////////////////// KELUAR /////////////////////////////
				public function keluar(){
					unset($_SESSION);
					redirect('Siswa/');
				}

				public function home(){
					$data['list']= $this->M_Siswa->ranked()->result();
					$data['news']= $this->M_Siswa->news()->row_array();
					$this->load->view('bs/siswaDashboardlsi',$data);
				}

				//////////////////////////// SETTING PROFILE dan TAMPIL TABEL SISWA////////////////////////////

			public function tampil_data_siswa(){
					//$_SESSION['cat'] = $this->uri->segment(3);
				$data['siswa'] = $this->M_Siswa->tampil_siswa()->result();
				//$this->load->view('bs/tampil_crud_course', $data);
			}

			function setting(){
				$kode = $this->uri->segment(3);
				$siswa = $this->M_Siswa->setting_profile($kode,'siswa')->row_array();
				$data['siswa'] = $siswa;
				$this->load->view('bs/siswa_setting_profile',$data);
			}

			function dashboard(){
				$data['list']= $this->M_Siswa->ranked()->result();
				$data['news']= $this->M_Siswa->news()->row_array();
				$this->load->view('bs/siswaDashboardlsi',$data);
			}

			function setting_profile(){
				$siswa_id = $_SESSION['SID'];
				$username_siswa = $this->input->post('USERNAME_SISWA');
				$password_siswa = $this->input->post('PASSWORD_SISWA');
				$nama_profile = $this->input->post('NAMA_PROFILE');
				$alamat_profile = $this->input->post('ALAMAT_PROFILE');
				$email = $this->input->post('EMAIL');
				$foto = $this->input->post('FOTO');

				$data = array(
					'USERNAME_SISWA' => $username_siswa,
					'PASSWORD_SISWA' => $password_siswa,
					'NAMA_PROFILE' => $nama_profile,
					'ALAMAT_PROFILE' => $alamat_profile,
					'EMAIL' => $email,
					'FOTO' => $foto,
					);
				//print_r($data);

				$config['upload_path']          = './uploads/foto/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 1240000; // maksimal ukuran

				$this->load->library('upload', $config);
				$this->upload->do_upload('FOTO');
				if(!isset($_SESSION['foto'])) {
					$upload_data = $this->upload->data();
					$data['FOTO'] = $foto;
					$data['NAMA_FOTO'] = $upload_data['file_name'];
					$data['NAMA_FOTO']= $data['FOTO'];
					$upload_data['file_type'] = $foto;
					$data['NAMA_FOTO'] = $upload_data['file_name'];
					$data['FOTO'] = $upload_data['file_type'];
				} else {
					$foto = $_SESSION['foto'];
					$upload_data = $this->upload->data();
					$data['FOTO'] = $foto;
					$data['NAMA_FOTO'] = $upload_data['file_name'];
					$data['NAMA_FOTO']= $data['FOTO'];
					$upload_data['file_type'] = $foto;
					$data['NAMA_FOTO'] = $upload_data['file_name'];
					$data['FOTO'] = $upload_data['file_type'];
				}
				$this->db->where('SISWA_ID',$siswa_id);
				$this->db->update('siswa',$data);
				$_SESSION['nama'] = $data['NAMA_PROFILE'] ;
				$_SESSION['foto'] = $data['NAMA_FOTO'] ;
				redirect('Siswa/dashboard');
		}

	//////////////////	IKI LO CHAT ///////////////////

			public function chat(){
				$data['chat']=$this->M_Siswa->tampil_list_orang()->result();
				$this->load->view('bs/list_orang_chat',$data);
			}

			public function load_chat($nama){
				$data['chat']=$this->M_Siswa->tampil_chat($nama)->result();
				$this->load->view('bs/chat.php',$data);
			}

			public function kirim_chat(){
				$pesan=$this->input->post('PESAN');
				$pengirim=$_SESSION['nama'];
				$penerima=$this->input->post('PENERIMA');
				$data = array(
					'PENGIRIM' => $pengirim,
					'PENERIMA' => $penerima,
					'PESAN' => $pesan
					);
				$this->M_Siswa->input_chat($data);
				redirect('Siswa/load_chat/'.$penerima);
			}
		/////////////Artikel/////////////////
		public function siswa_buat_artikel(){
			$this->load->view('bs/siswa_buat_artikel');
		}
		public function simpan_artikel(){
			$data = array(
					'PENULIS' => $_SESSION['nama'],
					'JUDUL' => $this->input->get('judul'),
					'CAPTION' => $this->input->get('isi'),
					);
			$this->M_Siswa->input_data($data,'public_artikel');
			redirect('Siswa/list_artikel');
		}
		public function list_artikel() {
			$data['list'] = $this->M_Siswa->load_list_artikel()->result();
			$this->load->view('bs/pembukauser');
			$this->load->view('bs/list_artikel_siswa',$data);
			$this->load->view('bs/penutupuser');
		}
		public function load_per_artikel($pid)
		{
			$data = $this->M_Siswa->load_artikel($pid)->row_array();
			$this->load->view('bs/pembukauserv2');
			$this->load->view('bs/artikel_siswa',$data);
			$this->load->view('bs/penutupuserv2');
		}

  /////////////////// POIN /////////////////
		public function tambah_poin(){
			$nilai = $this->M_Siswa->load_nilai()->row_array();
			$nilai['POIN_SISWA'] = $nilai['POIN_SISWA'] + $_SESSION['nilaiquiz'];
			$data = array(
				'POIN_SISWA' => $nilai['POIN_SISWA']
					);
			$this->db->where('SISWA_ID',$_SESSION['cat']);
			$this->db->update('siswa',$data);
			$this->load->view('bs/cetaksertif');
			//redirect('Siswa/back');
		}

		// VOTE //

		public function poll_vote() {
			$this->load->view('bs/poll_vote');
		}

		// chart cuy //
		public function tampil_chart(){
			$this->load->model('M_Chart');
			$this->M_Chart->update_data();
			$data['chart']=$this->M_Chart->hitung_dosen();
			$this->load->view('bs/chart',$data);

		}


}

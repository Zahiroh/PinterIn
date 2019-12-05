<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Quiz');
  }
  public function buatquisbaru($course_id){
    $this->load->view('buat_soal');
  }
  public function simpanquiz(){
    for($i=1;$i<=10;$i++){
      $datasoal[$i]=array(
        'DOSEN_ID'  =>$_SESSION['SID'],
  			'COURSE_ID' =>$this->input->post('course_id'),
  			'SOAL'      =>$this->input->post('soal'.$i),
    		'JAWAB_A'   =>$this->input->post('a'.$i),
    		'JAWAB_B'   =>$this->input->post('b'.$i),
    		'JAWAB_C'   =>$this->input->post('c'.$i),
    		'JAWAB_D'   =>$this->input->post('d'.$i),
    		'KUNCI'     =>$this->input->post('kunci'.$i)
      );
    }
    for($i=1;$i<=10;$i++){
      $this->M_Quiz->insertsoal($datasoal[$i]);
    }
    $status=array(
      'STATUS_QUIZ'  =>1
    );
    $this->M_Quiz->gantistatus($this->input->post('course_id'),$status);
    redirect('Dosen/course/'.$_SESSION['cat']);
  }
  public function editperquiz($course_id){
    $keluar['list']=$this->M_Quiz->listsoal($this->uri->segment(3))->result();
    //print_r($keluar['list']);
		$this->load->view('edit_kuis_soal',$keluar);
  }
  public function simpaneditquiz()
  {
    for($i=1;$i<=10;$i++){
      $datasoal[$i]=array(
        'DOSEN_ID'  =>$_SESSION['SID'],
  			'COURSE_ID' =>$this->input->post('course_id'),
  			'KUIS_ID'   =>$this->input->post('kuis_id'.$i),
  			'SOAL'      =>$this->input->post('soal'.$i),
    		'JAWAB_A'   =>$this->input->post('a'.$i),
    		'JAWAB_B'   =>$this->input->post('b'.$i),
    		'JAWAB_C'   =>$this->input->post('c'.$i),
    		'JAWAB_D'   =>$this->input->post('d'.$i),
    		'KUNCI'     =>$this->input->post('kunci'.$i)
      );
    }
    //print_r($datasoal);
    for ($i=1;$i<=10;$i++) {
      $this->M_Quiz->updatequiz($this->input->post('kuis_id'.$i),$datasoal[$i]);
    }
    redirect('Dosen/course/'.$_SESSION['cat']);
  }
  public function hapusperquiz($course_id){
    $did=$this->uri->segment(3);//pengganti session
		$this->M_Quiz->hapusquiz($course_id);
    $status=array(
      'STATUS_QUIZ'  =>0
    );
    $this->M_Quiz->gantistatus($course_id,$status);
		redirect('Dosen/course/'.$_SESSION['cat']);
  }
	public function loadperdosen()
	{
    $keluar['list']=$this->M_Quiz->listquiz($this->uri->segment(3))->result();
    //print_r($keluar);
		$this->load->view('list_kuis_dosen',$keluar);
	}
  public function index(){
    echo "pilih dosen";
    echo anchor('Quiz/loadperdosen/1');
  }
  public function loadperquiz(){
    $keluar['list']=$this->M_Quiz->listsoal($this->uri->segment(3))->result();
    //print_r($keluar['list']);
		$this->load->view('list_kuis_soal',$keluar);
  }
  public function tesquiz($cid)
  {
    $datasoal['list']=$this->M_Quiz->listsoal($cid)->result();
    //print_r($datasoal);
    $this->load->view('kerjakan_soal',$datasoal);
  }
  public function kerjakan_soal($cid)
  {
    $datasoal['list']=$this->M_Quiz->listsoal($cid)->result();
    //print_r($datasoal);
    $this->load->view('kerjakan_soal_siswa',$datasoal);
  }
  public function hitungquiz(){
    for($i=1;$i<=10;$i++){
      $datasoal[$i]=array(
  			'KUIS_ID'   =>$this->input->post('kuis_id'.$i),
    		'COURSE_ID' =>$this->input->post('course_id'),
    		'JAWABAN'   =>$this->input->post('jawaban'.$i),
    		'KUNCI'     =>$this->input->post('kunci'.$i)
      );
    }
    $benar=0;
    for ($i=1;$i<=10;$i++) {
      if($datasoal[$i]['JAWABAN']==$datasoal[$i]['KUNCI'])
        $benar=$benar+1;
    }
    echo "Nilai anda : ".$benar."/10";
    $_SESSION['nilaiquiz']=$benar;
    print_r($datasoal);
  }

  public function hitungquizsiswa(){
    for($i=1;$i<=10;$i++){
      $datasoal[$i]=array(
  			'KUIS_ID'   =>$this->input->post('kuis_id'.$i),
    		'COURSE_ID' =>$this->input->post('course_id'),
    		'JAWABAN'   =>$this->input->post('jawaban'.$i),
    		'KUNCI'     =>$this->input->post('kunci'.$i)
      );
    }
    $benar=0;
    for ($i=1;$i<=10;$i++) {
      if($datasoal[$i]['JAWABAN']==$datasoal[$i]['KUNCI'])
        $benar=$benar+1;
    }
    echo "Nilai anda : ".$benar."/10";
    $_SESSION['nilaiquiz']=$benar;
    //print_r($datasoal);

    redirect('Siswa/tambah_poin/');
  }
}

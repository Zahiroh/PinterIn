<?php
Class Sertifikat extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library('pdfku');
    }
    public function index(){
      $data['tet']="isi text ku";
      $this->load->view('pdf1',$data);
    }
}
?>

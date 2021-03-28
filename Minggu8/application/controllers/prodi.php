<?php
class prodi extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('prodi_model');
  }
  public function index(){
      $data['Prodi'] = $this->prodi_model->get_data();
      $this->load->view('view_prodi',$data);
  }
}
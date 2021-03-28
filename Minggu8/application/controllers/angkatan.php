<?php
class angkatan extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('angkatan_model');
  }
  public function index(){
      $data['angkatan'] = $this->angkatan_model->get_data();
      $this->load->view('view_angkatan',$data);
  }
}
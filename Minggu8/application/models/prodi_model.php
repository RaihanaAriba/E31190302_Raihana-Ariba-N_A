<?php
class prodi_model extends CI_Model {
  public function get_data(){
    $data_prodi = [
        ['Prodi'=>'MIF', 'Keterangan'=>'Manajemen Informatika'],
        ['Prodi'=>'TKK', 'Keterangan'=>'Teknik Komputer'],
        ['Prodi'=>'TIF', 'Keterangan'=>'Teknik Informatika']];
    return $data_prodi;
  }
}
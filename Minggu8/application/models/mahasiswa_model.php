<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Raihana','Prodi'=>'TIF'],
        ['Nama'=>'Ariba','Prodi'=>'MIF'],
        ['Nama'=>'Nurlaili','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}
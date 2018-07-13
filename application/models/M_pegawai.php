<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  M_pegawai extends CI_Model {

    public $table ="t_pegawai";
    
    public function data() {
        $query = "SELECT * FROM pegawai ORDER BY username ASC";
        return $this->db->query($query)->result();
    }

    public function simpan($foto) {
        $data = array(
            'username'    => $this->input->post('username'),
            'password'    => SHA1($this->input->post('password')),
            'Nama'        => $this->input->post('Nama'),
            'foto'        => $foto
        );
        $this->db->insert($this->table, $data);
    }

    public function update($foto) {
        if(empty($foto) AND $this->input->post('password') == '') {
            $data = array(
                'Nama'  => $this->input->post('Nama'),
            );
        } else if(empty($foto) AND $this->input->post('password') != '') {
            $data = array(
                'password'    => $this->input->post('password'),
	            'Nama'  => $this->input->post('Nama'),
            );
        } else if($this->input->post('password') == '') {
            $data = array(
                'Nama'  => $this->input->post('Nama'),
                'foto'        => $foto
            );
        } else if($this->input->post('password') != '') {
            $data = array(
                'password'    => $this->input->post('password'),
                'Nama'  => $this->input->post('Nama'),
                'foto'        => $foto
            );
        }
        $username = $this->input->post('username');
        $this->db->where('username', $username);
        $this->db->update($this->table, $data);
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
        parent::__construct();
       }

	public function index() {

		if(isset($_SESSION['Login'])) {
            redirect(site_url('pegawai'));
        } else if(isset($_SESSION['Username'])) {
            redirect(site_url('mahasiswa'));
        }

        $data = array(
            'app' => $this->db->get_where('m_web')->row_array(),
        );
		$this->load->view('login',$data);
	}

	public function CekLogin() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $loginPegawai = $this->m_crud->chekLogin('t_pegawai', $username, $password);
            $loginMahasiswa = $this->m_crud->chekLogin('t_mahasiswa',$username, $password);

            if (!empty($loginPegawai)) {
                $this->session->sess_expiration = '14400';// expires in 4 hours
            	$this->session->set_userdata($loginPegawai);
                helper_log("login", "Login $username");
            	redirect('pegawai');

            } elseif (!empty($loginMahasiswa)) {
                $this->session->sess_expiration = '14400';// expires in 4 hours
            	$this->session->set_userdata($loginMahasiswa);
                helper_log("login", "Login $username");
                redirect('mahasiswa');

            } else {
                $this->session->set_flashdata('Gagal', 'Maaf, akun dan password Anda salah !');
                redirect();
            }
            
        } 
    }


    public function Logout() {
        $this->session->sess_destroy();
    	$this->session->set_flashdata('keluar', 'Anda berhasil keluar ...');
    	redirect();
	}

}

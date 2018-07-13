<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct() {
        parent::__construct();
        sesiPegawai();
     	$id = $this->session->userdata('Login');
		$this->data = array(
			'mnu' => $this->m_crud->data('m_menu'),
			'app' => $this->m_crud->data('m_web'),
			'usr' => $this->m_crud->getByID('t_pegawai','Login',$id),
			'info' => $this->m_crud->data('t_info'),
			'pengumuman' => $this->m_crud->data('t_pengumuman',"Untuk ='1'")
		);
    }

	public function index() {
		redirect('pegawai/dashboard','refresh');

	}

	public function dashboard() {
		$this->template->display('backend/pengaturan/dashboard', $this->data);

	}

	//list user
	public function user() {
		$data = array(
			'title' => 'Data Admin | Panel Admin SIP',
			'adm'   => $this->m_pegawai->data()
		);
		$this->template->display('backend/admin_list',$data);
	}

	//tambah user
	public function user_tambah() {
		if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto();
            $this->m_pegawai->simpan($uploadFoto);
            $this->session->set_flashdata('simpan', 'Admin baru berhasil tersimpan ...');
            redirect('backend/admin/user');
        } else {
			$data = array(
				'title' => 'Tambah Admin | Panel Admin SIP'
			);
			$this->load->view('dashboard/header', $data);
			$this->load->view('backend/admin_tambah');
			$this->load->view('backend/footer');
		}
	}

	//edit user
	public function user_edit() {
		if (isset($_POST['submit'])) {
      		$uploadFoto = $this->upload_foto();
      		$this->m_pegawai->update($uploadFoto);
      		$this->session->set_flashdata('simpan', 'Admin berhasil diperbaharui ...');
      		redirect('admin/user');
	    } else {
	    	if ($username = $this->uri->segment(3)) {
		        $data = array(
		          'title'  => 'Edit Admin | Panel Admin SIP',
		          'adm'    => $this->db->get_where('tbl_admin', array('username' => $username))->row_array()
		        );
		       	$this->load->view('dashboard/header', $data);
				$this->load->view('admin/admin_edit');
				$this->load->view('admin/footer');
			} else {
				redirect('admin/user');
			}
		}
	}

	//hapus user
	public function user_hapus() {
		if ($username = $this->uri->segment(3)) {
			if(!empty($username)) {
				$this->db->where('username', $username);
				$this->db->delete('tbl_admin');
			}
			$this->session->set_flashdata('simpan', 'Admin berhasil terhapus ...');
			redirect('admin/user');
		} else {
			redirect('admin/user');
		}
	}


	//upload foto
	public function upload_foto() {
		$config['upload_path']          = './assets/img/';
		$config['allowed_types']        = 'jpg|jpeg|png|gif|bmp';
		$config['max_size']             = 2048;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('filefoto');
		$upload = $this->upload->data();
		return $upload['file_name'];
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        sesiPegawai();
       	$id = $this->session->userdata('Login');
		$this->data = array(
			'mnu' => $this->m_crud->data('m_menu'),
			'app' => $this->m_crud->data('m_web'),
			'usr' => $this->m_crud->getByID('t_pegawai','Login', $id),
			'info' => $this->m_crud->data('t_info'),
			'pengumuman' => $this->m_crud->data('t_pengumuman',"Untuk ='1'")
		);
	}	

	public function index() {
		redirect('pengaturan/dashboard','refresh');
	}
	
	public function dashboard() {

/*		
		$this->data = array(
			['breadcrumb'] = $this->mybreadcrumb->render()
		);*/
		$this->template->display('backend/pengaturan/dashboard', $this->data);
	}

	public function menu()
	{
		$this->template->display('backend/pengaturan/menu_list', $this->data);
	}		

	public function jenispegawai()
	{
		$this->template->display('backend/pengaturan/jenispegawai_list', $this->data);
	}	
	public function jeniskeluar()
	{
		$this->template->display('backend/pengaturan/jeniskeluar_list', $this->data);
	}	

	public function wilayah()
	{
		$data = array(
			'mnu_list' => $this->m_crud->data('m_wilayah')
		);
		$this->load->view('backend/pengaturan/wilayah_list', $data);
	}

}
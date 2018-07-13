<?php
class Custom404 extends CI_Controller
{
	public function __construct()
	{
	    parent::__construct();
	     sesiPegawai();
     	$id = $this->session->userdata('Login');
		$this->data = array(
			'content' => 'errors/html/error_404',
			'mnu' => $this->m_crud->data('m_menu'),
			'app' => $this->m_crud->data('m_web'),
			'usr' => $this->m_crud->getByID('t_pegawai','Login',$id),
			'info' => $this->m_crud->data('t_info'),
			'pengumuman' => $this->m_crud->data('t_pengumuman',"Untuk ='1'")
		);
	}
	public function index()
	{
		$this->output->set_status_header('404');
/*		$this->data['content'] = 'custom404view';  // View name*/
		$this->template->display('error', $this->data);
	}
}
?>
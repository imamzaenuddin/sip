<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template {
	protected $_ci;
	function __construct()
	{
		$this->_ci =&get_instance();
	}
	function display($template,$data=null,$data2=null)
	{
	   //$data['_header']=$this->_ci->load->view('template/header',$data, true);
	   $data['_navigator']=$this->_ci->load->view('template/navigator',$data, true);
	   $data['_menu']=$this->_ci->load->view('template/menu',$data, true);
	   $data['_content']=$this->_ci->load->view($template,$data, true);
	   $data['_footer']=$this->_ci->load->view('template/footer',$data, true);
	   $this->_ci->load->view('/template.php',$data);
	}
}
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
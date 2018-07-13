<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed!');
	
/**
 * @author Rijal Tanjung
 * 
 * @license MIT
 * 
 * @category Third Party Library for auto generated breadcrumb
 * 
 * @access Load the library, then $this->breadcrumb->generate()
 * 
 * @link https://github.com/devrijal/Codeigniter-auto-breadcrumb
 * 
 * Created since august 2015
 * 
 */
class Breadcrumbs {
	public $ci;
	
	public function __construct()
	{
		$this->ci = &get_instance();
	}
	
	/**
	 * @param string $total_segments	// count all uri segments and collect the uri data
	 * @param string $title 			// as the viewed url title
	 * @param string $url				// generate the url till the current segments
	 * @param array $segments			// collect all data of segments including the url for each segments
	 * 
	 * @return string Template $segments	// generate the view format and ready to parsed to view
	 * 
	 * @example echo $this->breadcrumb->generate()	// echo the script , then your breadcrumb is finish
	 */
	public function generate()
	{
		$total_segments = $this->ci->uri->total_segments();
		
		for ($i=1; $i<=$total_segments; $i++){
			
			$url = base_url();
				
			for ($a=count($total_segments-$i); $a<=$i; $a++) {
				$url .= $this->ci->uri->segment($a)."/";
			}
				
			$title =  ucwords(str_replace('-',' ' , $this->ci->uri->segment($i)));
			
			$segments[] = (object) array(
					'url' => $url,
					'title' => $title
			);
		}
		
		return $this->template($segments);
	}
	
	/**
	 * @param string $html				// create the template
	 * @param array $segment			// the given data of url collection
	 * @param string $optional_link		// static link if you need, will appear on the right side of the breadcrumb
	 * 
	 * @return string $html
	 */
	function template($segment, $optional_link = null)
	{
		
		$html = '<div class="breadcrumbs" id="breadcrumbs">';
		$html .= '<ul class="breadcrumb"><i class="ace-icon fa fa-home home-icon"></i>';
		$html .= '<li><a href="'.base_url().'">Home</a></li>';
		
		// $segment must be an array object
		for ($i=0; $i<count($segment); $i++) {
			$html .= '<li><a href="'.$segment[$i]->url.'">'.$segment[$i]->title.'</a></li>';
		}
		$html .= '</ul>';
		
		// if optional link is required
		if (!empty($optional_link)) {
			$html .= '<ul class="w-breadcrumb-right">';
			$html .= '<li><a href="'.$optional_link->url.'">'.$optional_link->text.'</a></li>';
			$html .= '</ul>';
		}
		
		$html .= '</div>';
		
		return $html;
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data = array();

		$data['parent_category'] = $this->welcome_model->get_all_category();

		$data['value']=$this->load->view('content_page/test_content',$data,true);
		$this->load->view('master',$data);
	}


}

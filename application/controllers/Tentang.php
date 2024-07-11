<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Tentang Page';
		$data['active_menu'] = 'tentang';
		$data['content'] = $this->load->view('tentang/tentang', '', true);

		$this->load->view('template/template', $data);
	}
	public function usert()
	{
		$data['title'] = 'Information';
		$data['active_menu'] = 'usert';
		$data['content'] = $this->load->view('tentang/tentang', '', true);

		$this->load->view('template/user_template', $data);
	}
	
	
		
}

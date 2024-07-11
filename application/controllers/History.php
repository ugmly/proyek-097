<?php
defined('BASEPATH') or exit('No direct script access allowed');
class History extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('tiket_model');
  }

  public function history()
	{
    $data['tiket'] = $this->tiket_model->get_user_tiket($this->session->userdata('user')['username']);
		$data['title'] = 'history';
		$data['active_menu'] = 'history';
		$data['content'] = $this->load->view('History/history', $data, true);

		$this->load->view('template/user_template', $data);
	}
}	

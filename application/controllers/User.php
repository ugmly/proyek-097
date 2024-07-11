<?php
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Tiket_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function login() {
        $this->load->view('Users/login');
    }

    public function login_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->User_model->get_user($username, $password);

        if ($user) {
            $this->session->set_userdata('user', $user);
            if ($user['role'] == 1) {
                redirect('beranda/index');
            } else {
                redirect('beranda/dashboard');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('user/login');
        }
    }

    public function add_user() {
        $this->load->view('Users/add_user');
    }

    public function add_user_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $this->User_model->add_user($username, $password, $role);
        redirect('user/login');
    }

    // public function buy_tiket() {
    //     $data['judul_film_options'] = ['Film 1', 'Film 2']; // Replace with actual options
    //     $data['jadwal_tayang_options'] = ['10:00 AM', '2:00 PM']; // Replace with actual options
    //     $data['kategori_tiket_options'] = ['Regular', 'VIP']; // Replace with actual options
    //     $data['metode_pembayaran_options'] = ['Credit Card', 'Cash']; // Replace with actual options
    //     $data['title'] = 'Home Page';
	// 	$data['active_menu'] = 'home';
    //     $data['content'] = $this->load->view('tiket/buy_tiket', '', true);
	
	// 	$this->load->view('template/user_template', $data);
    //     // $this->load->view('template/user_template', $data);
    //     // $this->load->view('tiket/buy_tiket', $data);
    // }

    // public function buy_tiket_process() {
    //     $user = $this->session->userdata('user');
        
    //     if ($user) {
    //         $data = [
    //             'user_id' => $user['id'],
    //             'no_kursi' => $this->input->post('no_kursi'),
    //             'judul_film' => $this->input->post('judul_film'),
    //             'jadwal_tayang' => $this->input->post('jadwal_tayang'),
    //             'kategori_tiket' => $this->input->post('kategori_tiket'),
    //             'harga_tiket' => $this->input->post('harga_tiket'),
    //             'metode_pembayaran' => $this->input->post('metode_pembayaran'),
    //             'tanggal' => $this->input->post('tanggal'),
    //             'status' => 'pending'
    //         ];

    //         $this->Tiket_model->buy_tiket($data);
    //         redirect('user/dashboard');
    //     } else {
    //         redirect('user/login');
    //     }
    // }

    public function logout() {
        $this->session->sess_destroy();
        redirect('user/login');
    }

    
}

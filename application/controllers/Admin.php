<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tiket_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Approve Tiket';
        $data['active_menu'] = 'pending_tiket';
        $data['pending_tiket'] = $this->Tiket_model->get_pending_tiket(); // Mengambil data tiket yang statusnya pending
        $data['content'] = $this->load->view('tiket/approve_tiket', $data, true); // Mengirimkan $data ke view approve_tiket

        $this->load->view('template/template', $data); // Memuat template dengan data yang telah dipersiapkan
    }

    public function dashboard()
    {
        $user = $this->session->userdata('user');

        if ($user && $user['role'] == 1) {
            $data['tickets'] = $this->Tiket_model->get_all_tickets(); // Misalnya, mengambil semua tiket
            $this->load->view('templates/template', [
                'title' => 'Admin Dashboard',
                'content' => 'admin/dashboard',
                'tickets' => $data['tickets']
            ]);
        } else {
            redirect('user/login');
        }
    }

    public function approve($id)
    {
        $result = $this->Tiket_model->approve_tiket($id);
        if ($result) {
            $this->session->set_flashdata('success', 'Tiket berhasil disetujui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyetujui tiket.');
        }
        redirect('admin');
    }

    public function reject($id)
    {
        $result = $this->Tiket_model->reject_tiket($id);
        if ($result) {
            $this->session->set_flashdata('success', 'Tiket berhasil ditolak.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menolak tiket.');
        }
        redirect('admin');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user/login');
    }
}

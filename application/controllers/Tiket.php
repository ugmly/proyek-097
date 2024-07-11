<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tiket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tiket_model'); // Memuat model Tiket_model
	}

	public function data_tiket() {
    // Only get tickets that are not rejected
    $data['tiket'] = $this->tiket_model->get_all_tickets_excluding_rejected();
    $data['title'] = 'List Data Pemesanan Tiket';
    $data['active_menu'] = 'data_tiket';
    $data['content'] = $this->load->view('tiket/list_tiket', $data, true);
    $this->load->view('template/template', $data);
}

	// public function data_tiket()
	// {
	// 	$data['title'] = 'Data Tiket';
	// 	$data['active_menu'] = 'data_tiket';
	// 	$data['tiket'] = $this->tiket_model->get_all_tiket();
	// 	$data['content'] = $this->load->view('tiket/list_tiket', $data, true);
	// 	$this->load->view('template/template', $data);
	// }
	public function search_tiket()
	{
		$keyword = $this->input->post('keyword');
		$data['title'] = 'Data Tiket';
		$data['active_menu'] = 'data_tiket';
		$data['tiket'] = $this->tiket_model->search_data_tiket($keyword);
		$data['keyword'] = $keyword;
		$data['content'] = $this->load->view('tiket/list_tiket', $data, true);

		$this->load->view('template/template', $data);
	}

	public function create_tiket()
	{
		$this->form_validation->set_rules('no_kursi', 'No. Kursi', 'required', ['required' => 'Kolom %s wajib diisi.']);
		$this->form_validation->set_rules('judul_film', 'Judul Film', 'required', ['required' => 'Kolom %s harus diisi.']);
		$this->form_validation->set_rules('jadwal_tayang', 'Jadwal Tayang', 'required', ['required' => 'Kolom %s harus diisi.']);
		$this->form_validation->set_rules('kategori_tiket', 'Kategori', 'required', ['required' => 'Kolom %s harus diisi.']);
		$this->form_validation->set_rules('harga_tiket', 'Harga', 'required|numeric', ['required' => 'Kolom %s harus diisi.', 'numeric' => 'Kolom %s harus berisi harga.']);
		$this->form_validation->set_rules('metode_pembayaran', 'Pembayaran', 'required', ['required' => 'Kolom %s wajib diisi.']);
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required', ['required' => 'Kolom %s wajib diisi.']);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Tambah Tiket';
			$data['active_menu'] = 'data_tiket';
			$table_name = 'tiket'; // Update this with your actual table name
			$data['judul_film_options'] = $this->tiket_model->get_enum_values($table_name, 'judul_film');
			$data['jadwal_tayang_options'] = $this->tiket_model->get_enum_values($table_name, 'jadwal_tayang');
			$data['kategori_tiket_options'] = $this->tiket_model->get_enum_values($table_name, 'kategori_tiket');
			$data['metode_pembayaran_options'] = $this->tiket_model->get_enum_values($table_name, 'metode_pembayaran');
			$data['content'] = $this->load->view('tiket/form_tiket', $data, true);
			$this->load->view('template/template', $data);
		} else {
			$data = [
				'no_kursi' => $this->input->post('no_kursi'),
				'judul_film' => $this->input->post('judul_film'),
				'jadwal_tayang' => $this->input->post('jadwal_tayang'),
				'kategori_tiket' => $this->input->post('kategori_tiket'),
				'harga_tiket' => $this->input->post('harga_tiket'),
				'metode_pembayaran' => $this->input->post('metode_pembayaran'),
				'tanggal' => $this->input->post('tanggal')
			];
			$insert = $this->tiket_model->insert_tiket($data);
			if ($insert) {
				$this->session->set_flashdata('success', 'Data tiket berhasil ditambahkan.');
			} else {
				$this->session->set_flashdata('error', 'Data tiket gagal ditambahkan.');
			}
			redirect('tiket/data_tiket');
		}
	}


	public function edit_tiket($id)
	{
		// Validate form input
		$this->form_validation->set_rules('no_kursi', 'No. Kursi', 'required', ['required' => 'Kolom %s wajib diisi.']);
		$this->form_validation->set_rules('judul_film', 'Judul Film', 'required', ['required' => 'Kolom %s harus diisi.']);
		$this->form_validation->set_rules('jadwal_tayang', 'Jadwal Tayang', 'required', ['required' => 'Kolom %s harus diisi.']);
		$this->form_validation->set_rules('kategori_tiket', 'Kategori', 'required', ['required' => 'Kolom %s harus diisi.']);
		$this->form_validation->set_rules('harga_tiket', 'Harga', 'required|numeric', ['required' => 'Kolom %s harus diisi.', 'numeric' => 'Kolom %s harus berisi harga.']);
		$this->form_validation->set_rules('metode_pembayaran', 'Pembayaran', 'required', ['required' => 'Kolom %s wajib diisi.']);
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required', ['required' => 'Kolom %s wajib diisi.']);

		// Load existing ticket data for editing
		// $ticket = $this->tiket_model->get_ticket_by_id($id);

		if ($this->form_validation->run() == false) {
			// Form validation failed, load edit form with existing data
			$data['title'] = 'Edit Tiket';
			$data['active_menu'] = 'data_tiket';
			$data['tiket'] = $this->tiket_model->get_tiket_by_id($id);
			$data['judul_film_options'] = $this->tiket_model->get_enum_values('tiket', 'judul_film');
			$data['jadwal_tayang_options'] = $this->tiket_model->get_enum_values('tiket', 'jadwal_tayang');
			$data['kategori_tiket_options'] = $this->tiket_model->get_enum_values('tiket', 'kategori_tiket');
			$data['metode_pembayaran_options'] = $this->tiket_model->get_enum_values('tiket', 'metode_pembayaran');
			$data['users'] = $this->tiket_model->get_enum_values('tiket', 'kategori_tiket');
			$data['content'] = $this->load->view('tiket/edit_tiket', $data, true);
			$this->load->view('template/template', $data);
		} else {
			// Form validation passed, update ticket data
			$tiket = $this->tiket_model->get_tiket_by_id($id);
			$user = $tiket['user'];
			$data = [
				'user' => $user,
				'no_kursi' => $this->input->post('no_kursi'),
				'judul_film' => $this->input->post('judul_film'),
				'jadwal_tayang' => $this->input->post('jadwal_tayang'),
				'kategori_tiket' => $this->input->post('kategori_tiket'),
				'harga_tiket' => $this->input->post('harga_tiket'),
				'metode_pembayaran' => $this->input->post('metode_pembayaran'),
				'tanggal' => $this->input->post('tanggal')
			];
			$update = $this->tiket_model->update_tiket($id, $data);

			if ($update) {
				$this->session->set_flashdata('success', 'Data tiket berhasil diperbarui.');
			} else {
				$this->session->set_flashdata('error', 'Gagal memperbarui data tiket.');
			}
			redirect('tiket/data_tiket');
		}
	}


	public function delete_tiket($id)
	{
		$delete = $this->tiket_model->delete_tiket($id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Data Tiket berhasil dihapus.');
		} else {
			$this->session->set_flashdata('error', 'Data Tiket gagal dihapus.');
		}
		redirect('tiket/data_tiket');
	}

	public function print_tiket($id) {
    $data['tiket'] = $this->tiket_model->get_tiket_by_id($id);
    $this->load->view('tiket/print_tiket', $data);
 }





public function buy_tiket() {
	$this->form_validation->set_rules('no_kursi', 'No. Kursi', 'required', ['required' => 'Kolom %s wajib diisi.']);
	$this->form_validation->set_rules('judul_film', 'Judul Film', 'required', ['required' => 'Kolom %s harus diisi.']);
	$this->form_validation->set_rules('jadwal_tayang', 'Jadwal Tayang', 'required', ['required' => 'Kolom %s harus diisi.']);
	$this->form_validation->set_rules('kategori_tiket', 'Kategori', 'required', ['required' => 'Kolom %s harus diisi.']);
	$this->form_validation->set_rules('harga_tiket', 'Harga', 'required|numeric', ['required' => 'Kolom %s harus diisi.', 'numeric' => 'Kolom %s harus berisi harga.']);
	$this->form_validation->set_rules('metode_pembayaran', 'Pembayaran', 'required', ['required' => 'Kolom %s wajib diisi.']);
	$this->form_validation->set_rules('tanggal', 'Tanggal', 'required', ['required' => 'Kolom %s wajib diisi.']);

	if ($this->form_validation->run() == false) {
			$data['title'] = 'Beli Tiket';
			$data['active_menu'] = 'Admin';
			$table_name = 'tiket'; // Update this with your actual table name
			$data['judul_film_options'] = $this->tiket_model->get_enum_values($table_name, 'judul_film');
			$data['jadwal_tayang_options'] = $this->tiket_model->get_enum_values($table_name, 'jadwal_tayang');
			$data['kategori_tiket_options'] = $this->tiket_model->get_enum_values($table_name, 'kategori_tiket');
			$data['metode_pembayaran_options'] = $this->tiket_model->get_enum_values($table_name, 'metode_pembayaran');
			$data['content'] = $this->load->view('tiket/buy_tiket', $data, true);
			$this->load->view('template/user_template', $data);
	} else {
			$data = [
				'user' => $this->session->userdata('user')['username'],	
					'no_kursi' => $this->input->post('no_kursi'),
					'judul_film' => $this->input->post('judul_film'),
					'jadwal_tayang' => $this->input->post('jadwal_tayang'),
					'kategori_tiket' => $this->input->post('kategori_tiket'),
					'harga_tiket' => $this->input->post('harga_tiket'),
					'metode_pembayaran' => $this->input->post('metode_pembayaran'),
					'tanggal' => $this->input->post('tanggal'),
					'bukti_pembayaran' =>'index',
					'status' => 'pending' // Set status to pending
			];
			$insert = $this->tiket_model->buy_tiket($data);
			if ($insert) {
					$this->session->set_flashdata('success', 'Tiket berhasil dibeli dan menunggu persetujuan.');
			} else {
					$this->session->set_flashdata('error', 'Pembelian tiket gagal.');
			}
			redirect('tiket/buy_tiket');
	}
}

public function logout() {
	$this->session->sess_destroy();
	redirect('user/login');
}


}

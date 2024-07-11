<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tiket_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	// Method untuk mengambil semua data mahasiswa
	public function get_all_tiket()
	{
		$query = $this->db->get('tiket');
		return $query->result_array();
	}
	// Method untuk mengambil data mahasiswa sesuai pencarian
	public function search_data_tiket($keyword)
	{
		$this->db->like('id', $keyword);
		$this->db->or_like('no_kursi', $keyword);
		$this->db->or_like('judul_film', $keyword);
		$this->db->or_like('jadwal_tayang', $keyword);
		$this->db->or_like('kategori_tiket', $keyword);
		$this->db->or_like('harga_tiket', $keyword);
		$this->db->or_like('metode_pembayaran', $keyword);
		$this->db->or_like('tanggal', $keyword);
		$query = $this->db->get('tiket');
		return $query->result_array();
	}

	// Method untuk mengambil data barang berdasarkan ID
	public function get_tiket_by_id($id)
	{
		$query = $this->db->get_where('tiket', ['id' => $id]);
		return $query->row_array();
	}

	public function get_user_tiket($user){
		$this->db->like('user', $user);
		$query = $this->db->get('tiket');
		return $query->result_array();
	}


	// Fungsi untuk mengambil nilai enum dari kolom tertentu
	public function get_enum_values($table, $column)
	{
		$query = $this->db->query("SHOW COLUMNS FROM $table LIKE '$column'");
		if ($query->num_rows() > 0) {
			$result = $query->row()->Type;
			preg_match("/^enum\((.*)\)$/", $result, $matches);
			$enum = explode(",", str_replace("'", "", $matches[1]));
			return $enum;
		}
		return [];
	}

	// Fungsi untuk memasukkan data tiket ke dalam tabel
	public function insert_tiket($data)
	{
		return $this->db->insert('tiket', $data);
	}

	// Update tiket data based on ID
	public function update_tiket($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tiket', $data);
	}


	// Method untuk menghapus data barang
	public function delete_tiket($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tiket');
	}

	public function buy_tiket($data)
	{
		return $this->db->insert('tiket', $data);
	}


	public function get_pending_tiket()
    {
        $this->db->where('status', 'pending'); // Mengambil tiket yang statusnya pending
        return $this->db->get('tiket')->result_array();
    }



		public function approve_tiket($id) {
			$this->db->set('status', 'approved');
			$this->db->where('id', $id);
			return $this->db->update('tiket');
	}
	
	public function reject_tiket($id) {
			$this->db->set('status', 'rejected');
			$this->db->where('id', $id);
			return $this->db->update('tiket');
	}
	
	public function get_all_tickets_excluding_rejected() {
    $this->db->where('status !=', 'rejected');
    return $this->db->get('tiket')->result_array();
}






    // public function approve_tiket($id)
    // {
    //     // Lakukan proses untuk menyetujui tiket dengan mengubah status, misalnya:
    //     $data = ['status' => 'approved'];
    //     $this->db->where('id', $id);
    //     return $this->db->update('tiket', $data);
    // }

    // public function reject_tiket($id)
    // {
    //     // Lakukan proses untuk menolak tiket dengan mengubah status, misalnya:
    //     $data = ['status' => 'rejected'];
    //     $this->db->where('id', $id);
    //     return $this->db->update('tiket', $data);
    // }
}

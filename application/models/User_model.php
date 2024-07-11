<?php
class User_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_user($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }

    public function add_user($username, $password, $role) {
        $data = array(
            'username' => $username,
            'password' => $password,
            'role' => $role
        );
        return $this->db->insert('users', $data);
    }
}

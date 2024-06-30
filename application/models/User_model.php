<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->row_array();
    }

    public function create_user($username, $password) {
        $data = array(
            'username' => $username,
            'password' => md5($password)
        );
        return $this->db->insert('users', $data);
    }
}
?>

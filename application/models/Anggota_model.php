<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load database untuk penggunaan model ini
    }

    public function insert_anggota($nama, $alamat, $date) {
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tanggal_lahir' => $date,
            'level' => 0 // Sesuaikan dengan kebutuhan Anda
        );

        $this->db->insert('anggota', $data); // Masukkan data ke tabel anggota

        return $this->db->affected_rows() > 0; // Mengembalikan true jika data berhasil dimasukkan
    }
    public function get_all_anggota() {
        return $this->db->get('anggota')->result();
    }

    public function count_all_anggota() {
        return $this->db->count_all_results('anggota');
    }
}
?>

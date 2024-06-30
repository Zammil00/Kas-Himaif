<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_total_kas() {
        $query = $this->db->query("SELECT SUM(jumlah) AS kas FROM kas");
        return $query->row_array();
    }

    public function get_total_keluar() {
        $query = $this->db->query("SELECT SUM(jumlah) AS keluar FROM keluar");
        return $query->row_array();
    }

    public function get_jumlah_anggota() {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah_anggota FROM anggota");
        return $query->row_array()['jumlah_anggota'];
    }

    public function get_jumlah_keluar() {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah_keluar FROM keluar");
        return $query->row_array()['jumlah_keluar'];
    }

}
?>

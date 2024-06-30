<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->library('session');
        // Load helper untuk URL (jika belum ada)
        $this->load->helper('url');
    }

    public function index() {
        // if (!$this->session->userdata('logged_in')) {
        //     redirect('login'); // Redirect ke halaman login jika tidak ada sesi login
        // }

        // Ambil data dari model untuk dashboard
        $data['total_kas'] = $this->Dashboard_model->get_total_kas();
        $data['total_keluar'] = $this->Dashboard_model->get_total_keluar();
        $data['jumlah_anggota'] = $this->Dashboard_model->get_jumlah_anggota();
        $data['jumlah_keluar'] = $this->Dashboard_model->get_jumlah_keluar();

        // Load view dengan data yang sudah diambil
        $this->load->view('dashboard', $data);
    }

}
?>

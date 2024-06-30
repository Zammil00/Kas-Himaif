<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model dan library yang diperlukan
        $this->load->model('Anggota_model'); // Sesuaikan dengan nama model yang Anda buat
    }

    public function tambah() {
        // Periksa session untuk otorisasi
        // if (!$this->session->userdata('password')) {
        //     redirect('login'); // Redirect ke halaman login jika tidak ada session password
        // }

        // Inisialisasi variabel $data
        $data = array();

        // Handle form submission
        if ($this->input->post('kirim')) {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $date = $this->input->post('date');

            // Proses validasi atau pengolahan data tambahan disini sebelum disimpan ke database

            // Panggil model untuk menyimpan data
            $result = $this->Anggota_model->insert_anggota($nama, $alamat, $date);

            if ($result) {
                $data['message'] = "Data Sudah Masuk";
            } else {
                $data['message'] = "Data Gagal Masuk";
            }
        }
        // Load view untuk tampilan halaman tambah anggota
        $this->load->view('tambah_anggota', $data); // Sesuaikan dengan struktur view Anda
    }

    public function daftar() {
        $data['anggota'] = $this->Anggota_model->get_all_anggota();
        $this->load->view('daftar_anggota', $data);
    }

}
?>

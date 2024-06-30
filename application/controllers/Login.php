<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('login');
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->User_model->get_user($username);

        if ($user && $password == $user['password']) {
            $this->session->set_userdata('username', $username);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'gagal');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        redirect('login');
    }
}
?>

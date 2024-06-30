<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Load library session
        $this->load->helper('url'); // Load helper url
    }

    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->view('welcome_message');
    }
}
?>

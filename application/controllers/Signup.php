<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('signup_view');
    }

    public function register() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pengguna.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_view');
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('pengguna', $data);
            redirect('login');
        }
    }
} 
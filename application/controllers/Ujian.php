<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller
{
    public function index()
    {
        // Load model untuk interaksi dengan database
        $this->load->model('ujian_model');

        // Ambil daftar pertanyaan dan jawabannya
        $data['questions'] = $this->ujian_model->get_questions_with_options();

        // URL untuk halaman umum/pendaftaran
        $data['registration_url'] = site_url('umum');

        // Load view dengan data pertanyaan
        $this->load->view('public/template/header');
        $this->load->view('lctp/index', $data);
    }
}

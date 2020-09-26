<?php
class Tabel_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('siswa/tabel_siswa');
    }
}

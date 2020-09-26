<?php
class Tambah_data_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Msiswa', 'msiswa');
    }

    public function index()
    {
        $data['judul_web'] = 'Data Akademik';
        $data['tampil'] = $this->db->get('tb_siswa')->result();
        $tmp['content']  = $this->load->view('siswa/form_tambah_data', $data, TRUE);
        $this->load->view('layout', $tmp);
    }

    function simpan_data()
    {
        $this->msiswa->Tambahsiswa();
        $this->session->set_flashdata('sukses', 'Data Berhasil Di Tambahkan');
        redirect('Siswa');
    }
}

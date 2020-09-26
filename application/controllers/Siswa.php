<?php
class Siswa extends CI_Controller
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
        $tmp['content']  = $this->load->view('siswa/siswa', $data, TRUE);
        $this->load->view('layout', $tmp);
    }

    function simpan_data()
    {
        $this->msiswa->Tambahsiswa();
        $this->session->set_flashdata('sukses', 'Data Berhasil Di Tambahkan');
        redirect('Siswa');
    }

    function hapus($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('Error', "Data gagal di hapus");
            redirect('Siswa');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('tb_siswa');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('Siswa');
        }
    }
}

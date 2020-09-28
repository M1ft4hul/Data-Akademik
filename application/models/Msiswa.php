<?php

class Msiswa extends CI_Model
{
    public function Tambahsiswa()
    {
        $data['nis'] = $this->input->post('nis', true);
        $data['nisn'] = $this->input->post('nisn', true);
        $data['nama'] = $this->input->post('nama', true);
        $data['tempat_lahir'] = $this->input->post('tempat_lahir', true);
        $data['jk'] = $this->input->post('jk', true);
        $data['kelas'] = $this->input->post('kelas', true);
        $data['agama'] = $this->input->post('agama', true);
        $data['status_dalam_keluarga'] = $this->input->post('status_dalam_keluarga', true);
        $data['anak_ke'] = $this->input->post('anak_ke', true);
        $data['no_telpon'] = $this->input->post('no_telpon', true);
        $data['asal_sekolah'] = $this->input->post('asal_sekolah',  true);
        $data['alamat_siswa'] = $this->input->post('alamat_siswa',  true);
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir',  true);
        $data['tanggal_terima'] = $this->input->post('tanggal_terima',  true);
        $data['nama_ayah'] = $this->input->post('nama_ayah',  true);
        $data['nama_ibu'] = $this->input->post('nama_ibu',  true);
        $data['alamat_ortu'] = $this->input->post('alamat_ortu',  true);
        $data['tlp_ortu'] = $this->input->post('tlp_ortu',  true);
        $data['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah',  true);
        $data['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu',  true);
        $data['nama_wali'] = $this->input->post('nama_wali',  true);
        $data['alamat_wali'] = $this->input->post('alamat_wali',  true);
        $data['telp_wali'] = $this->input->post('telp_wali',  true);
        $data['pekerjaan_wali'] = $this->input->post('pekerjaan_wali',  true);
        $data['password'] = $this->input->post('password',  true);

        $this->db->insert('tb_siswa', $data);
    }

    public function Editsiswa()
    {
        $where['id'] = $this->input->post('id');
        $data['nis'] = $this->input->post('nis', true);
        $data['nisn'] = $this->input->post('nisn', true);
        $data['nama'] = $this->input->post('nama', true);
        $data['tempat_lahir'] = $this->input->post('tempat_lahir', true);
        $data['jk'] = $this->input->post('jk', true);
        $data['kelas'] = $this->input->post('kelas', true);
        $data['agama'] = $this->input->post('agama', true);
        $data['status_dalam_keluarga'] = $this->input->post('status_dalam_keluarga', true);
        $data['anak_ke'] = $this->input->post('anak_ke', true);
        $data['no_telpon'] = $this->input->post('no_telpon', true);
        $data['asal_sekolah'] = $this->input->post('asal_sekolah',  true);
        $data['alamat_siswa'] = $this->input->post('alamat_siswa',  true);
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir',  true);
        $data['tanggal_terima'] = $this->input->post('tanggal_terima',  true);
        $data['nama_ayah'] = $this->input->post('nama_ayah',  true);
        $data['nama_ibu'] = $this->input->post('nama_ibu',  true);
        $data['alamat_ortu'] = $this->input->post('alamat_ortu',  true);
        $data['tlp_ortu'] = $this->input->post('tlp_ortu',  true);
        $data['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah',  true);
        $data['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu',  true);
        $data['nama_wali'] = $this->input->post('nama_wali',  true);
        $data['alamat_wali'] = $this->input->post('alamat_wali',  true);
        $data['telp_wali'] = $this->input->post('telp_wali',  true);
        $data['pekerjaan_wali'] = $this->input->post('pekerjaan_wali',  true);
        $data['password'] = $this->input->post('password',  true);

        $this->db->update('tb_siswa', $data, $where);
    }
}

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="container">



            <div class="row layout-top-spacing" id="cancel-row">
                <div id="ftFormArray" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Form Data Siswa</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="<?php echo base_url('tambah_data_siswa') ?>" method="POST" class="simple-example" action="javascript:void(0);" novalidate>
                                <div class="form-row">
                                    <div class="col-md-12 mb-4">
                                        <label for="nis">NIS</label>
                                        <input type="text" class="form-control" id="nis" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data NIS
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="nisn">NISN</label>
                                        <input type="text" class="form-control" id="nisn" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data NISN
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="fullname">Nama Siswa</label>
                                        <input type="text" class="form-control" id="fullname" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Nama Siswa
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="fullname">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="fullname" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Tempat Lahirmu
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4"">
                                        <p class=" mb-4">Jenis Kelamin</p>

                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-classic-danger">
                                                <input type="radio" class="new-control-input" name="custom-radio-2">
                                                <span class="new-control-indicator"></span>Laki-laki
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-classic-success">
                                                <input type="radio" class="new-control-input" name="custom-radio-2">
                                                <span class="new-control-indicator"></span>Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4"">
                                        <p>Agama</p>
                                        <select class=" form-control basic">
                                        <option selected="selected">Islam</option>
                                        <option>Hindu</option>
                                        <option>Katolik</option>
                                        <option>Buddha</option>
                                        <option>Konghucu</option>
                                        <option>protestan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="status">Status Dalam Keluarga</label>
                                        <input type="text" class="form-control" id="status" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Status Dalam Keluarga
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="anak">Anak ke :</label>
                                        <input type="text" class="form-control" id="anak" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Anak ke :
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="tlp">No. Telepon</label>
                                        <input type="text" class="form-control" id="tlp" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi No. Telepon
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="sekolah">Asal Sekolah</label>
                                        <input type="text" class="form-control" id="sekolah" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Asal Sekolah
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="alamat">Alamat Siswa</label>
                                        <input type="text" class="form-control" id="alamat" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum IsiAlamat Siswa
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" value="0000-00-00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <label>Tanggal Diterima di sekolah</label>
                                        <input type="date" value="0000-00-00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <label for="ayah">Nama Ayah</label>
                                        <input type="text" class="form-control" id="ayah" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Nama Ayah
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="ibu">Nama Ibu</label>
                                        <input type="text" class="form-control" id="ibu" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Nama Ibu
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="alamat_ortu">Alamat Orang Tua</label>
                                        <input type="text" class="form-control" id="alamat_ortu" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Alamat Orang Tua
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="hp">No telepon Orang Tua</label>
                                        <input type="text" class="form-control" id="hp" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi No telepon Orang Tua
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" id="pekerjaanAyah" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Pekerjaan Ayah
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" id="pekerjaanIbu" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Pekerjaan Ibu
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="wali">Nama Wali</label>
                                        <input type="text" class="form-control" id="wali" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Nama Wali
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="nohpwali">Nomor telepon Wali</label>
                                        <input type="text" class="form-control" id="nohpwali" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Nomor telepon Wali
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <label for="pekerjaanWali">Pekerjaan wali</label>
                                        <input type="text" class="form-control" id="PekerjaanWali" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Pekerjaan wali
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="" value="" required>
                                        <div class="valid-feedback">
                                            Ok Mantapsss!
                                        </div>
                                        <div class="invalid-feedback">
                                            Kamu Belum Isi Data Password
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary submit-fn mt-2" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->
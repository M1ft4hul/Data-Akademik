<div class="layout-px-spacing">
    <div class="sweetalert" data-sweetalert="<?php echo $this->session->flashdata('sukses'); ?>"></div>
    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <a data-toggle="modal" data-target="#tambah" class="btn btn-secondary btn-rounded mb-2" href="<?php echo site_url('tambah_data_siswa') ?>">Tambah Data Siswa </a>
                <div class="table-responsive mb-4 mt-4">
                    <table id="default-ordering" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Agama</th>
                                <th>Tempat Lahir</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tampil as $a) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $a->nama ?></td>
                                    <td><?php echo $a->jk ?></td>
                                    <td><?php echo $a->kelas ?></td>
                                    <td><?php echo $a->agama ?></td>
                                    <td><?php echo $a->tempat_lahir ?></td>
                                    <td class=" text-center">
                                        <a class="btn btn-warning btn-rounded mb-2">Edit </a>
                                        <a data-toggle="modal" data-target="#detail" class="btn btn-info btn-rounded mb-2">Detail</a>
                                        <a href="<?php echo site_url('Siswa/hapus/' . $a->id); ?>" class="btn btn-danger btn-rounded mb-2">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Agama</th>
                                <th>Tempat Lahir</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- modal tambah Data -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-account-card-details"></i> Detail Data Siswa</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('siswa/simpan_data') ?>" method="POST">
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" class="form-control" id="nis" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="nisn">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="nisn" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="fullname">Nama Siswa</label>
                                <input type="text" name="nama" class="form-control" id="fullname" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="fullname">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="fullname" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4"">
                                        <p class=" mb-4">Jenis Kelamin</p>

                                <div class="n-chk">
                                    <label class="new-control new-radio radio-classic-danger">
                                        <input type="radio" class="new-control-input" name="jk" value="L">
                                        <span class="new-control-indicator"></span>Laki-laki
                                    </label>
                                </div>

                                <div class="n-chk">
                                    <label class="new-control new-radio radio-classic-success">
                                        <input type="radio" class="new-control-input" name="jk" value="P">
                                        <span class="new-control-indicator"></span>Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="fullname">Kelas</label>
                                <input type="text" name="kelas" class="form-control" id="fullname" placeholder="" value="" required>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="fullname">Agama</label>
                                <input type="text" name="agama" class="form-control" id="fullname" placeholder="" value="" required>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="status">Status Dalam Keluarga</label>
                                <input type="text" name="status_dalam_keluarga" class="form-control" id="status" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="anak">Anak ke :</label>
                                <input type="text" name="anak_ke" class="form-control" id="anak" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="tlp">No. Telepon</label>
                                <input type="text" name="no_telpon" class="form-control" id="tlp" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="sekolah">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" id="sekolah" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="alamat">Alamat Siswa</label>
                                <input type="text" name="alamat_siswa" class="form-control" id="alamat" placeholder="" value="" required>

                            </div>

                            <div class="col-md-6 mb-4">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="0000-00-00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label>Tanggal Diterima di sekolah</label>
                                <input type="date" name="tanggal_terima" value="0000-00-00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="ayah">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" id="ayah" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="ibu">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="ibu" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="alamat_ortu">Alamat Orang Tua</label>
                                <input type="text" name="alamat_ortu" class="form-control" id="alamat_ortu" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="hp">No telepon Orang Tua</label>
                                <input type="text" name="tlp_ortu" class="form-control" id="hp" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaanAyah" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" id="pekerjaanIbu" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="wali">Nama Wali</label>
                                <input type="text" name="nama_wali" class="form-control" id="wali" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="wali">Alamat Wali</label>
                                <input type="text" name="alamat_wali" class="form-control" id="wali" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="nohpwali">Nomor telepon Wali</label>
                                <input type="text" name="telp_wali" class="form-control" id="nohpwali" placeholder="" value="" required>

                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="pekerjaanWali">Pekerjaan wali</label>
                                <input type="text" name="pekerjaan_wali" class="form-control" id="PekerjaanWali" placeholder="" value="" required>

                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="" value="" required>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger btn-rounded" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                            <button type="submit" class="btn btn-outline-primary btn-rounded">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal akhir tambah data -->

    <!-- modal Detail Data -->
    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-account-card-details"></i> Detail Data Siswa</h5>
                </div>
                <div class="modal-body">
                    <table width="100%" style="font-size:14px">
                        <tr>
                            <td width="150">NIS</td>
                            <td width="10">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="150">NISN</td>
                            <td width="10">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="150">Nama Siswa</td>
                            <td width="10">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Status Dalam Keluarga</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No Telpon Siswa</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat Siswa</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tanggal Di terima</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ayah</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ibu</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat Orang Tua</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nomor Telpon</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Wali</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat Wali</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Wali</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger btn-rounded" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal akhir detail -->
</div>

<!--  END CONTENT AREA  -->
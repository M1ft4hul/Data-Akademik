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
                                        <a data-toggle="modal" data-target="#detail<?= $a->id; ?>" class="btn btn-info btn-rounded mb-2">Detail</a>
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
                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-account-card-details"></i> Tambah Data Siswa</h5>
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

    <!-- modal edit Data -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-account-card-details"></i> Edit Data Siswa</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('siswa/edit_data') ?>" method="POST">
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <label for="nis">NIS</label>
                                <input type="hidden" name="id" value="<?php echo $a->id; ?>" class="form-control">
                                <input type="text" name="nis" value="<?php echo $a->nis ?>" class="form-control" id="nis" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="nisn">NISN</label>
                                <input type="text" name="nisn" value="<?php echo $a->nisn ?>" class="form-control" id="nisn" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="fullname">Nama Siswa</label>
                                <input type="text" name="nama" value="<?php echo $a->nama ?>" class="form-control" id="fullname" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="fullname">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="<?php echo $a->tempat_lahir ?>" class="form-control" id="fullname" placeholder="" value="" required>

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
                                <input type="text" name="kelas" value="<?php echo $a->kelas ?>" class="form-control" id="fullname" placeholder="" value="" required>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="fullname">Agama</label>
                                <input type="text" name="agama" value="<?php echo $a->agama ?>" class="form-control" id="fullname" placeholder="" value="" required>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="status">Status Dalam Keluarga</label>
                                <input type="text" name="status_dalam_keluarga" value="<?php echo $a->status_dalam_keluarga ?>" class="form-control" id="status" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="anak">Anak ke :</label>
                                <input type="text" name="anak_ke" value="<?php echo $a->anak_ke ?>" class="form-control" id="anak" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="tlp">No. Telepon</label>
                                <input type="text" name="no_telpon" value="<?php echo $a->no_telpon ?>" class="form-control" id="tlp" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="sekolah">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" value="<?php echo $a->asal_sekolah ?>" class="form-control" id="sekolah" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="alamat">Alamat Siswa</label>
                                <input type="text" name="alamat_siswa" value="<?php echo $a->alamat_siswa ?>" class="form-control" id="alamat" placeholder="" value="" required>

                            </div>

                            <div class="col-md-6 mb-4">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="<?php echo $a->tanggal_lahir ?>" value="0000-00-00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label>Tanggal Diterima di sekolah</label>
                                <input type="date" name="tanggal_terima" value="<?php echo $a->tanggal_terima ?>" value="0000-00-00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="ayah">Nama Ayah</label>
                                <input type="text" name="nama_ayah" value="<?php echo $a->nama_ayah ?>" class="form-control" id="ayah" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="ibu">Nama Ibu</label>
                                <input type="text" name="nama_ibu" value="<?php echo $a->nama_ibu ?>" class="form-control" id="ibu" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="alamat_ortu">Alamat Orang Tua</label>
                                <input type="text" name="alamat_ortu" value="<?php echo $a->alamat_ortu ?>" class="form-control" id="alamat_ortu" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="hp">No telepon Orang Tua</label>
                                <input type="text" name="tlp_ortu" value="<?php echo $a->tlp_ortu ?>" class="form-control" id="hp" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" value="<?php echo $a->pekerjaan_ayah ?>" class="form-control" id="pekerjaanAyah" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" value="<?php echo $a->pekerjaan_ibu ?>" class="form-control" id="pekerjaanIbu" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="wali">Nama Wali</label>
                                <input type="text" name="nama_wali" value="<?php echo $a->nama_wali ?>" class="form-control" id="wali" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="wali">Alamat Wali</label>
                                <input type="text" name="alamat_wali" value="<?php echo $a->alamat_wali ?>" class="form-control" id="wali" placeholder="" value="" required>

                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="nohpwali">Nomor telepon Wali</label>
                                <input type="text" name="telp_wali" value="<?php echo $a->telp_wali ?>" class="form-control" id="nohpwali" placeholder="" value="" required>

                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="pekerjaanWali">Pekerjaan wali</label>
                                <input type="text" name="pekerjaan_wali" value="<?php echo $a->pekerjaan_wali ?>" class="form-control" id="PekerjaanWali" placeholder="" value="" required>

                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="<?php echo $a->password ?>" class="form-control" id="password" placeholder="" value="" required>

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
    <!-- modal akhit edit data -->

    <!-- modal Detail Data -->
    <?php
    foreach ($tampil as $a) {
    ?>
        <div class="modal fade" id="detail<?= $a->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <td><?php echo $a->nis ?></td>
                            </tr>
                            <tr>
                                <td width="150">NISN</td>
                                <td width="10">:</td>
                                <td><?php echo $a->nisn ?></td>
                            </tr>
                            <tr>
                                <td width="150">Nama Siswa</td>
                                <td width="10">:</td>
                                <td><?php echo $a->nama ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td><?php echo $a->tempat_lahir ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php $t = $a->jk;
                                    if ($t == 'L') {
                                        echo "Laki-laki";
                                    } else {
                                        echo "Perempuan";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td><?php echo $a->kelas ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?php echo $a->agama ?></td>
                            </tr>
                            <tr>
                                <td>Status Dalam Keluarga</td>
                                <td>:</td>
                                <td><?php echo $a->status_dalam_keluarga ?></td>
                            </tr>
                            <tr>
                                <td>Anak Ke</td>
                                <td>:</td>
                                <td><?php echo $a->anak_ke ?></td>
                            </tr>
                            <tr>
                                <td>No Telpon Siswa</td>
                                <td>:</td>
                                <td><?php echo $a->no_telpon ?></td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td>:</td>
                                <td><?php echo $a->asal_sekolah ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Siswa</td>
                                <td>:</td>
                                <td><?php echo $a->alamat_siswa ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><?php echo $a->tanggal_lahir ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Di terima</td>
                                <td>:</td>
                                <td><?php echo $a->tanggal_terima ?></td>
                            </tr>
                            <tr>
                                <td>Nama Ayah</td>
                                <td>:</td>
                                <td><?php echo $a->nama_ayah ?></td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td>:</td>
                                <td><?php echo $a->nama_ibu ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ayah</td>
                                <td>:</td>
                                <td><?php echo $a->pekerjaan_ayah ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ibu</td>
                                <td>:</td>
                                <td><?php echo $a->pekerjaan_ibu ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Orang Tua</td>
                                <td>:</td>
                                <td><?php echo $a->alamat_ortu ?></td>
                            </tr>
                            <tr>
                                <td>Nomor Telpon</td>
                                <td>:</td>
                                <td><?php echo $a->tlp_ortu ?></td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td><?php echo $a->nama_wali ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Wali</td>
                                <td>:</td>
                                <td><?php echo $a->alamat_wali ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Wali</td>
                                <td>:</td>
                                <td><?php echo $a->pekerjaan_wali ?></td>
                            </tr>
                            <tr>
                                <td>No Hp Wali</td>
                                <td>:</td>
                                <td><?php echo $a->telp_wali ?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><?php echo $a->password ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger btn-rounded" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- modal akhir detail -->
</div>

<!--  END CONTENT AREA  -->
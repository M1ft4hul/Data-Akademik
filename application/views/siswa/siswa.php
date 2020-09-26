<div class="layout-px-spacing">
    <div class="sweetalert" data-sweetalert="<?php echo $this->session->flashdata('sukses'); ?>"></div>
    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <a class="btn btn-secondary btn-rounded mb-2" href="<?php echo site_url('tambah_data_siswa') ?>">Tambah Data Siswa </a>
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
                                <th class="invisible"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- modal detail -->
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
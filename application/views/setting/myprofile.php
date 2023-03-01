<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <!-- Profile -->
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="..." class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md text-left">
                            <h5 class="card-title font-weight-bold text-primary "><?= $user['name']; ?>
                                <small>
                                    <span class="badge badge-pill badge-success"><?= $user['role']; ?></span>
                                </small>
                            </h5>
                            <h5 class="pb-2">
                                <small>
                                    <?php
                                    if ($user['approval'] == "review") { ?>
                                        <span class="badge badge-pill badge-warning "><?= $user['approval']; ?></span>
                                    <?php } else if ($user['approval'] == "approved") { ?>
                                        <span class="badge badge-pill badge-success "><?= $user['approval']; ?></span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-danger "><?= $user['approval']; ?></span>
                                    <?php } ?>
                                </small>
                            </h5>
                        </div>
                        
                    </div>
                    
                    <div class="row pb-4">
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-briefcase"></i><span class="badge badge-pill badge-primary "><?= $user['jabatan']; ?></span>
                            <!-- <span class="badge badge-pill badge-info">Dosen</span> -->
                        </div>
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-map-marker"></i> <?= $user['address']; ?>
                        </div>
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-envelope"></i> <?= $user['email']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Details -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Profile Details</h6>
                <a href="<?= base_url('setting/edit'); ?>" class="btn btn-outline-primary btn-md"><i class="fas fa-fw fa-user-edit"></i> Edit Profile</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">Full Name</div>
                <div class="col-md-6"><?= $user['name']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">NIK KTP</div>
                <div class="col-md-6"><?= $user['nik_ktp']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">NPWP</div>
                <div class="col-md-6"><?= $user['npwp']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Email Pribadi</div>
                <div class="col-md-6"><?= $user['email']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Email Undira</div>
                <div class="col-md-6"><?= $user['email_undira']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Jabatan</div>
                <div class="col-md-6">
                    <span class="badge badge-pill badge-primary"><?= $user['jabatan']; ?></span>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Address</div>
                <div class="col-md-6"><?= $user['address']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tempat Lahir</div>
                <div class="col-md-6"><?= $user['tmpt_lahir']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Lahir</div>
                <div class="col-md-6"><?= mediumdate_indo($user['tgl_lahir']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Telepon</div>
                <div class="col-md-6"><?= $user['telp']; ?></div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Begin Page Content Keluarga -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Keluarga</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Hubungan</th>
                            <th>Telpon</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Hubungan</th>
                            <th>Telpon</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($data_keluarga as $kel) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $kel['nama_keluarga']; ?></td>
                                <td><?= $kel['hubungan']; ?></td>
                                <td><?= $kel['telp_keluarga']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Begin Page Content Pendidikan -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pendidikan</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Jurusan & Universitas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Jurusan & Universitas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($data_pendidikan as $pen) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pen['tingkat_pendidikan']; ?></td>
                                <td><?= $pen['jurusan']; ?>
                                    <br><strong>(<?= $pen['universitas']; ?>)</strong>
                                </td>
                                <td><?= mediumdate_indo($pen['tgl_mulai']); ?></td>

                                <td><?= mediumdate_indo($pen['tgl_lulus']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Begin Page Content Pengalaman -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pengalaman Kerja</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Perusahaan</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Alasan Berhenti</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Perusahaan</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Alasan Berhenti</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($data_pengalaman as $penga) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $penga['nama_perusahaan']; ?></td>
                                <td><?= $penga['jabatan']; ?></td>
                                <td><?= mediumdate_indo($penga['tgl_mulai']); ?></td>
                                <td><?= mediumdate_indo($penga['tgl_berakhir']); ?></td>
                                <td><?= $penga['alasan_berhenti']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Begin Page Content Pelatihan -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pelatihan</h6>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pelatihan</th>
                            <th>Deskripsi Pelatihan</th>
                            <th>Lokasi Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pelatihan</th>
                            <th>Deskripsi Pelatihan</th>
                            <th>Lokasi Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($data_pelatihan as $pel) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pel['nama_pelatihan']; ?>
                                    <br><strong>(<?= $pel['organisasi_penerbit']; ?>)</strong>
                                </td>
                                <td><?= $pel['deskripsi']; ?></td>
                                <td><?= $pel['lokasi_pelatihan']; ?></td>
                                <td><?= mediumdate_indo($pel['tgl_mulai']); ?></td>
                                <td><?= mediumdate_indo($pel['tgl_selesai']); ?></td>
                                <td><?= $pel['status']; ?></td>
                                <td>
                                    <a href="<?= $pel['url']; ?>" class="btn btn-outline-primary">Link</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Begin Page Content Seminar -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Seminar</h6>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Seminar</th>
                            <th>Deskripsi Seminar</th>
                            <th>Lokasi Seminar</th>
                            <th>Tanggal Seminar</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Seminar</th>
                            <th>Deskripsi Seminar</th>
                            <th>Lokasi Seminar</th>
                            <th>Tanggal Seminar</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($data_seminar as $seminar) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $seminar['nama_seminar']; ?>
                                    <br><strong>(<?= $seminar['organisasi_pelaksana']; ?>)</strong>
                                </td>
                                <td><?= $seminar['deskripsi_seminar']; ?></td>
                                <td><?= $seminar['lokasi_seminar']; ?></td>
                                <td><?= mediumdate_indo($seminar['tgl_seminar']); ?></td>
                                <td>
                                    <a href="<?= $seminar['url']; ?>" class="btn btn-outline-primary">Link</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
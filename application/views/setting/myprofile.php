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
                    <h5 class="card-title font-weight-bold text-primary pb-2"><?= $user['name']; ?>
                        <small>
                            <span class="badge badge-pill badge-success"><?= $user['role']; ?></span>
                        </small>
                    </h5>
                    <div class="row pb-4">
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-briefcase"></i><span class="badge badge-pill badge-primary ">Manajer IT</span>
                            <span class="badge badge-pill badge-info">Dosen</span>
                        </div>
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-map-marker"></i> <?= $user['address']; ?>
                        </div>
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-envelope"></i> <?= $user['email']; ?>
                        </div>
                    </div>
                    <p class="card-text"><small class="text-muted">Karyawan Sejak <?= date('d F Y', $user['created_at']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Details -->
    <div class="card">
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
                    <span class="badge badge-pill badge-primary"><?= $user['jabatan_id']; ?></span>
                    <!-- <span class="badge badge-pill badge-info"><?= $user['jabatan_rangkap']; ?></span> -->
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
                <div class="col-md-6"><?= $user['tgl_lahir']; ?></div>
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
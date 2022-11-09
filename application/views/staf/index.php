<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- Profile -->
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-primary my-0"><?= $user['name']; ?></h5>
                    <span class="badge badge-pill badge-success mb-4">Staf</span>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-briefcase"></i> IT
                        </div>
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-map-marker"></i> Jakarta Barat, Indonesia
                        </div>
                        <div class="col-md-4 mb-2">
                            <i class="fas fa-fw fa-envelope"></i> <?= $user['email']; ?>
                        </div>
                    </div>
                    <p class="card-text mt-5"><small class="text-muted">Karyawan Sejak <?= date('d F Y', $user['created_at']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Profile Details</h6>
                <a href="#" class="btn btn-outline-primary btn-md"><i class="fas fa-fw fa-user-edit"></i> Edit Profile</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">Full Name</div>
                <div class="col-md-6"><?= $user['name']; ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">Email</div>
                <div class="col-md-6"><?= $user['email']; ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">Address</div>
                <div class="col-md-6">jakarta Barat</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">Contact Phone</div>
                <div class="col-md-6">085411253367</div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
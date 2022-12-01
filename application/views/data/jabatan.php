<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <a href="<?= base_url('add'); ?>" class="btn btn-outline-primary btn-md">Add New Jabatan</a>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Jabatan</th>
                            <th>Jabatan Rangkap</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Jabatan</th>
                            <th>Jabatan Rangkap</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($jabatan as $jab) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $jab['jabatan']; ?></td>
                                <td><?= $jab['jabatan_rangkap']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>jabatan/edit/<?= $jab['id']; ?>" class="btn btn-outline-success">Edit</a>
                                    <a href="<?= base_url(); ?>jabatan/hapus/<?= $jab['id']; ?>" class="btn btn-outline-danger" onclick="return confirm('yakin?');">Delete</a>
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
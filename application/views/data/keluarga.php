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
                <a href="<?= base_url('keluarga/addKeluarga'); ?>" class="btn btn-outline-primary btn-md">Add New Keluarga</a>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama</th>
                            <th>Hubungan</th>
                            <th>Telpon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama</th>
                            <th>Hubungan</th>
                            <th>Telpon</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($keluarga as $kel) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $kel['name']; ?></td>
                                <td><?= $kel['nama_keluarga']; ?></td>
                                <td><?= $kel['hubungan']; ?></td>
                                <td><?= $kel['telp_keluarga']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>keluarga/editkeluarga/<?= $kel['id_keluarga']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                                    <a href="<?= base_url(); ?>keluarga/hapuskeluarga/<?= $kel['id_keluarga']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin?');">Delete</a>
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
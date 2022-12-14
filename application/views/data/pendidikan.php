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
                <a href="<?= base_url('pendidikan/addPendidikan'); ?>" class="btn btn-outline-primary btn-md">Add New Pendidikan</a>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Jurusan & Universitas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Jurusan & Universitas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($pendidikan as $pendidik) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pendidik['name']; ?></td>
                                <td><?= $pendidik['tingkat_pendidikan']; ?></td>
                                <td><?= $pendidik['jurusan']; ?>
                                    <br><strong>(<?= $pendidik['universitas']; ?>)</strong>
                                </td>
                                <td><?= $pendidik['tgl_mulai']; ?></td>
                                <td><?= $pendidik['tgl_lulus']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>pendidikan/detailpendidikan/<?= $pendidik['id_pendidikan']; ?>" class="btn btn-outline-info btn-sm my-2">Detail</a>
                                    <a href="<?= base_url(); ?>pendidikan/hapuspendidikan/<?= $pendidik['id_pendidikan']; ?>" class="btn btn-outline-danger btn-sm my-2" onclick="return confirm('yakin?');">Delete</a>
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
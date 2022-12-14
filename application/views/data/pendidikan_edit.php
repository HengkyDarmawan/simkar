<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body" style="color: #000;">
            <form action="" method="post">
                <input type="hidden" name="id_pendidikan" value="<?= $pendidikan['id_pendidikan']; ?>">
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <select class="form-control" name="user_id">
                        <option value="">Select Pegawai</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id']; ?>" <?= $user['id'] == $pendidikan['user_id'] ? "selected" : null ?>><?= $user['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tingkat Pendidikan</label>
                    <input type="text" name="tingkat_pendidikan" class="form-control" value="<?= $pendidikan['tingkat_pendidikan']; ?>">
                    <?= form_error('tingkat_pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= $pendidikan['jurusan']; ?>">
                    <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Universitas</label>
                    <input type="text" name="universitas" class="form-control" value="<?= $pendidikan['universitas']; ?>">
                    <?= form_error('universitas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Alamat Universitas</label>
                    <input type="text" name="alamat_univ" class="form-control" value="<?= $pendidikan['alamat_univ']; ?>">
                    <?= form_error('alamat_univ', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" class="form-control" value="<?= $pendidikan['tgl_mulai']; ?>">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tgl_lulus" class="form-control" value="<?= $pendidikan['tgl_lulus']; ?>">
                    <?= form_error('tgl_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('pendidikan'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
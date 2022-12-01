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
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <select class="form-control" name="user_id">
                        <option value="">Select Karyawan</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id']; ?>"><?= $user['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Pelatihan</label>
                    <input type="text" name="nama_pelatihan" class="form-control">
                    <?= form_error('nama_pelatihan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Organisasi Penerbit</label>
                    <input type="text" name="organisasi_penerbit" class="form-control">
                    <?= form_error('organisasi_penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>URL Sertifikat</label>
                    <input type="text" name="url" class="form-control">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group" hidden>
                    <label>Status</label>
                    <input type="text" name="status" value="proses" class="form-control" placeholder="Status" readonly>
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('pelatihan'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
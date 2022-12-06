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
                    <label>Parent Jabatan</label>
                    <select class="form-control" name="parent_jabatan_id">
                        <option value="">Select Karyawan</option>
                        <?php foreach ($parentJabatan as $pj) : ?>
                            <option value="<?= $pj['id_parent_jabatan']; ?>"><?= $pj['parent_jabatan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name="jabatan" class="form-control">
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('jabatan'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
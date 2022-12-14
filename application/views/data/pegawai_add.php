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
                    <div class="row">
                        <div class="col">
                            <label>NIK KTP</label>
                            <input type="text" name="nik_ktp" class="form-control">
                            <?= form_error('nik_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>NIK Pegawai</label>
                            <input type="text" name="nik_karyawan" class="form-control">
                            <?= form_error('nik_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" name="name" class="form-control">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Email Pribadi</label>
                            <input type="text" name="email" class="form-control">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Email Undira</label>
                            <input type="text" name="email_undira" class="form-control">
                            <?= form_error('email_undira', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Tempat lahir</label>
                            <input type="text" name="tmpt_lahir" class="form-control">
                            <?= form_error('tmpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Agama</label>
                            <input type="text" name="agama" class="form-control">
                            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Alamat</label>
                            <input type="text" name="address" class="form-control">
                            <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Nomor Telpon (WA)</label>
                            <input type="text" name="telp" class="form-control">
                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control" name="jabatan_id">
                        <option value="">Select Jabatan</option>
                        <?php foreach ($jabatan as $jab) : ?>
                            <option value="<?= $jab['id_jabatan']; ?>"><?= $jab['jabatan']; ?></option>
                        <?php endforeach; ?>
                        <?= form_error('jabatan_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Bank</label>
                            <input type="text" name="nama_bank" class="form-control">
                            <?= form_error('nama_bank', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Nomor Rekening</label>
                            <input type="text" name="no_rek" class="form-control">
                            <?= form_error('no_rek', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>NPWP</label>
                    <input type="text" name="npwp" class="form-control">
                    <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>No BPJS Kesehatan</label>
                            <input type="text" name="no_bpjs_kesehatan" class="form-control">
                            <?= form_error('no_bpjs_kesehatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>No BPJS Ketenagakerjaan</label>
                            <input type="text" name="no_bpjs_ketenagakerjaan" class="form-control">
                            <?= form_error('no_bpjs_ketenagakerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div> -->
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role_id">
                        <option value="">Select role</option>
                        <?php foreach ($role as $rol) : ?>
                            <option value="<?= $rol['id']; ?>"><?= $rol['role']; ?></option>
                        <?php endforeach; ?>
                        <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('pegawai'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
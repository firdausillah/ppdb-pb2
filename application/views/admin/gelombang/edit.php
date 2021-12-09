<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><?= $title ? $title : 'Judul Page' ?></h3>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <?= form_open_multipart(base_url('admin/gelombang/update/' . $gelombang->id)) ?>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Gelombang</label>
                        <input type="text" class="form-control" name="gelombang" value="<?= $gelombang->gelombang ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tgl di Buka</label>
                        <input type="date" class="form-control" name="tgl_buka" value="<?= $gelombang->tgl_buka ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tgl di Tutup</label>
                        <input type="date" class="form-control" name="tgl_tutup" value="<?= $gelombang->tgl_tutup ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status" required id="">
                            <option <?= $gelombang->status == '1' ? 'selected' : '' ?> value="1">Aktif</option>
                            <option <?= $gelombang->status == '0' ? 'selected' : '' ?> value="0">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="<?= base_url() ?>admin/gelombang" class="btn btn-secondary btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
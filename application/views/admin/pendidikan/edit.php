<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><?= $title ? $title : 'Judul Page' ?></h3>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <?= form_open_multipart(base_url('admin/pendidikan/update/' . $pendidikan->id)) ?>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan" value="<?= $pendidikan->pendidikan ?>" required>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="<?= base_url() ?>admin/pendidikan" class="btn btn-secondary btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
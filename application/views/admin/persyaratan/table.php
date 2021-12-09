<div class="card">
    <div class="card-header">
        <h5 class="card-title"><?= $title; ?></h5>
        <div class="text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah persyaratan
            </button>
        </div>
    </div>

    <table id="myTable" class="table table-bordered table-responsive p-3">
        <thead>
            <tr>
                <th style="width:2%;">No</th>
                <th style="width:40%;">Persyaratan</th>
                <th style="width:40%;">Keterangan</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($syarat as $s => $sy) : ?>
                <tr>
                    <td><?= $s + 1; ?></td>
                    <td class="text-midle"><?= $sy->persyaratan; ?></td>
                    <td class="text-midle"><?= $sy->satuan; ?></td>
                    <td>
                        <a href="<?= base_url('admin/syarat/edit/' . $sy->id) ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('admin/syarat/delete/' . $sy->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Persyaratan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/syarat/save') ?>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-right">Persyaratan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="persyaratan" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-right">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="satuan" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
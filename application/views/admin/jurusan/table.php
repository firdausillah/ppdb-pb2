<div class="card">
    <div class="card-header">
        <h5 class="card-title"><?= $title; ?></h5>
        <!-- Button trigger modal -->
        <div class="text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Jurusan
            </button>
        </div>
    </div>
    <table id="myTable" class="table table-bordered table-responsive p-3">
        <thead>
            <tr>
                <th style="width:2%;">No</th>
                <th style="width:80%">Nama Jurusan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jurusan as $ju => $jur) : ?>
                <tr>
                    <td><?= $ju + 1; ?></td>
                    <td><?= $jur->jurusan ?></td>
                    <td>
                        <a href="<?= base_url('admin/jurusan/edit/' . $jur->id) ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('admin/jurusan/delete/' . $jur->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/jurusan/save') ?>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-right">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jurusan" required>
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
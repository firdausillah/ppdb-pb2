<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><?= $title ? $title : 'Judul Page' ?></h3>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Asal Sekolah
                    </button>
                </div>
                <table id="myTable" class="table table-bordered table-responsive p-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-midle">Nama Asal Sekolah</th>
                            <th class="text-midle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($asal_sekolah as $no => $gel) : ?>
                            <tr>
                                <td><?= $no + 1; ?></td>
                                <td><?= $gel->nama_asal_sekolah ?></td>
                                <td>
                                    <a href="<?= base_url('admin/asalsekolah/edit/' . $gel->id) ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url('admin/asalsekolah/delete/' . $gel->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Asal Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/asalsekolah/save') ?>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama Asal Sekolah</label>
                    <input type="text" class="form-control" name="nama_asal_sekolah" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
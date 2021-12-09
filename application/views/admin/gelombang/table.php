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
                        Tambah Gelombang Pendaftaran
                    </button>
                </div>
                <table id="myTable" class="table table-bordered table-responsive p-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-midle">Gelombang</th>
                            <th class="text-midle">Tanggal dibuka</th>
                            <th class="text-midle">Tanggal ditutup</th>
                            <th class="text-midle">Status</th>
                            <th class="text-midle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($gelombang as $no => $gel) : ?>
                            <tr>
                                <td><?= $no + 1; ?></td>
                                <td>Gelombang ke-<?= $gel->gelombang ?></td>
                                <td><?= $gel->tgl_buka ?></td>
                                <td><?= $gel->tgl_tutup ?></td>
                                <td><?= $gel->status == 1 ? '<span class="badge bg-success"> Dibuka </span>' : '<span class="badge bg-danger"> Ditutup </span>' ?></td>
                                <td>
                                    <a href="<?= base_url('admin/gelombang/edit/'.$gel->id) ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url('admin/gelombang/delete/'.$gel->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Gelombang Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/gelombang/save') ?>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Gelombang</label>
                    <input type="text" class="form-control" name="gelombang" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tgl di Buka</label>
                    <input type="date" class="form-control" name="tgl_buka" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tgl di Tutup</label>
                    <input type="date" class="form-control" name="tgl_tutup" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-control" name="status" required id="">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
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
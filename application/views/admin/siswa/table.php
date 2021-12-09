<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><?= $title ? $title : 'Judul Page' ?></h3>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-sm p-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-midle">Kode pendaftaran</th>
                                    <th class="text-midle">Nama Pendaftar</th>
                                    <th class="d-none d-xl-table-cell">Pembawa</th>
                                    <th class="text-midle">Status</th>
                                    <th class="text-midle">Daftar Ulang</th>
                                    <th class="text-midle">Asal Sekolah</th>
                                    <th class="text-midle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($siswa as $no => $s) : ?>
                                    <tr>
                                        <td><?= $no + 1; ?></td>
                                        <td><?= $s->kode_pendaftaran ?></td>
                                        <td><?= $s->nama ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $s->pembawa ?></td>
                                        <td>
                                            <!-- <a href="" class="tombol-validasi" data-toggle="modal" data-target=".bd-example-modal-sm" data-idsis="<?= $s->id ?>"> -->
                                            <!-- <a href="#<?= $s->status ?>" class="tombol-validasi" data-toggle="modal" data-target=".bd-example-modal-sm" data-idsis="<?= $s->status ?>"> -->
                                            <?php if ($s->status == 'Sudah Verifikasi') : ?>
                                                <span class="btn btn-success btn-pill btn-sm">Verifikasi</span>
                                            <?php else : ?>
                                                <span class="btn btn-secondary btn-pill btn-sm">Belum Verifikasi</span>
                                            <?php endif ?>
                                            <!-- </a> -->
                                        </td>
                                        <td>Rp<?= $s->daftar_ulang ?? number_format($s->daftar_ulang, 2, ',', '.') ?></td>
                                        <td><?= $s->nama_asal_sekolah ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>cetak/bukti/<?= $s->kode_pendaftaran ?>" target='_blank' class="btn btn-success btn-sm"><i class="fa fa-print"></i></a>
                                            <a href="<?= base_url('admin/siswa/edit/' . $s->id . '?page=pribadi') ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('admin/siswa/delete/' . $s->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
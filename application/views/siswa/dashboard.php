                <div class="container-fluid p-0">

                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><?= $title ? $title : 'Judul Page' ?></h3>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 ">
                            <!-- <div class="col-12 col-lg-4 d-flex"> -->
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Status Persyaratan</h5>
                                </div>
                                <div class="m-2">
                                    <table class="table my-0">
                                        <thead>
                                            <tr>
                                                <th>Persyaratan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($persyaratan as $key => $syarat) : ?>
                                                <tr>
                                                    <td><?= $syarat->persyaratan ?> <br>
                                                        <small class="text-info"><?= $syarat->satuan ?> Lembar</small>
                                                    </td>
                                                    <td>
                                                        <?php if (isset($persyaratan_siswa[$key]->id_siswa)) :
                                                            if ($persyaratan_siswa[$key]->id_siswa . $persyaratan_siswa[$key]->id_persyaratan != null && $persyaratan_siswa[$key]->status == 1) : ?>
                                                                <span class="badge bg-success">Sudah Lengkap</span>
                                                            <?php else : ?>
                                                                <span class="badge bg-danger">Belum Lengkap</span>
                                                            <?php endif ?>
                                                        <?php else : ?>
                                                            <span class="badge bg-danger">Belum Lengkap</span>
                                                        <?php endif ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <a href="<?= base_url() ?>cetak/bukti/<?= $siswa->kode_pendaftaran ?>" target='_blank' class="btn btn-primary btn-lg btn-block my-3"> <i data-feather="save"></i> Cetak Bukti Pendaftaran</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Biodata</h5>
                                </div>
                                <div class="card-body d-flex w-100">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- <div class="text-center">
                                                <img src="<?= base_url() ?>assets/img/avatars/user.png" width="200px" alt="">
                                            </div> -->
                                            <label for="" class="font-weight-bold">Data Pribadi</label>
                                            <div class="table-responsive">
                                                <table class="table table-striped my-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Kode Pendaftaran</td>
                                                            <td>:</td>
                                                            <td style="width:60%"><?= $siswa->kode_pendaftaran ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Lengkap</td>
                                                            <td>:</td>
                                                            <td><?= $siswa->nama ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <td>:</td>
                                                            <td><?= $siswa->nik_siswa ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nomor HP</td>
                                                            <td>:</td>
                                                            <td><?= $siswa->nohp ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jurusan Pilihan</td>
                                                            <td>:</td>
                                                            <td><?= $siswa->jurusan ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a href="<?= $img = base_url('uploads/img/siswa/' . $siswa->foto) ?>" class="pt-5">
                                                <img src="<?= $img ?>" height="150px" alt="" class="rounded">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="font-weight-bold">Data Ayah</label>
                                            <div class="table-responsive">
                                                <table class="table table-striped my-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nama Lengkap</td>
                                                            <td>:</td>
                                                            <td style="width:60%"><?= $siswa->nama_ayah ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <td>:</td>
                                                            <td><?= $siswa->nik_ayah ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <label for="" class="mt-4 font-weight-bold">Data Ibu</label>
                                            <div class="table-responsive">
                                                <table class="table table-striped my-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nama Lengkap</td>
                                                            <td>:</td>
                                                            <td style="width:60%"><?= $siswa->nama_ibu ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <td>:</td>
                                                            <td><?= $siswa->nik_ibu ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <label for="" class="mt-4 font-weight-bold">Data Wali</label>
                                            <div class="table-responsive">
                                                <table class="table table-striped my-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nama Lengkap</td>
                                                            <td>:</td>
                                                            <td style="width:60%"><?= $siswa->nama_wali ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <td>:</td>
                                                            <td><?= $siswa->nik_wali ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
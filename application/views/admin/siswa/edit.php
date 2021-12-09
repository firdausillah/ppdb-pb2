                <div class="container-fluid p-0">

                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3><?= $title ? $title : 'Judul Page' ?></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        HEADER
                                    </div> -->
                                    <div class="card-body">
                                        <?php $page = $_GET['page']; ?>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link <?= $page == 'pribadi' ? 'active' : ''; ?>" data-toggle="tab" href="#pribadi">Data Pribadi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= $page == 'ayah' ? 'active' : ''; ?>" data-toggle="tab" href="#ayah">Data Ayah</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= $page == 'ibu' ? 'active' : ''; ?>" data-toggle="tab" href="#ibu">Data Ibu</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= $page == 'wali' ? 'active' : ''; ?>" data-toggle="tab" href="#wali">Data Wali</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= $page == 'foto' ? 'active' : ''; ?>" data-toggle="tab" href="#foto">Foto</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= $page == 'persyaratan' ? 'active' : ''; ?>" data-toggle="tab" href="#persyaratan">Data persyaratan</a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div id="pribadi" class="container tab-pane <?= $page == 'pribadi' ? 'active' : 'fade'; ?>"><br>
                                                <form action="<?= base_url('admin/siswa/savePribadi/' . $siswa->id) ?>" method="POST">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="kode_pendaftaran">Kode Pendaftaran <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" disabled  id="kode_pendaftaran" value="<?= $siswa->kode_pendaftaran ?>" required placeholder="" readonly>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="password" id="password" value="<?= $siswa->password ?>" required placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $siswa->nama ?>" required placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="jk">Jenis Kelamin</label>
                                                            <select class="form-control" name="jk" id="jk">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <option <?= $siswa->jk == 'Laki-laki' ? 'selected' : '' ?> value="Laki-laki">Laki-laki</option>
                                                                <option <?= $siswa->jk == 'Perempuan' ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nisn">NISN</label>
                                                            <input type="number" class="form-control" name="nisn" id="nisn" value="<?= $siswa->nisn ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nik_siswa">NIK <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="nik_siswa" id="nik_siswa" value="<?= $siswa->nik_siswa ?>" required placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="no_kk">Nomor Kartu Keluarga <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="no_kk" id="no_kk" value="<?= $siswa->no_kk ?>" required placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="tempatlahir_siswa">Tempat lahir</label>
                                                            <input type="text" class="form-control" name="tempatlahir_siswa" id="tempatlahir_siswa" value="<?= $siswa->tempatlahir_siswa ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="tgllahir_siswa">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" name="tgllahir_siswa" id="tgllahir_siswa" value="<?= $siswa->tgllahir_siswa ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="noakte_lahir">Nomor Akte Kelahiran</label>
                                                            <input type="number" class="form-control" name="noakte_lahir" id="noakte_lahir" value="<?= $siswa->noakte_lahir ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="tinggi_badan">Tinggi Badan (cm)</label>
                                                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" value="<?= $siswa->tinggi_badan ?>" placeholder="cm">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="berat_badan">Berat Badan (kg)</label>
                                                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" value="<?= $siswa->berat_badan ?>" placeholder="kg">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="agama">Agama</label>
                                                            <select class="form-control" name="agama" id="agama">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <option value="Islam" <?= $siswa->agama == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                                                <option value="Kristen/Protestan" <?= $siswa->agama == 'Kristen/protestan' ? 'selected' : '' ?>>Kristen/Protestan</option>
                                                                <option value="Katholik" <?= $siswa->agama == 'Katholik' ? 'selected' : '' ?>>Katholik</option>
                                                                <option value="Hindu" <?= $siswa->agama == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                                                <option value="Budha" <?= $siswa->agama == 'Budha' ? 'selected' : '' ?>>Budha</option>
                                                                <option value="Khong Hu Cu" <?= $siswa->agama == 'Khong Hu Cu' ? 'selected' : '' ?>>Khong Hu Cu</option>
                                                                <option value="Kepercayaan Kpd Tuhan YME" <?= $siswa->agama == 'Kepercayaan Kpd Tuhan YME' ? 'selected' : '' ?>>Kepercayaan Kpd Tuhan YME</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="kewarganegaraan">Kewarganegaraan</label>
                                                            <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" value="<?= $siswa->kewarganegaraan ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nohp">Nomor HP <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="nohp" id="nohp" value="<?= $siswa->nohp ?>" required placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="alamat_siswa">Alamat Lengkap</label>
                                                            <input type="text" class="form-control" name="alamat_siswa" id="alamat_siswa" value="<?= $siswa->alamat_siswa ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="rt">RT</label>
                                                            <input type="text" class="form-control" name="rt" id="rt" value="<?= $siswa->rt ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="rw">RW</label>
                                                            <input type="text" class="form-control" name="rw" id="rw" value="<?= $siswa->rw ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="dusun">Dusun</label>
                                                            <input type="text" class="form-control" name="dusun" id="dusun" value="<?= $siswa->dusun ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="desa">Desa</label>
                                                            <input type="text" class="form-control" name="desa" id="desa" value="<?= $siswa->desa ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="kec">Kecamatan</label>
                                                            <input type="text" class="form-control" name="kec" id="kec" value="<?= $siswa->kec ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="kab">Kabupaten</label>
                                                            <input type="text" class="form-control" name="kab" id="kab" value="<?= $siswa->kab ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="tempat_tinggal">Tempat Tinggal</label>
                                                            <select class="form-control" name="tempat_tinggal">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($tempattinggal as $tinggal) : ?>
                                                                    <option value="<?= $tinggal->id ?>" <?= $siswa->tempat_tinggal == $tinggal->id ? 'selected' : '' ?>><?= $tinggal->tempattinggal ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="moda_transportasi">Moda Transportasi</label>
                                                            <select class="form-control" name="moda_transportasi">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($transportasi as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->moda_transportasi == $val->id ? 'selected' : '' ?>><?= $val->transportasi ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="anak_berapa">Anak ke-</label>
                                                            <input type="number" class="form-control" name="anak_berapa" id="anak_berapa" value="<?= $siswa->anak_berapa ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="punya_kip">Apakah Punya Kartu Indonesia Pintar (KIP)</label>
                                                            <select class="form-control" name="punya_kip">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <option value="Ya" <?= $siswa->punya_kip == 'Ya' ? 'selected' : '' ?>>Ya</option>
                                                                <option value="Tidak" <?= $siswa->punya_kip == 'Tidak' ? 'selected' : '' ?>>Tidak</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="sekolah_asal">Sekolah Asal <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="sekolah_asal" required id="sekolah_asal">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($sekolah_asal as $key => $p) : ?>
                                                                    <option value="<?= $p->id ?>" <?= $siswa->sekolah_asal == $p->id ? 'selected' : '' ?>><?= $p->nama_asal_sekolah ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="id_jurusan">Jurusan <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="id_jurusan" id="id_jurusan">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($jurusan as $key => $jur) : ?>
                                                                    <option value="<?= $jur->id ?>" <?= $siswa->id_jurusan == $jur->id ? 'selected' : '' ?>><?= $jur->jurusan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12 text-right">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="ayah" class="container tab-pane <?= $page == 'ayah' ? 'active' : 'fade'; ?>"><br>
                                                <form action="<?= base_url('admin/siswa/saveAyah/' . $siswa->id) ?>" method="POST">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nama_ayah">Nama Ayah <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?= $siswa->nama_ayah ?>" required placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nik_ayah">NIK Ayah</label>
                                                            <input type="number" class="form-control" name="nik_ayah" id="nik_ayah" value="<?= $siswa->nik_ayah ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="tgllahir_ayah">Tanggal Lahir Ayah</label>
                                                            <input type="date" class="form-control" name="tgllahir_ayah" id="tgllahir_ayah" value="<?= $siswa->tgllahir_ayah ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="pendidikan_ayah">Pendidikan Ayah</label>
                                                            <select class="form-control" name="pendidikan_ayah">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($pendidikan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->pendidikan_ayah == $val->id ? 'selected' : '' ?>><?= $val->pendidikan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="pekerjaan_ayah">Pekerjaan Ayah <span class="text-danger">*</span></label>
                                                            <select class="form-control" required name="pekerjaan_ayah">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($pekerjaan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->pekerjaan_ayah == $val->id ? 'selected' : '' ?>><?= $val->pekerjaan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="penghasilan_ayah">Penghasilan Ayah</label>
                                                            <select class="form-control" name="penghasilan_ayah">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($penghasilan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->penghasilan_ayah == $val->id ? 'selected' : '' ?>><?= $val->penghasilan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nohp_ayah">Nomor HP Ayah</label>
                                                            <input type="number" class="form-control" name="nohp_ayah" id="nohp_ayah" value="<?= $siswa->nohp_ayah ?>" required placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12 text-right">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="ibu" class="container tab-pane <?= $page == 'ibu' ? 'active' : 'fade'; ?>"><br>
                                                <form action="<?= base_url('admin/siswa/saveIbu/' . $siswa->id) ?>" method="POST">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nama_ibu">Nama Ibu <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?= $siswa->nama_ibu ?>" required placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nik_ibu">NIK Ibu</label>
                                                            <input type="number" class="form-control" name="nik_ibu" id="nik_ibu" value="<?= $siswa->nik_ibu ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="tgllahir_ibu">Tanggal Lahir Ibu</label>
                                                            <input type="date" class="form-control" name="tgllahir_ibu" id="tgllahir_ibu" value="<?= $siswa->tgllahir_ibu ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="pendidikan_ibu">Pendidikan Ibu</label>
                                                            <select class="form-control" name="pendidikan_ibu">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($pendidikan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->pendidikan_ibu == $val->id ? 'selected' : '' ?>><?= $val->pendidikan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="pekerjaan_ibu">Pekerjaan Ibu <span class="text-danger">*</span></label>
                                                            <select class="form-control" required name="pekerjaan_ibu">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($pekerjaan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->pekerjaan_ibu == $val->id ? 'selected' : '' ?>><?= $val->pekerjaan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="penghasilan_ibu">Penghasilan Ibu</label>
                                                            <select class="form-control" name="penghasilan_ibu">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($penghasilan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->penghasilan_ibu == $val->id ? 'selected' : '' ?>><?= $val->penghasilan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nohp_ibu">Nomor HP Ibu</label>
                                                            <input type="number" class="form-control" name="nohp_ibu" id="nohp_ibu" value="<?= $siswa->nohp_ibu ?>" required placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12 text-right">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="wali" class="container tab-pane <?= $page == 'wali' ? 'active' : 'fade'; ?>"><br>
                                                <form action="<?= base_url('admin/siswa/saveWali/' . $siswa->id) ?>" method="POST">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nama_wali">Nama Wali</label>
                                                            <input type="text" class="form-control" name="nama_wali" id="nama_wali" value="<?= $siswa->nama_wali ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nik_wali">NIK Wali</label>
                                                            <input type="number" class="form-control" name="nik_wali" id="nik_wali" value="<?= $siswa->nik_wali ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="tgllahir_wali">Tanggal Lahir Wali</label>
                                                            <input type="date" class="form-control" name="tgllahir_wali" id="tgllahir_wali" value="<?= $siswa->tgllahir_wali ?>" placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="pendidikan_wali">Pendidikan Wali</label>
                                                            <select class="form-control" name="pendidikan_wali">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($pendidikan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->pendidikan_wali == $val->id ? 'selected' : '' ?>><?= $val->pendidikan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="pekerjaan_wali">Pekerjaan Wali</label>
                                                            <select class="form-control" name="pekerjaan_wali">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($pekerjaan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->pekerjaan_wali == $val->id ? 'selected' : '' ?>><?= $val->pekerjaan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="penghasilan_wali">Penghasilan Wali</label>
                                                            <select class="form-control" name="penghasilan_wali">
                                                                <option value="">----Pilih Di Sini----</option>
                                                                <?php foreach ($penghasilan as $val) : ?>
                                                                    <option value="<?= $val->id ?>" <?= $siswa->penghasilan_wali == $val->id ? 'selected' : '' ?>><?= $val->penghasilan ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="nohp_wali">Nomor HP Wali</label>
                                                            <input type="number" class="form-control" name="nohp_wali" id="nohp_wali" value="<?= $siswa->nohp_wali ?>" required placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12 text-right">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="foto" class="container tab-pane <?= $page == 'foto' ? 'active' : 'fade'; ?>"><br>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <a href="<?= $img = base_url('uploads/img/siswa/' . $siswa->foto) ?>" target='_blank' class="pt-5">
                                                            <img src="<?= $img ?>" height="150px" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="persyaratan" class="container tab-pane <?= $page == 'persyaratan' ? 'active' : 'fade'; ?>"><br>
                                                <form action="<?= base_url('admin/siswa/savePersyaratan/' . $siswa->id) ?>" method="POST">
                                                    <?php foreach ($persyaratan as $key => $val) : ?>
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for=""><?= $val->persyaratan . ' <small class="text-success">' . $val->satuan . ' Lembar</small>' ?></label>
                                                                <select class="form-control" name="status[]" id="">
                                                                    <option value="">----Pilih Di Sini----</option>
                                                                    <?php if (isset($persyaratan_siswa[$key]->id_siswa)) : ?>
                                                                        <option <?= $persyaratan_siswa[$key]->id_siswa . $persyaratan_siswa[$key]->id_persyaratan != null && $persyaratan_siswa[$key]->status == 0 ? 'selected' : '' ?> value="0">Belum</option>
                                                                        <option <?= $persyaratan_siswa[$key]->id_siswa . $persyaratan_siswa[$key]->id_persyaratan != null && $persyaratan_siswa[$key]->status == 1 ? 'selected' : '' ?> value="1">Sudah</option>
                                                                    <?php else : ?>
                                                                        <option value="0">Belum</option>
                                                                        <option value="1">Sudah</option>
                                                                    <?php endif ?>

                                                                </select>
                                                                <input type="hidden" name="id_siswa[]" value="<?= $siswa->id ?>">
                                                                <input type="hidden" name="id_persyaratan[]" value="<?= $val->id ?>">
                                                            </div>
                                                        </div>
                                                    <?php endforeach ?>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="daftar_ulang">Daftar Ulang</label>
                                                        <input type="number" name="daftar_ulang" id="daftar_ulang" value="<?= $siswa->daftar_ulang ?>" class="form-control" placeholder="contoh: 50000/Tanpa Titik">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="tgl_daftar_ulang">Tanggal Daftar Ulang</label>
                                                        <input type="date" name="tgl_daftar_ulang" id="tgl_daftar_ulang" value="<?= $siswa->tgl_daftar_ulang ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="verifikasi">Status Verifikasi</label>
                                                        <select class="form-control" name="verifikasi">
                                                            <option value="">----Pilih Di Sini----</option>
                                                            <option value="Sudah Verifikasi" <?= $siswa->status == "Sudah Verifikasi" ? 'selected' : '' ?>>Sudah Verifikasi</option>
                                                            <option value="Belum Verifikasi" <?= $siswa->status == "Belum Verifikasi" ? 'selected' : '' ?>>Belum Verifikasi</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-6 text-left">
                                                        <label class="form-label" for="id_pembawa">Marketing <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="id_pembawa" required id="id_pembawa">
                                                            <option value="">----Pilih Di Sini----</option>
                                                            <?php foreach ($pembawa as $key => $p) : ?>
                                                                <option value="<?= $p->id ?>" <?= $siswa->id_pembawa == $p->id ? 'selected' : '' ?>><?= $p->nama_lengkap ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6 text-right">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
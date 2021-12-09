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
                                    <th class="text-midle">Username</th>
                                    <th class="text-midle">Role</th>
                                    <th class="text-midle">Aktifitas</th>
                                    <th class="text-midle">Keterangan</th>
                                    <th class="text-midle">Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($log_user as $no => $log) : ?>
                                    <tr>
                                        <td><?= $no + 1; ?></td>
                                        <td><?= $log->username ?></td>
                                        <td><?= $log->role ?></td>
                                        <td><?= $log->aktifitas ?></td>
                                        <td><?= $log->keterangan ?></td>
                                        <td><?= $log->time ?></td>
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
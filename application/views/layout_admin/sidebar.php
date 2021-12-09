<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="<?= base_url() ?>assets/index.html">
            <span class="align-middle">ADMIN PPDB</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <?php $url = $this->uri->segment(2); ?>
            <li class="sidebar-item <?= $url == 'dashboard' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url() ?>admin/dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item <?= $url == 'jurusan' || $url == 'gelombang' || $url == 'syarat' || $url == 'marketing' || $url == 'tempattinggal' || $url == 'transportasi' || $url == 'pendidikan' || $url == 'pekerjaan' || $url == 'penghasilan' || $url == 'asalsekolah' ? 'active' : '' ?>">
                <a data-target="#forms" data-toggle="collapse" class="sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle align-middle">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg> <span class="align-middle">Data Master</span>
                </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse <?= $url == 'jurusan' || $url == 'gelombang' || $url == 'syarat' || $url == 'marketing' || $url == 'tempattinggal' || $url == 'transportasi' || $url == 'pendidikan' || $url == 'pekerjaan' || $url == 'penghasilan' || $url == 'asalsekolah' ? 'show' : '' ?>" data-parent="#sidebar">
                    <li class="sidebar-item <?= $url == 'jurusan' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/jurusan">Jurusan</a></li>
                    <li class="sidebar-item <?= $url == 'gelombang' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/gelombang">Gelombang Pendaftaran</a></li>
                    <li class="sidebar-item <?= $url == 'syarat' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/syarat">Syarat Pendaftaran</a></li>
                    <li class="sidebar-item <?= $url == 'marketing' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/marketing">Marketing</a></li>
                    <li class="sidebar-item <?= $url == 'tempattinggal' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/tempattinggal">Tempat Tinggal</a></li>
                    <li class="sidebar-item <?= $url == 'transportasi' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/transportasi">Moda Transportasi</a></li>
                    <li class="sidebar-item <?= $url == 'pendidikan' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/pendidikan">Pendidikan</a></li>
                    <li class="sidebar-item <?= $url == 'pekerjaan' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/pekerjaan">Pekerjaan</a></li>
                    <li class="sidebar-item <?= $url == 'penghasilan' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/penghasilan">Penghasilan Orang Tua</a></li>
                    <li class="sidebar-item <?= $url == 'asalsekolah' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url() ?>admin/asalsekolah">Asal Sekolah</a></li>
                </ul>
            </li>

            <!-- <li class="sidebar-item <?= $url == 'siswa' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url() ?>admin/siswa">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Siswa</span>
                </a>
            </li> -->
            <li class="sidebar-item <?= $this->uri->segment(3) == 'sudahverifikasi' || $this->uri->segment(3) == 'belumverifikasi' ? 'active' : '' ?>">
                <a data-target="#siswa" data-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Siswa</span>
                </a>
                <ul id="siswa" class="sidebar-dropdown list-unstyled collapse <?= $this->uri->segment(3) == 'sudahverifikasi' || $this->uri->segment(3) == 'belumverifikasi' ? 'show' : '' ?>" data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('admin/siswa') ?>">Semua Siswa</a></li>
                    <li class="sidebar-item <?= $this->uri->segment(3) == 'sudahverifikasi' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url('admin/siswa/sudahverifikasi') ?>">Siswa Diverifikasi</a></li>
                    <li class="sidebar-item <?= $this->uri->segment(3) == 'belumverifikasi' ? 'active' : '' ?>"><a class="sidebar-link" href="<?= base_url('admin/siswa/belumverifikasi') ?>">Siswa Belum Verifikasi</a></li>
                </ul>
            </li>
            <li class="sidebar-item <?= $url == 'user' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url() ?>admin/user">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
                </a>
            </li>
            <li class="sidebar-item <?= $url == 'profile' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url() ?>admin/profile">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
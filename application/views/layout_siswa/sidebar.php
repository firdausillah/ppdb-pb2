<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="<?= base_url() ?>assets/index.html">
            <span class="align-middle">SMK PGRI PESANGGARAN</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url() ?>siswa/dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item <?= $this->uri->segment(2) == 'biodata' ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url() ?>siswa/biodata?page=pribadi">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Biodata</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
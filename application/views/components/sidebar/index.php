<aside class="bg-primary position-absolute top-0 bottom-0 start-0 overflow-auto" style="width: 15rem">
    <div class="d-flex justify-content-center align-items-center bg-primary-dark py-3">
        <img src="<?= base_url('assets/image/logo/logo34x33.png') ?>" alt="Logo App Spp" class="me-3">
        <span class="text-uppercase text-white fw-semibold m-0" style="font-size: 1.3rem;">SPP APP</span>
    </div>
    <div class="d-flex flex-column px-3 mt-4" style="overflow-y: auto;">
        <?php if ($this->session->userdata('user')->jabatan == 'Admin') : ?>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link text-white fw-semibold d-flex align-items-center active" style="border-radius: 0.7rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
            </ul>
            <div class="bg-primary-dark mt-3 rounded-4 py-2 px-3">
                <small class="text-white small">Master Data</small>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="<?= base_url('kategori') ?>" class="nav-link text-white fw-semibold d-flex align-items-center active2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4h6v8h-6z"></path>
                                <path d="M4 16h6v4h-6z"></path>
                                <path d="M14 12h6v8h-6z"></path>
                                <path d="M14 4h6v4h-6z"></path>
                            </svg>
                            Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('barang') ?>" class="nav-link text-white fw-semibold d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                                <path d="M12 12l8 -4.5"></path>
                                <path d="M8.2 9.8l7.6 -4.6"></path>
                                <path d="M12 12v9"></path>
                                <path d="M12 12l-8 -4.5"></path>
                            </svg>
                            Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('kelas') ?>" class="nav-link text-white fw-semibold d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                            </svg>
                            Kelas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('pengguna') ?>" class="nav-link text-white fw-semibold d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                            Pengguna
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-primary-dark mt-3 rounded-4 py-2 px-3">
                <small class="text-white small">Data Siswa</small>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="<?= base_url('siswa') ?>" class="nav-link text-white fw-semibold d-flex align-items-center active2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path>
                                <path d="M16.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
                                <path d="M18.5 19.5l2.5 2.5"></path>
                            </svg>
                            Siswa
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-primary-dark mt-3 rounded-4 py-2 px-3">
                <small class="text-white small">Transaksi</small>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="<?= base_url('pembayaran') ?>" class="nav-link text-white fw-semibold d-flex align-items-center active2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12"></path>
                                <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"></path>
                            </svg>
                            Pembayaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('dapur') ?>" class="nav-link text-white fw-semibold d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M16 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0"></path>
                                <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                <path d="M5 15v1m0 -8v1"></path>
                            </svg>
                            Dapur
                        </a>
                    </li>
                </ul>
            </div>
        <?php endif ?>
        <ul class="nav nav-pills flex-column mt-3">
            <li class="nav-item">
                <a href="<?= base_url('laporan') ?>" class="nav-link text-white fw-semibold d-flex align-items-center" style="border-radius: 0.7rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path>
                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                        <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path>
                    </svg>
                    Laporan
                </a>
            </li>
        </ul>
    </div>
</aside>
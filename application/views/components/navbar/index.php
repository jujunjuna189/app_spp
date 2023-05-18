<nav class="shadow-sm bg-white">
    <div class="container-fluid">
        <div class="d-flex justify-content-end py-3">
            <div class="text-end lh-1 me-3">
                <span class="fw-semibold"><?= $this->session->userdata('user')->nama_lengkap ?? '-' ?></span>
                <div>
                    <small><?= $this->session->userdata('user')->jabatan ?? '-' ?></small>
                </div>
            </div>
            <div class="dropdown">
                <div class="rounded-circle bg-dark cursor-pointer" style="width: 2rem; height: 2rem; cursor:pointer" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Ok
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?= base_url('login') ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
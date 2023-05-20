<div class="d-flex flex-wrap mt-3">
    <div class="py-4 px-4 border-dashed rounded-4 bg-white me-3 mt-3" style="padding-right: 7rem !important;">
        <small>Jumlah <b>Bayar</b> Pada Hari Ini</small>
        <div class="d-flex flex-wrap mt-3 align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
            </svg>
            <div class="ms-3">
                <span class="fw-semibold h3">
                    20 Orang
                </span>
            </div>
        </div>
    </div>
    <div class="py-4 px-4 border-dashed rounded-4 bg-white me-3 mt-3" style="padding-right: 7rem !important;">
        <small>Jumlah <b>Pemasukan</b></small>
        <div class="d-flex flex-wrap mt-3 align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
            </svg>
            <div class="ms-3">
                <span class="fw-semibold h3">
                    9jt Rupiah
                </span>
            </div>
        </div>
    </div>
    <div class="py-4 px-4 border-dashed rounded-4 bg-white me-3 mt-3" style="padding-right: 7rem !important;">
        <small>Jumlah <b>Pengeluaran</b></small>
        <div class="d-flex flex-wrap mt-3 align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-dollar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                <path d="M12 3v3m0 12v3"></path>
            </svg>
            <div class="ms-3">
                <span class="fw-semibold h3">
                    2jt Rupiah
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Date -->
<div class="d-flex my-4">
    <div class="border bg-white rounded-2 px-2 py-1 me-3">
        <span class="fw-bold"><?= date('l') ?></span>
    </div>
    <div class="border bg-white rounded-2 px-2 py-1 me-3">
        <span class="fw-bold"><?= date('d F Y') ?></span>
    </div>
</div>
<!-- Data Table -->
<div class="card rounded-4 border-dark">
    <div class="card-body">
        <div class="px-2">
            Data yang bayar pada hari ini
            <hr>
            <?php foreach ($pembayaran as $val) :  ?>
                <div class="px-3">
                    <div class="border border-dark rounded-4 mt-3 p-3 d-flex flex-wrap justify-content-between">
                        <div class="d-flex align-items-center">
                            <div style="width: 2.5rem; height: 2.5rem" class="rounded-circle bg-dark"></div>
                            <span class="ms-3 fw-semibold"><?= $val->nama_lengkap ?></span>
                        </div>
                        <div class="d-flex">
                            <div class="border rounded-5 h-100"></div>
                            <div class="ms-4">
                                <span>Nominal</span>
                                <div class="fw-bolder">
                                    <?= $val->nominal ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
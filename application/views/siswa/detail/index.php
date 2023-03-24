<div class="d-flex flex-wrap">
    <div class="card rounded-4">
        <div class="card-body">
            <div class="d-flex flex-wrap">
                <div>
                    <div class="fw-semibold">
                        <table>
                            <tr>
                                <td class="pe-5">Nama Lengkap</td>
                                <td>: <?= $siswa->nama_lengkap ?></td>
                            </tr>
                            <tr>
                                <td class="pe-5">Kategori</td>
                                <td>: <?= $this->kategori_model->getById($siswa->id_kategori)->jenis_kategori ?? '-' ?></td>
                            </tr>
                            <tr>
                                <td class="pe-5">Kelas</td>
                                <td>: <?= $this->kelas_model->getById($siswa->id_kelas)->nama_kelas  ?? '-' ?></td>
                            </tr>
                            <tr>
                                <td class="pe-5">Alamat</td>
                                <td>: <?= $siswa->alamat ?></td>
                            </tr>
                            <tr>
                                <td class="pe-5">No Hanphone</td>
                                <td>: <?= $siswa->no_hp ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-4 ms-0 ms-md-3 flex-grow-1">
        <div class="card-body">

        </div>
    </div>
</div>
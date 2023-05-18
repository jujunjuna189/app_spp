<div class="mt-3">
    <div class="card rounded-4 p-3">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="<?= base_url('pembayaran/pembayaran') ?>" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    Tambah
                </a>
            </div>
            <hr>
            <!-- Table -->
            <div class="table-responsive mt-4 rounded-4 border border-dark-subtle">
                <table class="table border-dark-subtle">
                    <thead class="text-primary table-light fw-bold">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Kategori</th>
                            <th>Nominal</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-dark-emphasis">
                        <?php foreach ($pembayaran as $index => $val) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $val->tanggal ?></td>
                                <td><?= $val->nama_lengkap ?></td>
                                <td><?= $val->nama_kelas ?></td>
                                <td><?= $val->jenis_kategori ?></td>
                                <td><?= $val->nominal ?></td>
                                <td><?= $val->alamat ?></td>
                                <td>.</td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
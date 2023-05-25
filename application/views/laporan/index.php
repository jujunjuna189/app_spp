<div class="mt-3">
    <div class="card rounded-4 p-3">
        <div class="card-body">
            <div class="d-flex justify-content-between" style="gap: 10px">
                <div class="d-flex align-items-end gap-4">
                    <div class="form-group">
                        <label for="Dari Tanggal">Dari Tanggal</label>
                        <input type="date" name="from_date" id="from_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Dari Tanggal">Sampai Tanggal</label>
                        <input type="date" name="last_date" id="last_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <span onclick="onFilter()" class="btn btn-primary py-2 px-4">Filter</span>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-add">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-spreadsheet" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M8 11h8v7h-8z"></path>
                            <path d="M8 15h8"></path>
                            <path d="M11 11v7"></path>
                        </svg>
                        Excel
                    </a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M9 9l1 0"></path>
                            <path d="M9 13l6 0"></path>
                            <path d="M9 17l6 0"></path>
                        </svg>
                        PDF
                    </a>
                </div>
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
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-dark-emphasis">
                        <?php foreach ($data as $index => $val) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $val->tanggal ?></td>
                                <td><?= $val->nama_lengkap ?></td>
                                <td><?= $val->nama_kelas ?></td>
                                <td><?= $val->jenis_kategori ?></td>
                                <td><?= $controller->formatterCurrency($val->nominal) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Script -->
<script>
    const config = {
        currentUrl: '<?= base_url('laporan') ?>',
    }

    const element = {
        from_date: '#from_date',
        last_date: '#last_date',
    }

    const onFilter = () => {
        let from_date = $(element.from_date).val();
        let last_date = $(element.last_date).val();

        let concat_url = config.currentUrl + '?from_date=' + from_date + '&last_date=' + last_date;

        location.href = concat_url;
    }
</script>
<div class="mt-3">
    <div class="card rounded-4 p-3">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add">
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
                            <th>Nama Barang</th>
                            <th>Nama Suplier</th>
                            <th>Harga</th>
                            <th>Jumlah Beli</th>
                            <th>Jumlah Keseluruhan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-dark-emphasis">
                        <?php foreach ($dapur as $index => $val) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $val->tgl ?></td>
                                <td><?= $val->nama_barang ?></td>
                                <td><?= $val->nama_suplier ?></td>
                                <td><?= $val->harga ?></td>
                                <td><?= $val->jml_beli ?></td>
                                <td><?= $val->jml_keseluruhan ?></td>
                                <td>.</td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add -->
<div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4">
            <div class="modal-body">
                <form action="<?= base_url('dapur/store') ?>" method="post">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Dapur</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="px-3">
                        <div class="form-group mb-3">
                            <label for="Nama Barang">Nama Barang</label>
                            <select name="nama_barang" id="nama_barang" onchange="onChange(this)" class="form-control">
                                <option value="">Pilih Barang</option>
                                <?php foreach ($barang as $val) : ?>
                                    <option value="<?= $val->nama_barang ?>" data-id="<?= $val->id ?>"><?= $val->nama_barang ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Nama Suplier">Nama Suplier</label>
                            <input type="text" name="nama_suplier" id="nama_suplier" disabled class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga">Harga</label>
                            <input type="number" name="harga" id="harga" disabled class="form-control fw-semibold" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Jumlah Beli">Jumlah Beli</label>
                            <input type="number" name="jml_beli" id="jml_beli" class="form-control fw-semibold" onchange="countTotal(this)" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Total">Total</label>
                            <input type="number" name="jml_keseluruhan" id="jml_keseluruhan" disabled class="form-control fw-semibold" placeholder="0">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2 px-3 my-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const dataServer = {
        barang: <?= json_encode($barang) ?>,
    }

    const elements = {
        modal: {
            add: '#modal-add',
        },
        field: {
            nama_barang: '#nama_barang',
            nama_suplier: '#nama_suplier',
            harga: '#harga',
        },
    }

    let dataDraf = {
        barang_choose: {},
    }

    const onChange = (event) => {
        let result = $(event).find(':selected').data('id');
        result = dataServer.barang.find((x) => {
            return x.id == result;
        });
        dataDraf.barang_choose = result;
        $('#modal-add #nama_suplier').val(typeof(result) === "undefined" ? '' : result.nama_suplier);
        $('#modal-add #harga').val(typeof(result) === "undefined" ? '' : result.harga);
    }

    const countTotal = (event) => {
        let qty = $(event).val();
        let result = qty * (dataDraf.barang_choose.harga ?? 0);
        $(element.modal.add + ' ' + elements.field.jml_keseluruhan).val(result);
    }
</script>
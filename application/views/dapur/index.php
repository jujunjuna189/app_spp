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
                            <th>Total</th>
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
                                <td><?= $controller->formatterCurrency($val->jml_keseluruhan) ?></td>
                                <td>
                                    <span class="btn bg-danger bg-opacity-50 ms-2 text-black" onclick="deleteData('<?= $val->id ?>')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7l16 0"></path>
                                            <path d="M10 11l0 6"></path>
                                            <path d="M14 11l0 6"></path>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>
                                        <!-- <small><strong>Hapus</strong></small> -->
                                    </span>
                                </td>
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
                            <input type="text" name="nama_suplier" id="nama_suplier" readonly class="form-control fw-semibold" style="background-color: #dfe6e9;" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga">Harga</label>
                            <input type="number" name="harga" id="harga" readonly class="form-control fw-semibold" style="background-color: #dfe6e9;" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Jumlah Beli">Jumlah Beli</label>
                            <input type="number" name="jml_beli" id="jml_beli" class="form-control fw-semibold" onkeyup="countTotal(this)" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Total">Total</label>
                            <input type="hidden" name="jml_keseluruhan" id="jml_keseluruhan" class="form-control fw-semibold" placeholder="0">
                            <input type="text" name="jml_keseluruhan_view" id="jml_keseluruhan_view" readonly class="form-control fw-semibold" style="background-color: #dfe6e9;" placeholder="0">
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
    const config = {
        delete_url: '<?= base_url('dapur/delete?id=') ?>',
    }

    const dataServer = {
        barang: <?= json_encode($barang) ?>,
    }

    const modal = {
        confirm_delete: '#modal-confirm-delete',
    };

    const elements = {
        modal: {
            add: '#modal-add',
        },
        field: {
            nama_barang: '#nama_barang',
            nama_suplier: '#nama_suplier',
            harga: '#harga',
            jml_keseluruhan: '#jml_keseluruhan',
            jml_keseluruhan_view: '#jml_keseluruhan_view',
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
        $('#modal-add #jml_keseluruhan').val(result);
        $('#modal-add #jml_keseluruhan_view').val(formatRupiah(result.toString(), 'Rp'));
    }

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString();
        let split = number_string.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
    }

    const hitUrl = ({
        url,
        callback
    }) => {
        let route = url;
        $.ajax({
            url: route,
            type: 'get',
            dataType: 'json',
            success: (response) => {
                callback(response);
            },
            error: (err) => {
                console.log(err);
            }
        });
    }

    const openModal = (idElement) => {
        $(idElement).modal('show');
    }

    const deleteData = (id) => {
        openModal(modal.confirm_delete);
        $(modal.confirm_delete + ' #button-ok').attr('onclick', 'executeDelete(' + id + ')');
    }

    const executeDelete = async (id) => {
        await hitUrl({
            url: config.delete_url + id,
            callback: (res) => {
                location.reload();
            }
        });
    }
</script>
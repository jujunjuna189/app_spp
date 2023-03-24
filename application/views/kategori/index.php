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
                            <th>Jenis Kategori</th>
                            <th>Harga Infoq</th>
                            <th>Harga Makan</th>
                            <th>Harga Semester</th>
                            <th style="width: 10rem">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-dark-emphasis">
                        <?php foreach ($kategori as $index => $val) : ?>
                            <tr>
                                <td><?= $index += 1 ?></td>
                                <td><?= $val->jenis_kategori ?></td>
                                <td><?= $val->harga_infaq ?></td>
                                <td><?= $val->harga_makan ?></td>
                                <td><?= $val->harga_semester ?></td>
                                <td>
                                    <span class="btn bg-warning bg-opacity-50" onclick="updateData('<?= $val->id ?>')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                            <path d="M16 5l3 3"></path>
                                        </svg>
                                        <!-- <small><strong>Edit</strong></small> -->
                                    </span>
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
<!-- Modal -->
<!-- Add -->
<div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4">
            <div class="modal-body">
                <form action="<?= base_url('kategori/store') ?>" method="post">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="px-3">
                        <div class="form-group mb-3">
                            <label for="Jenis Kategori">Jenis Kategori</label>
                            <input type="text" name="jenis_kategori" id="jenis_kategori" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga Infaq">Harga Infaq</label>
                            <input type="number" name="harga_infaq" id="harga_infaq" class="form-control fw-semibold" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga Makan">Harga Makan</label>
                            <input type="number" name="harga_makan" id="harga_makan" class="form-control fw-semibold" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga Semester">Harga Semester</label>
                            <input type="number" name="harga_semester" id="harga_semester" class="form-control fw-semibold" placeholder="0">
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
<!-- Update -->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4">
            <div class="modal-body">
                <form action="<?= base_url('kategori/update') ?>" method="post">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="px-3">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group mb-3">
                            <label for="Jenis Kategori">Jenis Kategori</label>
                            <input type="text" name="jenis_kategori" id="jenis_kategori" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga Infaq">Harga Infaq</label>
                            <input type="number" name="harga_infaq" id="harga_infaq" class="form-control fw-semibold" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga Makan">Harga Makan</label>
                            <input type="number" name="harga_makan" id="harga_makan" class="form-control fw-semibold" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Harga Semester">Harga Semester</label>
                            <input type="number" name="harga_semester" id="harga_semester" class="form-control fw-semibold" placeholder="0">
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
        update_url: '<?= base_url('kategori/get-by-id?id=') ?>',
        delete_url: '<?= base_url('kategori/delete?id=') ?>',
    };
    const modal = {
        add: '#modal-add',
        update: '#modal-edit',
        confirm_delete: '#modal-confirm-delete',
    };
    const field = {
        id: '#id',
        jenis_kategori: '#jenis_kategori',
        harga_infaq: '#harga_infaq',
        harga_makan: '#harga_makan',
        harga_semester: '#harga_semester',
    };

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

    const updateData = async (id) => {
        await hitUrl({
            url: config.update_url + id,
            callback: (res) => {
                setFieldForm(res);
            }
        });
        openModal(modal.update);
    }

    const setFieldForm = (data) => {
        $(modal.update + ' ' + field.id).val(data.id);
        $(modal.update + ' ' + field.jenis_kategori).val(data.jenis_kategori);
        $(modal.update + ' ' + field.harga_infaq).val(data.harga_infaq);
        $(modal.update + ' ' + field.harga_makan).val(data.harga_makan);
        $(modal.update + ' ' + field.harga_semester).val(data.harga_semester);
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
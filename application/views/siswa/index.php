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
            <div class="my-3">
                <?php if ($this->session->flashdata('flashdata')) : ?>
                    <div class="px-3 py-2 fw-bold <?= $this->session->flashdata('flashdata')['bg']; ?> rounded-2">
                        <?= $this->session->flashdata('flashdata')['msg']; ?>
                    </div>
                <?php endif ?>
            </div>
            <!-- Table -->
            <div class="table-responsive mt-4 rounded-4 border border-dark-subtle">
                <table class="table border-dark-subtle">
                    <thead class="text-primary table-light fw-bold">
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Lengkap</th>
                            <th>Kategori</th>
                            <th>Kelas</th>
                            <th>No Hanphone</th>
                            <th>Alamat</th>
                            <th>Tahun Ajaran</th>
                            <th style="width: 15rem">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-dark-emphasis">
                        <?php foreach ($siswa as $index => $val) : ?>
                            <tr>
                                <td><?= $index += 1 ?></td>
                                <td><?= $val->nisn ?></td>
                                <td><?= $val->nama_lengkap ?></td>
                                <td><?= $this->kategori_model->getById($val->id_kategori)->jenis_kategori ?? '-' ?></td>
                                <td><?= $this->kelas_model->getById($val->id_kelas)->nama_kelas ?? '-' ?></td>
                                <td><?= $val->no_hp ?></td>
                                <td><?= $val->alamat ?></td>
                                <td><?= $val->tahun_ajaran ?></td>
                                <td>
                                    <span class="btn bg-info bg-opacity-50" onclick="window.open('<?= base_url('siswa/detail?id_siswa=' . $val->id) ?>', '_self')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" height="20" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                                        </svg>
                                        <!-- <small><strong>View</strong></small> -->
                                    </span>
                                    <span class="btn bg-warning bg-opacity-50 mx-2" onclick="updateData('<?= $val->id ?>')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                            <path d="M16 5l3 3"></path>
                                        </svg>
                                        <!-- <small><strong>Edit</strong></small> -->
                                    </span>
                                    <span class="btn bg-danger bg-opacity-50 text-black" onclick="deleteData('<?= $val->id ?>')">
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
                <form action="<?= base_url('siswa/store') ?>" method="post">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="px-3">
                        <div class="form-group mb-3">
                            <label for="NISN">NISN</label>
                            <input type="text" name="nisn" id="nisn" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Nama Lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Kategori">Kategori</label>
                            <select name="id_kategori" id="id_kategori" class="form-control fw-semibold">
                                <option value="">Pilih</option>
                                <?php foreach ($kategori as $val) : ?>
                                    <option value="<?= $val->id ?>"><?= $val->jenis_kategori ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Kelas">Kelas</label>
                            <select name="id_kelas" id="id_kelas" class="form-control fw-semibold">
                                <option value="">Pilih</option>
                                <?php foreach ($kelas as $val) : ?>
                                    <option value="<?= $val->id ?>"><?= $val->nama_kelas ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Nomor Hanphone">Nomor Hanphone</label>
                            <input type="number" name="no_hp" id="no_hp" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control fw-semibold" placeholder="..."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Tahun Ajaran">Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control fw-semibold" placeholder="...">
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
                <form action="<?= base_url('siswa/update') ?>" method="post">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Siswa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="px-3">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group mb-3">
                            <label for="NISN">NISN</label>
                            <input type="text" name="nisn" id="nisn" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Nama Lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Kategori">Kategori</label>
                            <select name="id_kategori" id="id_kategori" class="form-control fw-semibold">
                                <?php foreach ($kategori as $val) : ?>
                                    <option value="<?= $val->id ?>"><?= $val->jenis_kategori ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Kelas">Kelas</label>
                            <select name="id_kelas" id="id_kelas" class="form-control fw-semibold">
                                <?php foreach ($kelas as $val) : ?>
                                    <option value="<?= $val->id ?>"><?= $val->nama_kelas ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Nomor Hanphone">Nomor Hanphone</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control fw-semibold" placeholder="...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control fw-semibold" placeholder="..."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Tahun Ajaran">Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control fw-semibold" placeholder="...">
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
        update_url: '<?= base_url('siswa/get-by-id?id=') ?>',
        delete_url: '<?= base_url('siswa/delete?id=') ?>',
    };
    const modal = {
        add: '#modal-add',
        update: '#modal-edit',
        confirm_delete: '#modal-confirm-delete',
    };
    const field = {
        id: '#id',
        nisn: '#nisn',
        nama_lengkap: '#nama_lengkap',
        id_kategori: '#id_kategori',
        id_kelas: '#id_kelas',
        no_hp: '#no_hp',
        alamat: '#alamat',
        tahun_ajaran: '#tahun_ajaran',
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
        $(modal.update + ' ' + field.nisn).val(data.nisn);
        $(modal.update + ' ' + field.nama_lengkap).val(data.nama_lengkap);
        $(modal.update + ' ' + field.id_kategori).val(data.id_kategori);
        $(modal.update + ' ' + field.id_kelas).val(data.id_kelas);
        $(modal.update + ' ' + field.no_hp).val(data.no_hp);
        $(modal.update + ' ' + field.alamat).val(data.alamat);
        $(modal.update + ' ' + field.tahun_ajaran).val(data.tahun_ajaran);
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
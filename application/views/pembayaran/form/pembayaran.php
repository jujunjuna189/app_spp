<div>
    <div class="card border-dashed rounded-4">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-7">
                    <form onsubmit="return onSearch(event)">
                        <div class="form-group mb-3">
                            <div class="input-group flex-nowrap">
                                <input type="text" name="search" id="search" class="form-control border-0 border-top border-start border-bottom bg-primary-light" placeholder="Cari Siswa..." aria-label="Cari Siswa..." aria-describedby="addon-wrapping">
                                <span class="input-group-text bg-primary-light border-0 border-top border-end border-bottom" id="addon-wrapping">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                        <path d="M21 21l-6 -6"></path>
                                    </svg>
                                </span>
                            </div>
                            <small class="text-danger">Tekan Enter Untuk Mencari</small>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card border-dashed rounded-4">
                        <div class="card-body">
                            <small class="fw-semibold">Data Siswa</small>
                            <hr>
                            <div class="mb-1">
                                <small>Nama Siswa</small>
                                <div class="bg-primary-light p-2 fw-semibold rounded-2" id="siswa-nama-lengkap">
                                    -
                                </div>
                            </div>
                            <div class="mb-1">
                                <small>Kategori</small>
                                <div class="bg-primary-light p-2 fw-semibold rounded-2" id="siswa-kategori">
                                    -
                                </div>
                            </div>
                            <div class="mb-1">
                                <small>Kelas</small>
                                <div class="bg-primary-light p-2 fw-semibold rounded-2" id="siswa-kelas">
                                    -
                                </div>
                            </div>
                            <div class="mb-1">
                                <small>No Hp</small>
                                <div class="bg-primary-light p-2 fw-semibold rounded-2" id="siswa-no_hp">
                                    -
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card border-dashed rounded-4">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point-filled text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                        <small class="fw-semibold">Tunggakan</small>
                                    </div>
                                    <div class="bg-primary-light p-2 rounded-4 ps-3 pe-5 py-3 mt-2">
                                        <div class="h3 m-0 fw-semibold" id="tunggakan-total">0</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-grow-1 ms-0 ms-lg-5">
                                    <div class="border rounded-5 h-100"></div>
                                    <div class="ms-4 flex-grow-1">
                                        <span>Detail Tunggakan</span>
                                        <div class="bg-primary-light rounded-4 p-2 mt-2">
                                            <ul>
                                                <li>Infaq : <b id="tunggakan-infaq">0</b></li>
                                                <li>Makan : <b id="tunggakan-makan">0</b></li>
                                                <li>Semester : <b id="tunggakan-semester">0</b></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pembayaran -->
                    <div class="card border-dashed mt-3 rounded-4">
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="d-flex">
                                    <div>
                                        <div class="form-group mb-2">
                                            <label for="Bayar" class="fw-semibold">Bayar</label>
                                            <input type="text" name="" id="field-total" disabled class="form-control mt-2" placeholder="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="Keterangan" class="fw-semibold">Keterangan</label>
                                            <textarea name="keterangan" id="field-keterangan" cols="30" rows="3" class="form-control mt-2" onkeyup="onFieldInsert(this, 'keterangan')"></textarea>
                                        </div>
                                    </div>
                                    <div class="ms-0 ms-md-3 flex-grow-1">
                                        <span class="fw-semibold">Detail Pembayaran</span>
                                        <div class="border p-3 rounded-4 mt-2">
                                            <table>
                                                <tr>
                                                    <td class="py-2"><span class="fw-semibold">Infaq</span></td>
                                                    <td class="py-2">
                                                        <div class="ms-0 ms-md-5">
                                                            <input type="number" name="" id="field-infaq" placeholder="0" class="form-control py-1" onkeyup="onPay(this, 'infaq')">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2"><span class="fw-semibold">Makan</span></td>
                                                    <td class="py-2">
                                                        <div class="ms-0 ms-md-5">
                                                            <input type="number" name="" id="field-makan" placeholder="0" class="form-control py-1" onkeyup="onPay(this, 'makan')">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2"><span class="fw-semibold">Semester</span></td>
                                                    <td class="py-2">
                                                        <div class="ms-0 ms-md-5">
                                                            <input type="number" name="" id="field-semester" placeholder="0" class="form-control py-1" onkeyup="onPay(this, 'semester')">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 float-end">
                        <a href="#" class="btn btn-secondary">Batal</a>
                        <span class="btn btn-primary" onclick="onSaveTransaksi()">Simpan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search -->
<div class="modal fade" id="modal-search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4">
            <div class="modal-body">
                <h5>List Siswa</h5>
                <hr>
                <div class="mt-3" id="list-siswa">
                    <div class="p-2 border border-light-subtle rounded-3">Data Tidak Ditemukan</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Script -->
<script>
    const config = {
        get_search: '<?= base_url('siswa/get-by-search?search=') ?>',
        get_kategori: '<?= base_url('pembayaran/hitung-tunggakan?id=') ?>',
        create_pembayaran: '<?= base_url('pembayaran/bayar') ?>',
    };

    const elements = {
        field_search: '#search',
        list_siswa: '#list-siswa',
        siswaView: {
            nama_lengkap: '#siswa-nama-lengkap',
            kategori: '#siswa-kategori',
            kelas: '#siswa-kelas',
            no_hp: '#siswa-no_hp',
        },
        tunggakanView: {
            total: '#tunggakan-total',
            infaq: '#tunggakan-infaq',
            makan: '#tunggakan-makan',
            semester: '#tunggakan-semester',
        },
        field: {
            total: '#field-total',
            keterangan: '#field-keterangan',
            infaq: '#field-infaq',
            makan: '#field-makan',
            semester: '#field-semester',
        }
    };

    const modal = {
        search: '#modal-search',
    };

    const dataServer = {
        siswa: [],
    };

    const dataDraf = {
        siswa: {},
        tunggakan: {},
        pembayaran: {},
        dataBatch: {},
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

    const hitUrlPost = ({
        url,
        data,
        callback
    }) => {
        let route = url;
        $.ajax({
            url: route,
            type: 'post',
            dataType: 'json',
            data: data,
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

    const onSearch = (event) => {
        event.preventDefault();
        const value = $(elements.field_search).val();
        onGetSiswa(value);
    }

    const onGetSiswa = async (search) => {
        await hitUrl({
            url: config.get_search + search,
            callback: (res) => {
                dataServer.siswa = res;
                openModal(modal.search);
                settingListSiswa(res);
            }
        });
    }

    const settingListSiswa = (array) => {
        $(elements.list_siswa).empty();
        $.each(array, function(i, item) {
            let view = renderListSiswa(item);

            $(elements.list_siswa).append(view);
        });
    }

    const renderListSiswa = (item) => {
        let view = '';

        view = '<div class="p-2 border border-light-subtle rounded-3 mb-2">' +
            '<div class="d-flex justify-content-between align-items-center">' +
            '<div>' + item.nama_lengkap + '<div><small>' + item.no_hp + '</small></div></div>' +
            '<div class="btn btn-primary" onclick="clickItemSiswa(\'' + item.id + '\')">Pilih</div>' +
            '</div>' +
            '</div>';

        return view;
    }

    const clickItemSiswa = (id) => {
        const siswa = dataServer.siswa.find((item) => item.id === id);
        dataDraf.siswa = siswa;
        setSiswaView(siswa);
        getKategoriBySiswa();
    }

    const setSiswaView = (item) => {
        $(elements.siswaView.nama_lengkap).html(item.nama_lengkap);
        $(elements.siswaView.kategori).html(item.jenis_kategori);
        $(elements.siswaView.kelas).html(item.nama_kelas);
        $(elements.siswaView.no_hp).html(item.no_hp);
    }

    // Get kategori by siswa
    const getKategoriBySiswa = async () => {
        await hitUrl({
            url: config.get_kategori + dataDraf.siswa?.id,
            callback: (res) => {
                dataDraf.tunggakan = res;
                setTunggakanView();
            }
        });
    }

    const setTunggakanView = () => {
        // Element
        $(elements.tunggakanView.total).html(dataDraf.tunggakan?.total ?? 0);
        $(elements.tunggakanView.infaq).html(dataDraf.tunggakan?.harga_infaq ?? 0);
        $(elements.tunggakanView.makan).html(dataDraf.tunggakan?.harga_makan ?? 0);
        $(elements.tunggakanView.semester).html(dataDraf.tunggakan?.harga_semester ?? 0);
    }

    const findNumber = (str) => {
        return +(str.replace(/\D+/g, ''));
    }

    const onFieldInsert = (event, field) => {
        const val = $(event).val();
        dataDraf.dataBatch[field] = val;
    }

    const onPay = (event, field) => {
        const val = $(event).val();
        if ('harga_' + field in dataDraf.tunggakan && val <= findNumber(dataDraf.tunggakan['harga_' + field])) {
            dataDraf.pembayaran[field] = val;
        } else {
            $(elements.field[field]).val(dataDraf.pembayaran[field] ?? '');
        }
        hitungTotalPay();
    }

    const hitungTotalPay = () => {
        let total = 0;
        Object.keys(dataDraf.pembayaran).forEach((item, index) => {
            total = (parseInt(total) + parseInt(dataDraf.pembayaran[item]));
        });
        dataDraf.dataBatch.total = total;
        total = formatRupiah(total.toString(), 'Rp');

        $(elements.field.total).val(total);
    }

    const onSaveTransaksi = async () => {
        let dataBatch = {
            ...dataDraf.pembayaran,
            ...dataDraf.dataBatch,
            siswa: dataDraf.siswa,
        };
        await hitUrlPost({
            url: config.create_pembayaran,
            data: dataBatch,
            callback: (res) => {
                if (res) {
                    location.href = '<?= base_url('pembayaran') ?>';
                }
            }
        });
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
</script>
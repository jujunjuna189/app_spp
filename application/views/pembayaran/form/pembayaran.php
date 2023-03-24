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
                                <div class="bg-primary-light p-2 fw-semibold rounded-2">
                                    Aas Latipah
                                </div>
                            </div>
                            <div class="mb-1">
                                <small>Kategori</small>
                                <div class="bg-primary-light p-2 fw-semibold rounded-2">
                                    Bu Asih
                                </div>
                            </div>
                            <div class="mb-1">
                                <small>Kelas</small>
                                <div class="bg-primary-light p-2 fw-semibold rounded-2">
                                    Kelas 1
                                </div>
                            </div>
                            <div class="mb-1">
                                <small>No Hp</small>
                                <div class="bg-primary-light p-2 fw-semibold rounded-2">
                                    0878-3060-5862
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
                                        <div class="h3 m-0 fw-semibold">200.0000</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-grow-1 ms-0 ms-lg-5">
                                    <div class="border rounded-5 h-100"></div>
                                    <div class="ms-4 flex-grow-1">
                                        <span>Detail Tunggakan</span>
                                        <div class="bg-primary-light rounded-4 p-2 mt-2">
                                            <ul>
                                                <li>Infaq : <b>20.000</b></li>
                                                <li>Makan : <b>20.000</b></li>
                                                <li>Semester : <b>50.000</b></li>
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
                            <div class="d-flex flex-wrap">
                                <div>
                                    <div class="form-group mb-2">
                                        <label for="Bayar" class="fw-semibold">Bayar</label>
                                        <input type="number" name="" id="" class="form-control mt-2" placeholder="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="Keterangan" class="fw-semibold">Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" cols="30" rows="3" class="form-control mt-2"></textarea>
                                    </div>
                                </div>
                                <div class="ms-0 ms-md-5 flex-grow-1">
                                    <span class="fw-semibold">Detail Pembayaran</span>
                                    <div class="border p-3 rounded-4 mt-2">
                                        <table>
                                            <tr>
                                                <td class="py-2"><span class="fw-semibold">Infaq</span></td>
                                                <td class="py-2">
                                                    <div class="ms-0 ms-md-5">
                                                        <input type="text" name="" id="" class="form-control py-1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-2"><span class="fw-semibold">Makan</span></td>
                                                <td class="py-2">
                                                    <div class="ms-0 ms-md-5">
                                                        <input type="text" name="" id="" class="form-control py-1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-2"><span class="fw-semibold">Semester</span></td>
                                                <td class="py-2">
                                                    <div class="ms-0 ms-md-5">
                                                        <input type="text" name="" id="" class="form-control py-1">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Script -->
<script>
    const elements = {
        field_search: '#search',
    };

    const onSearch = (event) => {
        event.preventDefault();
        console.log($(elements.field_search).val());
    }
</script>
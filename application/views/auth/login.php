<div class="container-fluid">
    <div class="position-absolute top-0 bottom-0 end-0 start-0" style="background-image: url(<?= base_url('assets/image/bg/pesantren-op50.png') ?>); background-repeat: no-repeat; background-size: cover;">
        <div style="margin-top: 20vh;">
            <div class="mb-4 text-center text-primary">
                <h3 class="fw-semibold">DARUSSALAM</h3>
                <h1 class="fw-semibold">SCHOOL PAYMENT</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="card shadow border-0 rounded-4" style="width: 30%">
                    <div class="card-body px-5">
                        <div class="py-2 text-center mb-4">
                            <img src="<?= base_url('assets/image/logo/logo.png') ?>" alt="Logo sekolah" style="width: 5rem">
                        </div>
                        <?php if ($this->session->flashdata('error')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $this->session->flashdata('error')['message'] ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <form action="<?= base_url('onLogin') ?>" method="post">
                            <div class="form-group mb-3">
                                <label for="" class="fw-semibold">Username</label>
                                <div class="input-group flex-nowrap">
                                    <input type="text" name="username" id="username" class="form-control border-0 border-top border-start border-bottom" placeholder="Isi username dengan benar" aria-label="Isi username dengan benar" aria-describedby="addon-wrapping">
                                    <span class="input-group-text bg-white border-0 border-top border-end border-bottom" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="fw-semibold">Password</label>
                                <div class="input-group flex-nowrap">
                                    <input type="text" name="password" id="password" class="form-control border-0 border-top border-start border-bottom" placeholder="Isi password dengan benar" aria-label="Isi password dengan benar" aria-describedby="addon-wrapping">
                                    <span class="input-group-text bg-white border-0 border-top border-end border-bottom" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                                            <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group text-center mb-3">
                                <button type="submit" class="btn btn-primary fw-semibold px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>
                                    Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
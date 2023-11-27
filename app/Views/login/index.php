<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login</title>
</head>
<?= $this->include("temp/layout/head"); ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row bg-white rounded p-3 mt-5">
                        <div class="col-lg-8">
                            <div class="text-center">
                                <img src="/assets/img/pkh.jpg" class="img img-fluid" alt="">
                                <h3>Informasi Penerima PKH Keluarga Miskin Kelurahan Panjer</h3>
                                <hr class="hr">
                                <p>Berikut informasi terkait jadwal Program PKH Keluarga miskin Kelurahan Panjer</p>
                            </div>
                            <table class="table border border-rounded">
                                <thead>
                                    <tr>
                                        <th>Tahun.</th>
                                        <th>Periode</th>
                                        <th>Tanggal Pendafatan</th>
                                        <th>Tanggal Seleksi</th>
                                        <th>Tanggal Penerimaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;

                                    foreach ($dataKuota as $dt) : ?>
                                        <tr>
                                            <td><?= $dt['tahun']; ?></td>
                                            <td><?= $dt['periode']; ?></td>
                                            <td><?= $dt['tanggal_daftar_mulai'] . " - " . $dt['tanggal_daftar_selesai'];  ?></td>
                                            <td><?= $dt['tanggal_seleksi_mulai'] . " - " .  $dt['tanggal_seleksi_selesai']; ?></td>
                                            <td><?= $dt['tanggal_terima_mulai'] . " - " . $dt['tanggal_terima_selesai']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-11">
                            <!-- Social login form-->
                            <div class="card">
                                <div class="card-body p-5 text-center">
                                    <img width="100" class="img-fluid mb-2" src="/assets/img/logo.png" alt="">
                                    <div class="h3 fw-light mb-3">Login</div>
                                    <div>Silahkan login menggunakan akun yang sudah terdaftar.</div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <div class="text-start">
                                        <?= view('Myth\Auth\Views\_message_block') ?>
                                    </div>
                                    <form role="form" action="<?= url_to('login') ?>" method="POST">
                                        <?= csrf_field() ?>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="emailExample">Username</label>
                                            <input placeholder="Masukan Username" class="form-control form-control-solid <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" type="text" placeholder="" aria-label="Email Address" aria-describedby="emailExample" />
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="passwordExample">Password</label>
                                            <input placeholder="Masukan Password" class="form-control form-control-solid" name="password" type="password" placeholder="" aria-label="Password" aria-describedby="passwordExample" />
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <button class="btn btn-primary px-4 form-control" type="submit"><?= lang('Auth.loginAction') ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <?= $this->include("temp/layout/footer"); ?>
        </div>
    </div>
    <?= $this->include("/temp/layout/sbscript"); ?>
</body>

</html>
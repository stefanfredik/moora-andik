<?= $this->extend('/temp/index'); ?>
<?= $this->section("content"); ?>

<div class="row">
    <div class="col">
        <div class="card  shadow">
            <div class="card-header">
                <h3>Daftar Peserta</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr class="align-middle">
                                <th class="text-center">Rangking</th>
                                <th>NISN</td>
                                <th>Kelas</th>
                                <th>Nama Siswa</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahap</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rank = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr class="<?= $ps['periode'] == '-' ? 'bg-danger text-white' : ''; ?>">
                                    <td class="text-center "><?= $ps["rangking"] ?></td>
                                    <td><?= $ps['nisn'] ?></td>
                                    <td><?= $ps['kelas'] ?></td>
                                    <td><?= $ps['nama_siswa']; ?></td>
                                    <td><?= $ps['alamat']; ?></td>
                                    <td><?= $ps['jenis_kelamin']; ?></td>
                                    <td><?= @$ps['periode']; ?></td>
                                    <td><?= @$ps['status']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
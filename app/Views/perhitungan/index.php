<?= $this->extend('/temp/index'); ?>
<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <div class="card border border-secondary">
            <div class="card-header">
                <h3>Tabel Kriteria</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr>
                                <td>Kode</td>
                                <td>Keterangan</td>
                                <td>Nilai</td>
                                <td>Perbaikan Bobot</td>
                                <td>Kepentingan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataKriteria as $dk) :
                            ?>
                                <tr>
                                    <td><?= $dk['keterangan'] ?></td>
                                    <td><?= $dk['kriteria']; ?></td>
                                    <td><?= $dk['nilai']; ?></td>
                                    <?php foreach ($bobotKriteria as $key => $db) {
                                        if ($dk['keterangan'] == $key) {
                                            echo '<td>' . $db . '</td>';
                                        }
                                    } ?>
                                    <td>
                                        <?php
                                        echo match ($dk['nilai']) {
                                            '5' => 'Sangat Penting',
                                            '4' => 'Penting',
                                            '3' => 'Cukup Penting',
                                            '2' => 'Tidak Penting',
                                            '1' => 'Sangat Tidak Penting',
                                            default => 'Tidak Diketahui'
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
        <div class="card border border-secondary">
            <div class="card-header">
                <h3>Tabel Data</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Peserta</th>
                                <?php foreach ($dataKriteria as $dt) : ?>
                                    <th><?= $dt['keterangan']; ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $ps['nama_siswa']; ?></td>
                                    <?php foreach ($ps['data_kriteria'] as $key => $dk) : ?>
                                        <td><?= $dk; ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col">
        <div class="card border border-secondary">
            <div class="card-header">
                <h3>Tabel Bobot Kriteria</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Peserta</th>
                                <?php foreach ($dataKriteria as $dt) : ?>
                                    <th><?= $dt['keterangan']; ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $ps['nama_siswa']; ?></td>

                                    <?php foreach ($ps['data_kriteria_nilai'] as $key => $dk) : ?>
                                        <td><?= $dk; ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>


<div class="row">
    <div class="col">
        <div class="card border border-secondary">
            <div class="card-header">
                <h3>Tabel Normalisasi</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Peserta</th>
                                <?php foreach ($dataKriteria as $dt) : ?>
                                    <th><?= $dt['keterangan']; ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $ps['nama_siswa']; ?></td>
                                    <?php foreach ($ps['data_normalisasi'] as $key => $dn) : ?>
                                        <td><?= $dn ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col">
        <div class="card border border-secondary">
            <div class="card-header">
                <h3>Tabel Optimasi</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Peserta</th>
                                <?php foreach ($dataKriteria as $dt) : ?>
                                    <th><?= $dt['keterangan']; ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $ps['nama_siswa']; ?></td>
                                    <?php foreach ($ps['data_optimasi'] as  $do) : ?>
                                        <td><?= $do ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>




<div class="row">
    <div class="col">
        <div class="card border border-secondary">
            <div class="card-header">
                <h3>Tabel Yi</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" colspacing="0">
                        <thead style="text-align: center;">
                            <tr>
                                <th width="80px" rowspan="2">No</th>
                                <th rowspan="2">Peserta</th>
                                <th colspan="<?= $jumKriteriaBenefit; ?>">Benefit</th>
                                <th colspan="<?= $jumKriteriaCost; ?>">Cost</th>
                            </tr>
                            <tr>
                                <?php foreach ($dataKriteria as $dt) : ?>
                                    <?= ($dt['type'] == 'benefit') ? '<th>' . $dt['keterangan'] . '</th>' : ''; ?>
                                <?php endforeach; ?>

                                <?php foreach ($dataKriteria as $dt) : ?>
                                    <?= ($dt['type'] == 'cost') ? '<th>' . $dt['keterangan'] . '</th>' : ''; ?>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td style="text-align: left ;"><?= $ps['nama_siswa']; ?></td>
                                    <?php foreach ($ps['data_kriteria_benefit'] as $key => $dn) : ?>
                                        <td><?= $dn ?></td>
                                    <?php endforeach; ?>
                                    <?php foreach ($ps['data_kriteria_cost'] as $key => $dn) : ?>
                                        <td><?= $dn ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="row">
    <div class="col">
        <div class="card border border-secondary">
            <div class="card-header">
                <h3>Tabel Nilai</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" colspacing="0">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th width="80px">Rangking</th>
                                <th>Peserta</th>
                                <th>Max</th>
                                <th>Min</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($pesertaRangking as $ps) :
                            ?>
                                <tr>
                                    <td><?= ++$no; ?></td>
                                    <td class="text-center "><span class="bg-primary rounded p-2 text-white ""><?= $no ?> </span></td>
                                    <td><?= $ps['nama_siswa']; ?></td>
                                    <td><?= $ps['kriteria_max']; ?></td>
                                    <td><?= $ps['kriteria_min']; ?></td>
                                    <td><?= $ps['kriteria_nilai']; ?></td>
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

<?= $this->section('script'); ?>
<script>
    $('table').DataTable({
        columnDefs: [{
            width: 20,
            targets: 0
        }],
        language: {
            paginate: {
                first: " Awal", last: "Akhir" , next: '<i class="bi bi-arrow-right-circle"></i>' , previous: '<i class="bi bi-arrow-left-circle"></i>' }, zeroRecords: "Belum ada data." , search: "Cari:" , lengthMenu: "Tampil _MENU_ kolom" , info: "Kolom _START_ sampai _END_ dari _TOTAL_ kolom" } }) </script>
                                            <?= $this->endSection(); ?>
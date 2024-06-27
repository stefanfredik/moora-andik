<div class="table-responsive">
    <table class="table table-bordered" id="table" width="100%" colspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <!-- <th>Periode</th> -->
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Kelas</th>

                <?php foreach ($dataKriteria as $dt): ?>
                    <th style="word-wrap: normal;">
                        <?= $dt['keterangan']; ?>
                    </th>
                <?php endforeach; ?>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; // dd($dataPeserta);
            foreach ($dataPeserta as $dt): ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $dt['tahun']; ?>
                    </td>

                    <td>
                        <?= $dt['nisn']; ?>
                    </td>
                    <td>
                        <?= $dt['nama_siswa']; ?>
                    </td>
                    <td>
                        <?= $dt['jenis_kelamin']; ?>
                    </td>
                    <td>
                        <?= $dt['alamat']; ?>
                    </td>
                    <td>
                        <?= $dt['kelas']; ?>
                    </td>

                    <?php foreach ($dataKriteria as $dk): ?>
                        <td>
                            <?php
                            $k = 'k_' . $dk['id']; foreach ($dataSubkriteria as $sk):
                                if ($dk['id'] == $sk['id_kriteria']) {
                                    if (isset($dt[$k])) {
                                        echo ($dt[$k] == $sk['id']) ? '<p>' . $sk['subkriteria'] . '</p>' : false;
                                    } else {
                                        'Data Belum Lengkap';
                                    }
                                }
                            endforeach; ?>
                        </td>
                    <?php endforeach; ?>

                    <td style="text-align: center" width="120px">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="remove('<?= $meta['url']; ?>', this)" class="btn text-white btn-danger"
                                data-id="<?= $dt['id'] ?>"><i class="bi bi-trash mr-2"></i></button>
                            <button onclick="edit('<?= $meta['url']; ?>', this)" class="btn btn-sm btn-primary"
                                data-id="<?= $dt['id'] ?>"><i class="bi bi-pencil-square mr-2"></i></button>
                            <button onclick="detail('<?= $meta['url']; ?>', this)" class="btn btn-sm btn-info"
                                data-id="<?= $dt['id'] ?>">Detail</button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
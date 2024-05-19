<table class="table table-bordered" id="table" width="100%" style="font-size: small;" colspacing="0">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">NISN</th>
            <th class="text-center">Nama</th>
            <th class="text-center" style="word-wrap: break-word;">Alamat</th>
            <th class="text-center">Kelas</th>
            <?php foreach ($dataKriteria as $dt) : ?>
                <th style="word-wrap: normal;"><?= $dt['keterangan']; ?></th>
            <?php endforeach; ?>

            <!-- <th class="text-center">Status</th> -->
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        // dd($dataPeserta);
        foreach ($peserta as $dt) :
            if ($dt["status"] == "Mendapatkan Bantuan") : ?>
                <tr>
                    <td class="text-center"><?= ++$no; ?></td>
                    <td><?= $dt['tahun']; ?></td>
                    <td><?= $dt['nik']; ?></td>
                    <td><?= $dt['nama_siswa']; ?></td>
                    <td><?= ucwords($dt['alamat']); ?></td>
                    <td><?= $dt['kelas']; ?></td>
                    <?php foreach ($dt['data_kriteria'] as $key => $dk) : ?>
                        <td style="word-wrap: wrap; width: 80px;"><?= $dk; ?></td>
                    <?php endforeach; ?>
                    <!-- <td><?= $dt['status']; ?></td> -->
                </tr>
        <?php endif;
        endforeach; ?>
    </tbody>
</table>
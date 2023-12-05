<?php

function rangeTanggal($tanggal_mulai, $tanggal_selesai) {
    // Ubah string ke objek DateTime
    $tanggal_awal = new DateTime($tanggal_mulai);
    $tanggal_akhir = new DateTime($tanggal_selesai);

    // Format tanggal sesuai yang diinginkan
    $tanggal_awal_formatted = $tanggal_awal->format('d F');
    $tanggal_akhir_formatted = $tanggal_akhir->format('d F Y');

    return $tanggal_awal_formatted . ' - ' . $tanggal_akhir_formatted;
}


function rangeTanggalId($tanggal_mulai, $tanggal_selesai) {
    // Daftar nama bulan dalam bahasa Indonesia
    $nama_bulan = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    );

    // Ubah string ke objek DateTime
    $tanggal_awal = new DateTime($tanggal_mulai);
    $tanggal_akhir = new DateTime($tanggal_selesai);

    // Format tanggal sesuai yang diinginkan (tanggal, nama bulan, tahun)
    $tanggal_awal_formatted = $tanggal_awal->format('d') . ' ' . $nama_bulan[$tanggal_awal->format('m')];
    $tanggal_akhir_formatted = $tanggal_akhir->format('d') . ' ' . $nama_bulan[$tanggal_akhir->format('m')] . ' ' . $tanggal_akhir->format('Y');

    return $tanggal_awal_formatted . ' - ' . $tanggal_akhir_formatted;
}

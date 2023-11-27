<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= $meta['url']; ?>" method="" data-id="<?= $kuota['id']; ?>" id="formEdit" onsubmit="update(event)">
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tahun</label>
                        </div>
                        <div class="col-md-8">
                            <input name="tahun" value="<?= $kuota['tahun']; ?>" type="number" class="form-control" required>
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Periode</label>
                        </div>
                        <div class="col-md-8">
                            <input name="periode" type="text" value="<?= $kuota['periode']; ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Jumlah Kuota</label>
                        </div>
                        <div class="col-md-8">
                            <input name="jumlah_kuota" value="<?= $kuota['jumlah_kuota']; ?>" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tanggal Daftar</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col">
                                    <input value="<?= $kuota["tanggal_daftar_mulai"] ?>" name="tanggal_daftar_mulai" type="date" class="form-control" required>
                                </div>
                                <div class="col">
                                    <input value="<?= $kuota["tanggal_daftar_selesai"] ?>" name="tanggal_daftar_selesai" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tanggal Seleksi</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col">
                                    <input value="<?= $kuota["tanggal_seleksi_mulai"] ?>" name="tanggal_seleksi_mulai" type="date" class="form-control" required>
                                </div>
                                <div class="col">
                                    <input value="<?= $kuota["tanggal_seleksi_selesai"] ?>" name="tanggal_seleksi_selesai" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tanggal Terima</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col">
                                    <input value="<?= $kuota["tanggal_terima_mulai"] ?>" name="tanggal_terima_mulai" type="date" class="form-control" required>
                                </div>
                                <div class="col">
                                    <input value="<?= $kuota["tanggal_terima_selesai"] ?>" name="tanggal_terima_selesai" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Keterangan</label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"><?= $kuota['keterangan']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
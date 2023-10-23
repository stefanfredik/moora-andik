<?= $this->extend('/temp/index'); ?>

<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <button data-url="<?= '/' . $meta['url'] . '/tambah'; ?>" class="my-2 btn btn-white" onclick="add(this)"><i class="bi bi-plus-circle mx-1"></i>Tambah Data</button>

        <div class="card">
            <div class="card-header">
                <h3><?= $title; ?></h3>
            </div>
            <div id="data" class="card-body"></div>
        </div>

    </div>
</div>

<div id="modalArea">
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>


<script>
    let url = '<?= $meta['url']; ?>';

    $(document).ready(() => {
        getTable(url);
    });
</script>

<script>
    const formInput = ["id_penduduk"];


    function validation(error) {
        resetForm(formInput);
        if (error.id_penduduk) {
            $("#nama").addClass("is-invalid");
            $("#invalidIdPenduduk").html(error.id_penduduk);
        }
    }

    function resetForm(arr) {
        arr.forEach((a) => {
            $(`#nama`).removeClass("is-invalid");
            $("#invalidIdPenduduk").html("");
        });
    }
</script>


<?= $this->endSection(); ?>
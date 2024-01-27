<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            font-size: 8px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        thead {
            background-color: gray;
        }

        .head {
            text-align: center;
            ;
        }

        .footer {
            /* display: flex;
            flex-direction: row;
            justify-content: center; */
            text-align: center;
            margin-left: 400px;
        }

        .title {
            margin-top: 20px;
            margin-bottom: 70px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="text-align: center; ">
            <?php
            $srcLogo = APPPATH . '../public/assets/img/logo.png';
            $srcBali = APPPATH . '../public/assets/img/Bali.png';

            $imageDataLogo  = base64_encode(file_get_contents($srcLogo));
            $imageDataBali   = base64_encode(file_get_contents($srcBali));

            $renderLogo     = 'data:' . mime_content_type($srcLogo) . ';base64,' . $imageDataLogo;
            $renderDataBali   = 'data:' . mime_content_type($srcBali) . ';base64,' . $imageDataBali;
            ?>



            <div style="display: inline-block;">
                <img width="60px" src="<?= $renderDataBali; ?>" alt="">
            </div>

            <div style="display: inline-block; text-align: center; margin: 0 80px;">
                <p style="margin: 0; font-weight: bold;">PEMERINTAH PROVINSI BALI</p>
                <p style="margin: 0; font-weight: bold;">Kota Denpasar</p>
                <p style="margin: 0; font-weight: bold;">Kelurahan Panjer</p>
                <p style="margin: 0; font-size: small;">Jl. Tukad Pakerisan No. 65 Denpasar, Kode Pos 80225</p>
            </div>

            <div style="display: inline-block;">
                <img width="60px" src="<?= $renderLogo; ?>" alt="">
            </div>
        </div>
        <hr>

        <div>

            <p style="text-align: right;"><?php echo "Kelurahan Panjer, " . date('d-m-Y'); ?></p>
            <h3 class="head"><?= $title; ?></h3>
            <h3 class="head">Tahun 2023</h3>
        </div>


        <?= $this->renderSection("table"); ?>
        <div class="footer">
            <div class="title">
                Kepala Lurah
            </div>

            <div>
                <p style="font-weight: bold; margin: 0;">( -------------------- )</p>
                <!-- <p style="margin: 0;">Pembi</p> -->
                <!-- <p style="margin: 0;"></p> -->
            </div>
        </div>
    </div>
</body>

</html>
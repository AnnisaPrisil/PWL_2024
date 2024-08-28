<!DOCTYPE html>
<html>
<head>
    <title>Biodataku</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: "Anek Latin-Regular", Helvetica, sans-serif;
        }
        .box {
            width: 732px;
            height: 465px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }
        .box .rectangle {
            width: 100%;
            height: 100%;
            background-color: #13d0f9;
            border-radius: 14px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .label1 .prov {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-weight: 400;
            color: #000000;
            font-size: 24px;
            text-align: center;
            white-space: nowrap;
        }
        .label2 .kota {
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            font-weight: 400;
            color: #000000;
            font-size: 24px;
            text-align: center;
            white-space: nowrap;
        }
        .box .tmptFoto {
            position: absolute;
            width: 164px;
            height: 193px;
            top: 100px;
            right: 20px;
            background-image: url({{ asset('cantikku.png') }});
            background-size: cover;
            z-index: 2;
        }
        .nik, .nonik {
            position: absolute;
            top: 70px;
            left: 20px;
            font-family: "OCR A Extended", monospace;
            font-weight: 500;
            color: #000000;
            font-size: 30px;
        }
        .nonik {
            left: 120px;
        }
        .gol, .o {
            position: absolute;
            top: 180px;
            right: 230px;
            font-size: 14px;
        }
        .o {
            right: 210px;
        }
        table {
            position: absolute;
            top: 130px;
            left: 20px;
            font-size: 14px;
        }
        .malang, .buat {
            position: absolute;
            bottom: 150px;
            right: 50px;
            font-size: 12px;
            text-align: center;
        }
        .buat {
            bottom: 130px;
        }
        .ttd {
            position: absolute;
            width: 139px;
            height: 43px;
            bottom: 80px;
            right: 30px;
            background-image: url({{ asset('ttd.png') }});
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="rectangle"></div>
        <div class="tmptFoto"></div>
        <div class="ttd"></div>
        <div class="label1"><div class="prov">PROVINSI JAWA TIMUR</div></div>
        <div class="label2"><div class="kota">KOTA MALANG</div></div>
        <div class="nik">NIK</div>
        <div class="nonik">: 0123456789123456</div>
        <div class="gol">Gol. Darah :</div>
        <div class="o">O</div> 
        <table border="0">
            <tbody>
                <tr><td>Nama</td><td>:</td><td>Annisa Prissilya</td></tr>
                <tr><td>Tempat/Tgl Lahir</td><td>:</td><td>MALANG, 22-06-2004</td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td>PEREMPUAN</td></tr>
                <tr><td>Alamat</td><td>:</td><td>MATAHARI </td></tr>
                <tr><td style="padding-left: 40px;">RT/RW</td><td>:</td><td>222/222</td></tr>
                <tr><td style="padding-left: 40px;">Kel/Desa</td><td>:</td><td>TUNJUNGSEKAR</td></tr>
                <tr><td style="padding-left: 40px;">Kecamatan</td><td>:</td><td>LOWOKWARU</td></tr>
                <tr><td>Agama</td><td>:</td><td>ISLAM</td></tr>
                <tr><td>Status Perkawinan</td><td>:</td><td>BELUM KAWIN</td></tr>
                <tr><td>Pekerjaan</td><td>:</td><td>PELAJAR/MAHASISWA</td></tr>
                <tr><td>Kewarganegaraan</td><td>:</td><td>WNI</td></tr>
                <tr><td>Berlaku Hingga</td><td>:</td><td>SEUMUR HIDUP</td></tr>
            </tbody>
        </table>
        <div class="malang">KOTA MALANG</div>
        <div class="buat">06-04-2020</div>
    </div>
</body>
</html>
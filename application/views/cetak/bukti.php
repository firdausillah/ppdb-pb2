<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Cetak Bukti Pendaftaran <?= $siswa->nama ?></title>
</head>

<body>
    <section id="cetak">
        <div class="container pt-5 py-5">
            <button class="btn btn-primary btn-sm d-print-none" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-danger btn-sm d-print-none" onClick="javascript:window.close();"><i class="fa fa-window-close"></i> Close</button>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-borderless table-sm">
                        <tbody>
                            <tr>
                                <td colspan="1" class="text-center align-middle" style="width: 10%;"><img src="<?= base_url('assets/img/logo.png') ?>" height="100px" alt=""></td>
                                <td colspan="4" style="width: 40%;" class="text-center">
                                    <h5 style="margin-top: -5px;">YAYASAN PUSPA DUNIA</h5>
                                    <h3 style="margin-top: -5px;">SMK PUSPA BANGSA 2</h3>
                                    <h5 style="margin-top: -5px;">NPSN : 69852108 NSS : 402052524050 NIS : 400610</h5>
                                    <h5 style="margin-top: -5px;">Jurusan : Asisten Keperawatan, Akuntansi dan Keuangan Lembaga, Multimedia</h5>
                                    <h5 style="margin-top: -5px;">Terakreditasi "B"</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <table style="margin-top: -15px; margin-bottom: -28px;" class="table table-borderless table-sm">
                        <tbody>
                            <tr>
                                <td colspan="1" style="width: 10%;"></td>
                                <td colspan="4" style="width: 40%;" class="text-center">
                                    <p>Jl. H. Ichsan No. 45 Kesilir, Kec.Siliragung, Kab. Banyuwangi, Telp: (0333) 711484</p>
                                    <p style="margin-top: -20px;">smkpuspabangsa2@gmail.com, Website: smkpuspabangsa2.sch.id</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col">
                    <h5 style="margin-top: -5px;">LEMBAR REGISTRASI</h5>
                    <h5 style="margin-top: -5px;">CALON PESERTA DIDIK BARU</h5>
                    <h5 style="margin-top: -5px;">TAHUN PELAJARAN 2022/2023</h5>
                </div>
            </div>
            <table class="table table-bordered font-weight-bold mt-4">
                <tbody>
                    <tr>
                        <td style="width: 30%; font-size: 20px;">Kode Registrasi</td>
                        <td style="font-size: 20px;"><?= $siswa->kode_pendaftaran ?></td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px;">Tanggal Reg.</td>
                        <td style="font-size: 20px;"><?php $date = date_create($siswa->tgl_daftar);
                                                        echo date_format($date, "d F Y"); ?></td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px;">Nama Lengkap</td>
                        <td style="font-size: 20px;"><?= $siswa->nama ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="row mt-4">
                <div class="col">
                    <p style="font-size: 22px;">Nama diatas dinyatakan telah berhasil melakukan registrasi Penerimaan Peserta Didik Baru (PPDB) </p>
                    <p style="margin-top: -10px; font-size: 22px;"> Puspa Bangsa 2 tahun pelajaran 2022/2023 dan diberikan izin belajar oleh orangtua / wali.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-borderless text-center">
                        <tbody>
                            <tr>
                                <td  style="height: 100px; font-size: 20px;">Orangtua / Wali,</td>
                                <td></td>
                                <td  style="height: 100px; font-size: 20px;">Calon Peserta Didik Baru,</td>
                            </tr>
                            <tr>
                                <td style="height: 100px; font-size: 20px;">........................................</td>
                                <td></td>
                                <td style="height: 100px; font-size: 20px;">........................................</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td  style="height: 100px; font-size: 20px;">Mengetahui, Petugas</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="height: 100px; font-size: 20px;">........................................</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

            <script language="javascript" type="text/javascript">
                function windowClose() {
                    window.open('', '_parent', '');
                    window.close();
                }
            </script>
            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
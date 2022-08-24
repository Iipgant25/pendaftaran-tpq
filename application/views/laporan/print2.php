<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Print</title>  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
    <div class="container mt-3">
        <img src="<?= base_url('assets/gambar/logo_tpq.png')?>" style="position: absolute; width: 60px; height: auto;">
        <table style="width: 100%;">
            <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                TAMAN PENDIDIKAN AL-QUR'AN (TPQ) NURUL HIDAYAH
                <br>KABUPATEN KARAWANG
                </span>
            </td>
            </tr>
        </table>

        <hr class="line-title"> 
        <p align="center">
            <b>FORMULIR PENDAFTARAN SANTRI BARU <br>
            TPQ NURUL HIDAYAH<br>
            Tahun Ajaran 2022/2023</b>
        </p><br>
        <div class="row">
            <div class="col-md-4">
                <p>Nama Lengkap Santri</p>
                <p>NIK Santri</p>
                <p>Nomor KK</p>
                <p>Tempat, Tanggal Lahir</p>
                <p>Jenis Kelamin</p>
                <p>Anak Ke</p>
                <p>Alamat</p>
                <p>Telp/Hp (WhatsApp)</p><br>
                <h5><b>IDENTITAS ORANG TUA/WALI</b></h5><br>
                <p><b>NIK Ayah</b></p>
                <p>&emsp;&emsp;Nama Ayah</p>
                <p>&emsp;&emsp;Pendidikan Terakhir Ayah</p>
                <p>&emsp;&emsp;Pekerjaan Ayah</p><br>
                <p><b>NIK Ibu</b></p>
                <p>&emsp;&emsp;Nama Ibu</p>
                <p>&emsp;&emsp;Pendidikan Terakhir Ibu</p>
                <p>&emsp;&emsp;Pekerjaan Ibu</p><br>
                <p><b>Nama Wali</b></p>
                <p>Alamat Wali</p>
                <p>Telp/Hp Wali</p>
            </div>
            <div class="col-md-8">
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $santri['nama_santri']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $santri['nik_santri']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $santri['no_kk']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $santri['tempat_lahir']; ?>, <?= $santri['tgl_lahir']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $santri['jenis_kelamin']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: &emsp;<?= $santri['anak_ke']; ?>  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Dari &emsp;<?= $santri['dari']; ?> &emsp;Bersaudara</p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $santri['alamat']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $santri['no_hp']; ?></p>
                <br><br><br>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ayah['nama_ayah']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ayah['nik_ayah']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ayah['pendidikan']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ayah['pekerjaan']; ?></p><br>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ibu['nik_ibu']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ibu['nama_ibu']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ibu['pendidikan']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $ibu['pekerjaan']; ?></p><br>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $wali['nama_wali']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $wali['alamat']; ?></p>
                <p> &emsp;&emsp;&emsp;&emsp;: <?= $wali['no_hp']; ?></p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-5"></div>
            <div class="col-3">
                <p>Karawang,<?= date("d-m-Y"); ?></p>
                <p>Orang Tua/Wali Santri</p><br><br><br>
                <p>...............................................</p>
                
            </div>
        </div>
        <script type="text/javascript">
            window.print();
        </script>
    </div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
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
            LAPORAN DATA SANTRI <br>
            <b>Tahun Ajaran <?= $tahun; ?></b>
        </p>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>No Hp</th>
                <th>Jenis Kelamin</th>
                <th>Tempat lahir</th>
                <th>Tgl Lahir</th>
                <th>Alamat</th>
            </tr>
            <?php foreach ($santri as $d): ?>
                </tr>
                    <td><?= $d['nama_santri'];?></td>
                    <td><?= $d['nik_santri'];?></td>
                    <td><?= $d['no_hp'];?></td>
                    <td><?= $d['jenis_kelamin'];?></td>
                    <td><?= $d['tempat_lahir'];?></td>
                    <td><?= $d['tgl_lahir'];?></td>
                    <td><?= $d['alamat'];?></td>
                </tr>
            <?php endforeach; ?>
        </table>
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
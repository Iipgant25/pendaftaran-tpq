<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Pendaftaran TPQ</title>
  </head>
  <body>
	
	<div class="container border bg-light shadow mt-5 mb-3 p-3 bg-white rounded">
		<form action="<?= base_url('pendaftaran/daftar')?>" method="post" enctype="multipart/form-data">
			<h3 class="alert alert-success text-center">FORM PENDAFTARAN</h3>

			<?php if($this->session->flashdata('message')) : ?>
				<div class="alert alert-success" role="alert">
					<?= $this->session->flashdata('message'); ?>
				</div>
			<?php endif; ?>

			<?php if($this->session->flashdata('danger')) : ?>
				<div class="alert alert-danger" role="alert">
					<?= $this->session->flashdata('danger'); ?>
				</div>
			<?php endif; ?>

			<h5 class="mt-5 mb-2"><b>IDENTITAS CALON SANTRI</b></h5>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Lengkap</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_santri">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">NIK Calon Santri</label>
					<input type="text" class="form-control" id="inputPassword4" name="nik_santri">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Nomor Kartu Keluarga (KK)</label>
				<input type="number" class="form-control" id="inputAddress" name="no_kk">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputAddress2">Tempat Lahir</label>
					<input type="text" class="form-control" id="inputAddress2" name="tempat">
				</div>
				<div class="form-group col-md-6">
					<label for="inputAddress3">Tanggal Lahir</label>
					<input type="date" class="form-control" id="inputAddress3" name="tgl">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputCity">Alamat</label>
					<input type="text" class="form-control" id="inputCity" name="alamat">
				</div>
				<div class="form-group col-md-4">
				<label for="inputState">Jenis Kelamin</label>
				<select id="inputState" class="form-control" name="jeniskel">
					<option selected>Pilih...</option>
					<option value="laki laki">Laki-laki</option>
					<option value="perempuan">perempuan</option>
				</select>
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">Anak Ke</label>
					<input type="text" class="form-control" id="inputZip" name="ke">
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">Dari Bersaudara</label>
					<input type="text" class="form-control" id="inputZip" name="dari">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Telp/Hp (WhatsApp)</label>
				<input type="number" class="form-control" id="inputAddress" name="no_hp">
			</div>


			<h5 class="mt-5 mb-2"><b>IDENTITAS ORANG TUA/WALI</b></h5>
			
			<h6 class="mt-3"><b>AYAH</b></h6>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Ayah</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_ayah">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">NIK Ayah</label>
					<input type="text" class="form-control" id="inputPassword4" name="nik_ayah">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6"> 
					<label for="inputEmail4">Pendidikan Terakhir</label>
					<input type="text" class="form-control" id="inputEmail4" name="pendidikan_ayah" >
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Pekerjaan</label>
					<input type="text" class="form-control" id="inputPassword4" name="pekerjaan_ayah">
				</div>
			</div>

			<h6 class="mt-3"><b>IBU</b></h6>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Ibu</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_ibu">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">NIK Ibu</label>
					<input type="text" class="form-control" id="inputPassword4" name="nik_ibu">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Pendidikan Terakhir</label>
					<input type="text" class="form-control" id="inputEmail4" name="pendidikan_ibu">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Pekerjaan</label>
					<input type="text" class="form-control" id="inputPassword4" name="pekerjaan_ibu">
				</div>
			</div>


			<h6 class="mt-4"><b>WALI</b></h6>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Wali</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_wali">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Alamat Wali</label>
					<input type="text" class="form-control" id="inputPassword4" name="alamat_wali">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Telp/Hp (WhatsApp)</label>
				<input type="number" class="form-control" id="inputAddress" name="no_hp_wali">
			</div>

			<h5 class="mt-5 mb-2"><b>UPLOAD BERKAS</b></h5>

			<div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">KTP Orang Tua</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('assets/img/ktp.png'); ?>" alt="gambar" class="img-thumbnail img-preview">
                </div>
                <div class="col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="ktp" name="ktp" onchange="preview()">
                        <label class="custom-file-label" for="ktp">Choose file</label>
                    </div>
                </div>
            </div>
			<div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">KK</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('assets/img/kk.jpg'); ?>" alt="gambar" class="img-thumbnail img-preview2">
                </div>
                <div class="col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="kk" name="kk" onchange="previewKK()">
                        <label class="custom-file-label dua" for="ktp">Choose file</label>
                    </div>
                </div>
            </div>
			<div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Akte</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('assets/img/akte.jpg'); ?>" alt="gambar" class="img-thumbnail img-preview3">
                </div>
                <div class="col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="akte" name="akte" onchange="previewAkte()">
                        <label class="custom-file-label tiga" for="ktp">Choose file</label>
                    </div>
                </div>
            </div>

			<button type="submit" class="btn btn-primary mt-3">Daftar</button>
			<a href="<?= base_url('Splass'); ?>" class="btn btn-secondary mt-3">Kembali</a>
		</form>
	</div>
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

	<script>
        function preview() {
            const ktp = document.querySelector('#ktp');
            const ktpLabel = document.querySelector('.custom-file-label');
            const imgPrevieew = document.querySelector('.img-preview');

            ktpLabel.textContent = ktp.files[0].name;

            const fileKTP = new FileReader();
            fileKTP.readAsDataURL(ktp.files[0]);

            fileKTP.onload = function(e) {
                imgPrevieew.src = e.target.result;
            }
        }

        function previewKK() {
            const selfi = document.querySelector('#kk');
            const selfiLabel = document.querySelector('.dua');
            const imgPrevieew2 = document.querySelector('.img-preview2');

            selfiLabel.textContent = selfi.files[0].name;

            const fileSelfi = new FileReader();
            fileSelfi.readAsDataURL(selfi.files[0]);

            fileSelfi.onload = function(e) {
                imgPrevieew2.src = e.target.result;
            }
        }

		function previewAkte() {
            const selfi = document.querySelector('#akte');
            const selfiLabel = document.querySelector('.tiga');
            const imgPrevieew2 = document.querySelector('.img-preview3');

            selfiLabel.textContent = selfi.files[0].name;

            const fileSelfi = new FileReader();
            fileSelfi.readAsDataURL(selfi.files[0]);

            fileSelfi.onload = function(e) {
                imgPrevieew2.src = e.target.result;
            }
        }

    </script>


  </body>
</html>
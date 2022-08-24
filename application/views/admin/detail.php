<div class="container">
<div class="container border bg-light shadow mt-5 mb-3 p-5 bg-white rounded">
		<form>
			<h5 class=" mb-2"><b>IDENTITAS SANTRI</b></h5>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Lengkap</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_santri" readonly value="<?= $santri['nama_santri']; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">NIK Calon Santri</label>
					<input type="text" class="form-control" id="inputPassword4" name="nik_santri" readonly value="<?= $santri['nik_santri']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Nomor Kartu Keluarga (KK)</label>
				<input type="number" class="form-control" id="inputAddress" name="no_kk" readonly value="<?= $santri['no_kk']; ?>">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputAddress2">Tempat Lahir</label>
					<input type="text" class="form-control" id="inputAddress2" name="tempat" readonly value="<?= $santri['tempat_lahir']; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="inputAddress3">Tanggal Lahir</label>
					<input type="text" class="form-control" id="inputAddress3" name="tgl" readonly value="<?= $santri['tgl_lahir']; ?>">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputCity">Alamat</label>
					<input type="text" class="form-control" id="inputCity" name="alamat" readonly value="<?= $santri['alamat']; ?>">
				</div>
				<div class="form-group col-md-4">
                    <label for="inputState">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="inputZip" name="ke" readonly value="<?= $santri['jenis_kelamin']; ?>">
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">Anak Ke</label>
					<input type="text" class="form-control" id="inputZip" name="ke" readonly value="<?= $santri['anak_ke']; ?>">
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">Dari Bersaudara</label>
					<input type="text" class="form-control" id="inputZip" name="dari" readonly value="<?= $santri['dari']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Telp/Hp (WhatsApp)</label>
				<input type="number" class="form-control" id="inputAddress" name="no_hp" readonly value="<?= $santri['no_hp']; ?>">
			</div>


			<h5 class="mt-5 mb-2"><b>IDENTITAS ORANG TUA/WALI</b></h5>
			
			<h6 class="mt-3"><b>AYAH</b></h6>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Ayah</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_ayah" readonly value="<?= $ayah['nama_ayah']; ?>">
				</div>  
				<div class="form-group col-md-6">
					<label for="inputPassword4">NIK Ayah</label>
					<input type="text" class="form-control" id="inputPassword4" name="nik_ayah" readonly value="<?= $ayah['nik_ayah']; ?>">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6"> 
					<label for="inputEmail4">Pendidikan Terakhir</label>
					<input type="text" class="form-control" id="inputEmail4" name="pendidikan_ayah" readonly value="<?= $ayah['pendidikan']; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Pekerjaan</label>
					<input type="text" class="form-control" id="inputPassword4" name="pekerjaan_ayah" readonly value="<?= $ayah['pekerjaan']; ?>">
				</div>
			</div>

			<h6 class="mt-3"><b>IBU</b></h6>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Ibu</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_ibu" readonly value="<?= $ibu['nama_ibu']; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">NIK Ibu</label>
					<input type="text" class="form-control" id="inputPassword4" name="nik_ibu" readonly value="<?= $ibu['nik_ibu']; ?>">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Pendidikan Terakhir</label>
					<input type="text" class="form-control" id="inputEmail4" name="pendidikan_ibu" readonly value="<?= $ibu['pendidikan']; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Pekerjaan</label>
					<input type="text" class="form-control" id="inputPassword4" name="pekerjaan_ibu" readonly value="<?= $ibu['pekerjaan']; ?>">
				</div>
			</div>


			<h6 class="mt-4"><b>WALI</b></h6>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nama Wali</label>
					<input type="text" class="form-control" id="inputEmail4" name="nama_wali" readonly value="<?= $wali['nama_wali']; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Alamat Wali</label>
					<input type="text" class="form-control" id="inputPassword4" name="alamat_wali" readonly value="<?= $wali['alamat']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Telp/Hp (WhatsApp)</label>
				<input type="number" class="form-control" id="inputAddress" name="no_hp_wali" readonly value="<?= $wali['no_hp']; ?>">
			</div>

			<h5 class="mt-5 mb-2"><b>BERKAS</b></h5>

			<div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">KTP Orang Tua</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('assets/gambar/') . $berkas['ktp']; ?>" alt="gambar" class="img-thumbnail img-preview">
                </div>
            </div>
			<div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">KK</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('assets/gambar/') . $berkas['kk']; ?>" alt="gambar" class="img-thumbnail img-preview2">
                </div>
            </div>
			<div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Akte</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('assets/gambar/') . $berkas['akte']; ?>" alt="gambar" class="img-thumbnail img-preview3">
                </div>
            </div>
		</form>
	</div>
</div>

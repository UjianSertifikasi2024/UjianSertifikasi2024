<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"> <a class="text-muted fw-light" href="<?= base_url('C_Nasabah') ?>">Nasabah/</a>
		Tambah</h4>
	<!-- Basic Layout -->
	<div class="row">
		<div class="col-xl">
			<div class="card mb-4">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="mb-0">Tambah Pelapak</h5>
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-floating form-floating-outline mb-4">
							<input type="text" class="form-control" name="nama" id="basic-default-fullname"
								value="<?= set_value('nama'); ?>" placeholder="Masukkan Nama Lengkap" />
							<label for="basic-default-fullname">Nama Pelapak</label>
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-floating form-floating-outline mb-4">
							<input type="text" class="form-control" name="Alamat" id="basic-default-company"
								value="<?= set_value('Alamat'); ?>" placeholder="Masukkan Alamat" />
							<label for="basic-default-company">Alamat</label>
							<?= form_error('Alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-floating form-floating-outline mb-4">
							<input type="text" id="basic-default-phone" name="No_tlp" class="form-control phone-mask"
								value="<?= set_value('No_tlp'); ?>" placeholder="Masukkan Nomor Telp" />
							<label for="basic-default-phone">Nomor Telpon</label>
							<?= form_error('No_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
		<!-- Merged -->

	</div>
</div>
<!-- / Content -->

<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
	<h3>INSERT DATA</h3>
</div>

<div class="col">
	<?php
	if (!empty(session()->getFlashdata('info'))) {
		echo '<div class="alert alert-danger" role="alert">';
		$error = session()->getFlashdata('info');
		foreach ($error as $key => $value) {
			echo $key . " -> " . $value;
			echo "<br>";
		}

		echo '</div>';
	}

	?>
</div>

<div class="col-6">
	<form action="<?= base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label for="harga">Kategori</label>
			<select class="form-control" name="idkategori" id="idkategori">
				<?php foreach ($kategori as $key => $value) : ?>
					<option value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label for="menu">Menu</label>
			<input type="text" name="menu" required class="form-control">
		</div>
		<div class="form-group">
			<label for="harga">Harga</label>
			<input type="number" name="harga" required class="form-control">
		</div>
		<div class="form-group">
			<label for="harga">Gambar</label>
			<input type="file" name="gambar" required class="form-control">
		</div>
		<div class="form-group mt-3">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
		</div>
	</form>
</div>

<?= $this->endSection() ?>